@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex justify-content-between align-items-center margin-tb">
        <div class="pull-left">
            <h2>Gestión de rifas</h2>
        </div>
        <div class="pull-right">
            @can('lottery-create')
            <a class="btn btn-success mb-2" href="{{ route('lotteries.create') }}"><i class="fa fa-plus"></i> Crear rifa</a>
            @endcan
        </div>
    </div>
</div>

@session('success')
    <div class="alert alert-success" role="alert"> 
        {{ $value }}
    </div>
@endsession
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Rango de numeros</th>
            <th>Monto</th>
            <th>Imágenes</th>

            <th >Acción</th>
        </tr>
        @forelse ($lotteries as $lottery)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $lottery->name }}</td>
            <td style="width: 380px">{{ $lottery->detail }}</td>
            <td style="width: 80px">{{ $lottery->number_range }}</td>
            <td>${{ $lottery->amount }}</td>
            <td>
                @foreach ($lottery->images as $img)
                    <img src="{{ Storage::url($img) }}" class="img-fluid img-thumbnail" style="width: 80px">
                @endforeach
            </td>
            <td width="120px">
                <form action="{{ route('lotteries.destroy',$lottery->id) }}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('lotteries.show',$lottery->id) }}"><i class="fa-solid fa-list"></i></a>
                    @can('lottery-edit')
                    <a class="btn btn-primary btn-sm" href="{{ route('lotteries.edit',$lottery->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    @endcan

                    @csrf
                    @method('DELETE')

                    @can('lottery-delete')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
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
{!! $lotteries->links('pagination::bootstrap-5') !!}

<p class="text-center text-primary"><small></small></p>
@endsection
