<?php

namespace App\Http\Controllers;

use App\Models\DayRate;
use App\Models\Lottery;
use App\Models\LotteryNumber;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lotteries = Lottery::latest()->get();
        $lotteries->transform(function ($lottery) {
            //dd($rifa);
            if ($lottery == null ) return null;
            $images = Storage::disk('public')->allFiles('images/' . $lottery?->id);
            $lottery->images = $images;
            return $lottery;
        });
        
        return view('landing.home', compact('lotteries'));
    }

    public function detail($id)
    {
        $lottery = Lottery::find($id);
        if ($lottery == null) {
           return redirect()->route('home');
        }
        $lottery->images = $images = Storage::disk('public')->allFiles('images/' . $lottery->id);

        $rate = DayRate::get()->last();

        $getNumbers = LotteryNumber::where('lottery_id', $lottery->id)->where('status_number_id', '<>', 3)->select('number')->get()->toArray();
        $occupiedNumbers = array_column($getNumbers, 'number');
        //dd($occupiedNumbers);
        $range = array_values($this->generateAndSubtractNumbers($lottery->number_range, $occupiedNumbers));

        //dd($range);
        return view('landing.lottery-detail', compact('id', 'lottery', 'rate', 'range'));
    }

    public function payment($id)
    {
        $lottery = Lottery::find($id);
        if ($lottery == null) {
           return redirect()->route('home');
        }
        $rate = DayRate::get()->last();
        $lottery->images = $images = Storage::disk('public')->allFiles('images/' . $lottery->id);
        //dd($range);
        return view('landing.lottery-payment', compact('id', 'lottery', 'rate'));
    }

    public function store(Request $request) {
        
        $lottery = Lottery::find($request->lottery_id);
        if ($lottery == null) {
           return redirect()->route('home');
        }
        try {
            DB::beginTransaction();
            $voucher = Voucher::create([
                'lottery_id' => $request->lottery_id,
                'day_rate_id' => $request->day_rate_id,
                'amount' => $request->amount,
                'name'=>$request->name,
                'surname'=>$request->surname,
                'document' => $request->surname,
                'phone'=>$request->phone,
                'payment_type'=>$request->payment_type,
                'bank_code'=>$request->bank_code,
                'reference_number'=>$request->reference_number,
            ]);

            $numbers = json_decode($request->numbers);
            //dd($numbers);
            foreach ($numbers as $number) {
                $lotteryNumber = LotteryNumber::find($number->id);
                $lotteryNumber->voucher_id = $voucher->id;
                $lotteryNumber->status_number_id = 2;
                $lotteryNumber->save();
                //dd($number->id);
            }
            DB::commit();
        } catch (\Throwable $th) {
            dd($th);
            DB::rollBack();
        }

        return redirect()->route('home')->with('success', 'Compra exitosa');
    }

    public function numbers_check(Request $request) {
        //dd($request->savedNumbers);
        try {
            DB::beginTransaction();
            $numbers = [];
            $allNumbers = json_decode($request->numbers);
            $savedNumbers = json_decode($request->savedNumbers);
            $toSave = [];
            //dd(array_column($savedNumbers, 'number'), $allNumbers);
            if (count($savedNumbers) > 0) {
                
                foreach ($allNumbers as $n) {
                    //dd(!in_array($n, array_column($savedNumbers, 'number')));
                    if (!in_array($n, array_column($savedNumbers, 'number'))) {
                        $toSave[] = $n;
                    }
                }
            } else {
                $toSave = $allNumbers;
            }
            //dd($toSave);
            foreach ($toSave as $value) {
                //dd($value);
                $number = LotteryNumber::create(['number' => $value, 'lottery_id' => $request->lottery_id]);
                $numbers[] = $number;
            }
            $response = ['code' => 200, 'message' => 'Números reservados', 'numbers' => $numbers];
             DB::commit();
            return response()->json($response);

        } catch (\Throwable $th) {
            DB::rollBack();
            $response = ['code' => 401, 'message' => 'Número(s) ocupado(s)', 'error' => $th->getMessage()];
            return response()->json($response);
        }
    }

    function generateAndSubtractNumbers($rangeString, $numbersToSubtract)
    {
        // Separar el rango
        list($start, $end) = explode('-', $rangeString);
        $start = (int) $start;
        $end = (int) $end;

        // Generar el rango de números
        $allNumbers = range($start, $end);

        // Convertir los números a descontar a un array (si es necesario)
        if (!is_array($numbersToSubtract)) {
            $numbersToSubtract = explode(',', $numbersToSubtract);
            $numbersToSubtract = array_map('intval', $numbersToSubtract);
        }

        // Remover los números a descontar del rango
        $result = array_diff($allNumbers, $numbersToSubtract);

        return $this->zeroFill($result, strlen(strval($end)));
    }
    function zeroFill(array $numeros, $length): array
    {
        return array_map(function ($numero) use ($length) {
            return str_pad($numero, $length, '0', STR_PAD_LEFT);
        }, $numeros);
    }

    function numbers_remove(Request $request) {
        $savedNumbers = json_decode($request->savedNumbers);
        try {
            foreach ($savedNumbers as $number) {
                LotteryNumber::find($number->id)->delete();
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
