<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Banner;
use App\Models\DayRate;
use App\Models\Lottery;
use App\Models\LotteryNumber;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
        $banner = Banner::get()->first();
        return view('landing.home', compact('lotteries', 'banner'));
    }

    public function detail($id)
    {
        $id = Crypt::decryptString($id);
        $lottery = Lottery::find($id);
        if ($lottery == null || $lottery->status_lottery_id == 2) {
           return redirect()->route('home');
        }
        $lottery->images = $images = Storage::disk('public')->allFiles('images/' . $lottery->id);

        $rate = DayRate::get()->last();

        $getNumbers = LotteryNumber::where('lottery_id', $lottery->id)->whereIn('status_number_id', [1, 2, 3])->select('number')->get()->toArray();
        //dd($getNumbers);
        $occupiedNumbers = array_column($getNumbers, 'number');
        //dd($occupiedNumbers);
        $range = array_values($this->generateAndSubtractNumbers($lottery->number_range, $occupiedNumbers));

        // dd($range);
        return view('landing.lottery-detail', compact('id', 'lottery', 'rate', 'range'));
    }

    public function payment($id)
    {
        $id = Crypt::decryptString($id);
        $lottery = Lottery::find($id);
        if ($lottery == null || $lottery->status_lottery_id == 2) {
           return redirect()->route('home');
        }
        $rate = DayRate::get()->last();
        $banks = Bank::get();
        $lottery->images = $images = Storage::disk('public')->allFiles('images/' . $lottery->id);
        //dd($range);
        return view('landing.lottery-payment', compact('id', 'lottery', 'rate', 'banks'));
    }

    public function store(Request $request) {
        
        //dd($request->all());
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
                'document' => $request->document,
                'email' => $request->email,
                'phone'=>$request->phone,
                'payment_type'=>$request->payment_type,
                'bank_id'=>$request->bank,
                'reference_number'=>$request->reference_number,
                'bank_code'=>$request->bank_code,
                'capture' => $this->saveImage('captures/' . $request->lottery_id . '/' . $request->document, $request->file('capture')),
            ]);
            
            //Storage::disk('public')->put('captures/' . $request->lottery_id . '/' . $request->document, $request->file('capture'));
            
            $numbers = json_decode($request->numbers);
            // dd($numbers);
            foreach ($numbers as $number) {
                $lotteryNumber = LotteryNumber::find($number->id);
                if ($lotteryNumber) $lotteryNumber->delete();
                
                $lotteryNumber = new LotteryNumber();
                $lotteryNumber->number = $number->number;
                $lotteryNumber->lottery_id = $request->lottery_id;
                
                $lotteryNumber->voucher_id = $voucher->id;
                $lotteryNumber->status_number_id = 2;
                $lotteryNumber->save();
                //dd($number->id);
            }
            // dd($lotteryNumber, $voucher);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
        }

        return redirect()->route('home')->with('success', 'Compra exitosa');
    }

    public function numbers_check(Request $request) {
        //dd($request->savedNumbers);
        try {
            DB::beginTransaction();
            $savedNumbers = json_decode($request->savedNumbers);
            // dd($savedNumbers);
            $numbers = [];
            $allNumbers = json_decode($request->numbers);
            $toSave = [];

            if ($request->reserveAgain) {
                foreach ($savedNumbers as $value) {
                    LotteryNumber::create(['number' => $value->number, 'lottery_id' => $request->lottery_id]);
                }
            } else {

                
                if (count($savedNumbers) > 0) {
                    
                    foreach ($allNumbers as $n) {
                        if (!in_array($n, array_column($savedNumbers, 'number'))) {
                            $toSave[] = $n;
                        }
                    }
                } else {
                    $toSave = $allNumbers;
                }
                foreach ($toSave as $value) {
                    $number = LotteryNumber::create(['number' => $value, 'lottery_id' => $request->lottery_id]);
                    $numbers[] = $number;
                }
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
        
        $start = 0;
        $end = (int) $rangeString;

        // Generar el rango de números
        $allNumbers = range($start, $end);

        // Convertir los números a descontar a un array (si es necesario)
        if (!is_array($numbersToSubtract)) {
            $numbersToSubtract = explode(',', $numbersToSubtract);
            $numbersToSubtract = array_map('intval', $numbersToSubtract);
        }
        // Remover los números a descontar del rango
        // dd($numbersToSubtract);
        $result = array_diff($this->zeroFill($allNumbers, strlen(strval($end))), $numbersToSubtract);

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
                // dd($number->number);
                LotteryNumber::where('number', $number->number)->where('status_number_id', 1)->first()->delete();
            }
            $response = ['code' => 200, 'message' => 'Números eliminados'];
            return response()->json($response);
        } catch (\Throwable $th) {
            //throw $th;
            $response = ['code' => 401, 'message' => 'Número(s) eliminados', 'error' => $th->getMessage()];
            return response()->json($response);
        }
    }

    private function saveImage($path, $file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $path . $fileName;

        Storage::disk('public')->put($filePath, file_get_contents($file));

        return $filePath;
    }
    public function winners()
    {
        $lotteries = Lottery::whereHas('winnerVoucher')->with('winnerVoucher')->where('winner', '<>', null)->orderBy('date', 'desc')->get();        
        $lotteries->transform(function ($lottery) {
            //dd($rifa);
            if ($lottery == null ) return null;
            $images = Storage::disk('public')->allFiles('images/' . $lottery?->id);
            $lottery->images = $images;
            return $lottery;
        });

        // dd($lotteries);
        return view('landing.winner', compact('lotteries'));
    }
}
