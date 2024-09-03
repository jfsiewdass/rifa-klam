<?php

namespace App\Http\Controllers;

use App\Models\DayRate;
use Illuminate\Http\Request;

class DayRateController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $day_rate = DayRate::get()->last();
       
        
        return view('dayRate.index', compact('day_rate'));
    }

    public function store(Request $request)
    {
        DayRate::create(['rate' => $request->dayrate]);
        
        return redirect()->route('dayrate.index')->with('success', 'Tasa del día guardado correctamente');
    }
}
