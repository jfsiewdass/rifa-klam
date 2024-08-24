<?php
    
namespace App\Http\Controllers;
    
use App\Models\Rifa;
use App\Models\RifaImage;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class RifaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //  $this->middleware('permission:rifa-list|rifa-create|rifa-edit|rifa-delete', ['only' => ['index','show']]);
        //  $this->middleware('permission:rifa-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:rifa-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:rifa-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $rifas = Rifa::latest()->paginate(5);

        return view('rifas.index',compact('rifas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $images = [];
        return view('rifas.create', compact('images'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Rifa::create($request->all());
    
        return redirect()->route('rifas.index')
                        ->with('success','rifa created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Rifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function show(Rifa $rifa): View
    {
        return view('rifas.show',compact('rifa'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function edit(Rifa $rifa): View
    {
        return view('rifas.edit',compact('rifa'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rifa  $rifa
     * @return \Iltype =luminate\Http\Response
     */
    public function update(Request $request, Rifa $rifa): RedirectResponse
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $rifa->update($request->all());
    
        return redirect()->route('rifas.index')
                        ->with('success','rifa updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rifa $rifa): RedirectResponse
    {
        $rifa->delete();
    
        return redirect()->route('rifas.index')
                        ->with('success','rifa deleted successfully');
    }
    public function upload(Request $request)
    {
        try {
            //code...
            $images = [];
    
            foreach($request->file('files') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                  
                $image->move(public_path('images'), $imageName);
      
                $images[] = [
                    'path' => asset('/images/'. $imageName),
                    'type' => 'BANNER',
                    'rifa_id' => 1,
                ];
                //dd($images);
            }
            foreach ($images as $imageData) {
                RifaImage::create($imageData);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
     
        return response()->json(['success'=>$images]);
    }

    /**
     * Display uploaded images
     */
    public function preview()
    {
        $images = RifaImage::orderBy('order', 'asc')->get();

        return response()->json($images); 
    }
}
