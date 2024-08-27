<?php

namespace App\Http\Controllers;

use App\Models\DayRate;
use App\Models\Lottery;
use Illuminate\Http\Request;
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
        return view('landing.lottery-detail', compact('id', 'lottery', 'rate'));
    }
    public function numbers_check(Request $request) {
        dd($request->all());

    }
}
