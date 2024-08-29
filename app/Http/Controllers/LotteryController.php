<?php
    
namespace App\Http\Controllers;

use App\Http\Requests\LotteryRequest;
use App\Models\Lottery;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LotteryController extends Controller
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
        
        $lotteries = Lottery::latest()->paginate(10);
        $lotteries->transform(function ($rifa) {
            $images = Storage::disk('public')->allFiles('images/' . $rifa->id);
            $rifa->images = $images;
            return $rifa;
        });
        //dd($lotteries);
        return view('lotteries.index',compact('lotteries'))
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
        return view('lotteries.create', compact('images'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LotteryRequest $request)
    {
            // request()->validate([
            //     'name' => 'required|min:3',
            //     'detail' => 'required|min:3',
            //     'startDate' => 'required',
            //     // 'endDate' => 'required',
            //     'amount' => 'required',
            //     'starNumber' => 'required_with:endNumber|integer|min:1',
            //     'endNumber' => 'required_with:starNumber|integer|gt:starNumber',
            //     'file.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            // ]);
        
        
        try {
            DB::beginTransaction();
            //dd($request->all());
            $inputs = [
                "name" => $request->name,
                "detail" => $request->detail,
                "start_date" => $request->startDate,
                "end_date" => $request->endDate,
                'amount' => $request->amount,
                "number_range" => $request->qty_numbers,
                "user_id" => Auth::id(),
            ];
            
            $rifa = Lottery::create($inputs);
        
            foreach($request->file('file') as $image) {
                Storage::disk('public')->put('images/' . $rifa->id, $image);
            }
            DB::commit();
            
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Log::error('RifaController.store -> '.$th->getMessage());
            return response()->json([
                'message' => 'El post ha sido creado exitosamente',
                'post' => $inputs
            ], 201);
        }

        return response()->json([
            'message' => 'El post ha sido creado exitosamente',
            'post' => $inputs
        ], 201);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Lottery  $rifa
     * @return \Illuminate\Http\Response
     */
    public function show(Lottery $lottery): View
    {
        $purchased_numbers = $lottery->vouchers()->with(['lotteryNumbers', 'status_voucher'])->paginate(10);
        return view('lotteries.numbers',compact('lottery', 'purchased_numbers'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RLotteryifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function edit(Lottery $rifa): View
    {
        return view('lotteries.edit',compact('rifa'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rifa  $rifa
     * @return \Iltype =luminate\Http\Response
     */
    public function update(Request $request, Lottery $rifa): RedirectResponse
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $rifa->update($request->all());
    
        return redirect()->route('lotteries.index')
                        ->with('success','rifa actualizado exitosamente');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lottery  $rifa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lottery $rifa): RedirectResponse
    {
        $rifa->delete();
    
        return redirect()->route('lotteries.index')
                        ->with('success','rifa eliminado exitosamente');
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
            
        } catch (\Throwable $th) {
            //throw $th;
        }
     
        return response()->json(['success'=>$images]);
    }
}
