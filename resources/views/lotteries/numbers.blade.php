@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex justify-content-between align-items-center margin-tb">
        <div class="pull-left">
            <h2> {{ $lottery->name }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-secondary" href="{{ route('lotteries.index') }}"><i class="fa fa-arrow-left"></i> Atras</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Producto:</strong>
            {{ $lottery->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detalle:</strong>
            {{ $lottery->detail }}
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Capture</th>
            <th>#</th>
            <th>Nombres</th>
            <th>Documento</th>
            <th>Cantidad de números</th>
            <th>Referencia</th>
            <th>Monto</th>
            <th>Estatus</th>

            <th >Acción</th>
        </tr>
        @forelse ($purchased_numbers as $i => $number)
        {{-- {{ dd($number->status_voucher()) }} --}}
        <tr>
            <td><img src="{{ asset('storage/'.$number->capture) }}" style="width: 100px" alt="Mi imagen" class="img-thumbnail"></td>
            <td>{{ ++$i }}</td>
            <td>{{ $number->name.' '.$number->surname }}</td>
            <td>{{ $number->document }}</td>
            <td>
                
                <div> 
                    @foreach ($number->lotteryNumbers()->get() as $item)
                        <button class="numero">
                        {{ $item->number }}
                    </button>
                    @endforeach
                </div>
            </td>
            <td>{{ $number->reference_number }}</td>
            <td>${{ $number->amount }}</td>
            <td>
                @if(!empty($number->status_voucher()))
                    <label class="badge bg-{{ $number->status_voucher->id == 1 ? 'danger' : 'success' }}">{{ $number->status_voucher->description }}</label>
                @endif
            </td>
            <td width="120px">
                <form action="{{ route('lotteries.destroy',$lottery->id) }}" method="POST">
                    
                    @can('lottery-edit')
                    <a class="btn btn-success btn-sm" href="{{ route('lotteries.edit',$number->id) }}" title="Aceptar"><i class="fa-solid fa-check"></i></a>
                    @endcan

                    @csrf
                    @method('DELETE')

                    @can('lottery-delete')
                    <button type="submit" class="btn btn-danger btn-sm" title="rechazar"><i class="fa-solid fa-ban"></i></button>
                    @endcan
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7"><p class="text-center "><small>No hay resultados</small></p></td>
            
        </tr>
        
        @endforelse
    </table>
</div>
{!! $purchased_numbers->links('pagination::bootstrap-5') !!}
<p class="text-center text-primary"><small></small></p>
@endsection
