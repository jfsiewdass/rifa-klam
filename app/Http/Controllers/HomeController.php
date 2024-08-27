<?php

namespace App\Http\Controllers;

use App\Models\DayRate;
use App\Models\Lottery;
use App\Models\LotteryNumber;
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
    public function numbers_check(Request $request) {
        //dd($request->all());
        
        try {
            DB::beginTransaction();
            foreach (json_decode($request->numbers) as $value) {
                //dd($value);
                LotteryNumber::create(['number' => $value, 'lottery_id' => $request->lottery_id]);
            }
            $response = ['code' => 200, 'message' => 'Números reservados'];
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

        return $result;
    }
}
