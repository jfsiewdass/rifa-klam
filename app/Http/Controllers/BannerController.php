<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = Banner::get()->first();
       
        
        return view('banner.index', compact('banner'));
    }

    public function store(Request $request)
    {
        Banner::find(1)->update([
            'title_white_one' => $request->title_white_one, 
            'title_white_two' => $request->title_white_two, 
            'description' => $request->description
        ]);
        
        return redirect()->route('banner.index')->with('success', 'Banner guardado correctamente');
    }
}
