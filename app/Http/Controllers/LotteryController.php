<?php
    
namespace App\Http\Controllers;

use App\Mail\ConfirmedPurchaseMail;
use App\Models\Lottery;
use App\Models\LotteryNumber;
use App\Models\NumberRange;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
        $ranges = NumberRange::get();
        return view('lotteries.create', compact('images', 'ranges'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $inputs = [
                "name" => $request->name,
                "detail" => $request->detail,
                "date" => $request->date,
                'amount' => $request->amount,
                "number_range" => $request->qty_numbers,
                "user_id" => Auth::id(),
            ];
            
            $lottery = Lottery::create($inputs);
            
            foreach($request->file('images') as $image) {
                Storage::disk('public')->put('images/' . $lottery->id, $image);
            }
            
            DB::commit();
            
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Log::error('LotteryController.store -> '.$th->getMessage());
            return redirect()->back()->with('error', 'Hubo un problema al guardar la rifa');
        }

        return redirect()->route('lotteries.index')->with('succes', 'La rifa ha sido creado exitosamente');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Lottery  $rifa
     * @return \Illuminate\Http\Response
     */
    public function show(Lottery $lottery, Request $request): View
    {
        
        $number = $request->input('number');
        $document = $request->input('document');

        $purchased_numbers = $lottery->vouchers();

        if (isset($number)) {
            $purchased_numbers = $purchased_numbers->whereHas('lotteryNumbers', function ($query) use ($number) {
                $query->where('number', $number);
            });
        }

        if (isset($document)) {
            $purchased_numbers = $purchased_numbers->where('document', $document);
        }
        
        $purchased_numbers = $purchased_numbers
            ->with(['lotteryNumbers', 'status_voucher'])
            ->orderBy('is_winner', 'DESC')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('lotteries.numbers',compact('lottery', 'purchased_numbers'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RLotteryifa  $rifa
     * @return \Illuminate\Http\Response
     */
    public function edit(Lottery $lottery): View
    {
        $images = Storage::disk('public')->allFiles('images/' . $lottery->id);
        $lottery->images = $images;
        // dd($lottery);
        return view('lotteries.edit',compact('lottery'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rifa  $rifa
     * @return \Iltype =luminate\Http\Response
     */
    public function update(Request $request, Lottery $lottery)
    {
        try {
            DB::beginTransaction();
            //dd($request->all());
            $inputs = [
                "name" => $request->name,
                "detail" => $request->detail,
                "date" => $request->date,
                "user_id" => Auth::id(),
            ];
            // dd($inputs);
            $lottery->update($inputs);
            if ($request->deletedImages != '' && $request->deletedImages != null) {
                foreach (json_decode($request->deletedImages, true) as $image) {
                    Storage::delete('public/' . $image);
                }
            }
            
            if ($request->file('images') != null) {
                # code...
                foreach($request->file('images') as $image) {
                    Storage::disk('public')->put('images/' . $lottery->id, $image);
                }
            }
            Db::commit();
    
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('LotteryController.update -> '.$th->getMessage());

            return redirect()->route('lotteries.index')->with('error', 'Hubo un problema al actualizar la rifa');
        }

        return redirect()->route('lotteries.index')->with('success', 'la rifa se actualizó correctamente');
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

    public function lotteries_voucher_accept(Request $request) {
        // try {
        //     DB::beginTransaction();
            $type = 'success';
            $response = 'Comprobante aceptado con exito';

            $voucher = Voucher::find($request->voucherId);
            // dd($voucher);
            Mail::to('israel.sdass@gmail.com')
                ->send(
                    new ConfirmedPurchaseMail($voucher)
                );
        //     if($voucher->status_voucher_id != 1) {
        //         $type = 'error';
        //         $response = 'El comprobante ya esta actualizado';
        //     } 

        //     $voucher->update([
        //         'status_voucher_id' => 2, 
        //         'user_id' =>Auth::id()
        //     ]);

        //     LotteryNumber::where('voucher_id', $request->voucherId)->update(['status_number_id' => 3]);
            
        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     $type = 'error';
        //     $response = 'El comprobante no se actualizó, por favor intente mas tarde';
        // }
        return redirect()->route('lotteries.show', $voucher->lottery_id)->with($type, $response);
    }
    public function lotteries_voucher_reject(Request $request) {
        try {
            DB::beginTransaction();
            $type = 'success';
            $response = 'Comprobante rechazado con exito';

            $voucher = Voucher::find($request->voucherId);

            if($voucher->status_voucher_id != 1) {
                $type = 'error';
                $response ='El comprobante ya esta actualizado';
            } 

            $voucher->update([
                'status_voucher_id' => 3, 
                'user_id' =>Auth::id()
            ]);

            LotteryNumber::where('voucher_id', $request->voucherId)->update(['status_number_id' => 4]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $response ='El comprobante no se actualizó, por favor intente mas tarde';
        }
        return redirect()->route('lotteries.show', $voucher->lottery_id)->with($type, $response);
    }

    public function lotteries_select_winner(Request $request) {
        try {
            DB::beginTransaction();
            $type = 'success';
            $response = 'Se culmuno la rifa sin ganador';
            $lottery = Lottery::find($request->lotterId);
            if ($lottery->winner == null) {
                $existWinnerNumber = LotteryNumber::where('number', $request->number)->first();
                if ($existWinnerNumber) {
                    $existWinnerNumber->update(['is_winner' => true]);
                    //dd($existWinnerNumber);
                    Voucher::find($existWinnerNumber->voucher_id)
                        ->update(['is_winner' => true, 'user_id' =>Auth::id()]);
                    $response = 'Se obtuvo un ganador';
                } else {
                    $response = 'No hubo un ganador';
                }
                $lottery->update(['status_lottery_id' => 2, 'winner' => $request->number]);    
            }else {
                $response = 'Ya existe un ganador';
            }
            DB::commit();
        } catch (\Throwable $th) {
            $type = 'error';
            $response = 'Error al seleccionar un ganador';
            DB::rollBack();

        }
        return redirect()->route('lotteries.index')->with($type, $response);
    }
}
