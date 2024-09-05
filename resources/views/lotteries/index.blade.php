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
@session('error')
    <div class="alert alert-danger" role="alert"> 
        {{ $value }}
    </div>
@endsession
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Números</th>
            <th>Monto</th>
            <th>Imágenes</th>

            <th >Acción</th>
        </tr>
        @forelse ($lotteries as $lottery)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $lottery->name }}</td>
            <td style="width: 380px">
                <span class="d-none d-md-block">
                    {{ $lottery->detail }}
                </span>
                <div class="d-md-none">{{ substr($lottery->detail, 0, 15) }}... </div>
            </td>
            <td style="width: 80px">{{ $lottery->number_range }}</td>
            <td>${{ $lottery->amount }}</td>
            <td>
                <div class="d-none d-md-block">

                    @foreach ($lottery->images as $img)
                        <img src="{{ Storage::url($img) }}" class="img-fluid img-thumbnail" style="width: 80px">
                    @endforeach
                </div>
                @if (isset($lottery->images[0]))
                    
                    <div class="d-md-none"> <img src="{{ Storage::url($lottery->images[0]) }}" class="img-fluid img-thumbnail" style="width: 80px"></div>
                @endif
            </td>
            <td>
                <form action="{{ route('lotteries.destroy',$lottery->id) }}" method="POST" style="width: 100px">
                    <a class="btn btn-secondary btn-sm mt-1" href="{{ route('lotteries.show',$lottery->id) }}" title="Números comprados">
                        <i class="fa-solid fa-list"></i>
                    </a>
                    
                    <a class="btn btn-warning btn-sm mt-1" href="#" title="Ganador" onclick="winner('{{ $lottery->id }}', '{{ $lottery->status_lottery_id }}', '{{ $lottery->winner }}')">
                        <i class="fa-solid fa-medal"></i>
                    </a>

                    @if ($lottery->status_lottery_id == 1)    
                        @can('lottery-edit')
                        <a class="btn btn-primary btn-sm mt-1" href="{{ route('lotteries.edit',$lottery->id) }}" title="Editar" >
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        @endcan
                        
                        @csrf
                        @method('DELETE')
                        
                        @can('lottery-delete')
                            <button type="submit" class="btn btn-danger btn-sm mt-1" title="Inhabilitar la rifa">
                                <i class="fa-solid fa-ban"></i>
                            </button>
                        @endcan
                    @endif
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7"><p class="text-center "><small>No hay resultados</small></p></td>
            
        </tr>
        
        @endforelse
    </table>
    <div id="winnerModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="title">Seleccione el número ganador</h4>
                <button type="button" class="close" data-dismiss="modal" onclick="closeModal('#winnerModal')">&times;</button>
            </div>
            <form action="{{ route('lotteries.select.winner') }}" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <strong>Número:</strong>
                        <input type="text" class="form-control" placeholder="Ingrese el número ganador" name="number" id="number">
                    </div>
                </div>
                <div class="modal-footer">
                    
                    @csrf
                    @method('POST')
                    <input type="hidden" id="lotterId", name="lotterId">
                    
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeModal('#winnerModal')">Cerrar</button>
                    <button type="submit" class="btn btn-success" id="acceptBtn">Aceptar</button>
                 
                    
                </div>
            </form>
          </div>
        </div>
      </div>
</div>
{!! $lotteries->links('pagination::bootstrap-5') !!}

<p class="text-center text-primary"><small></small></p>
@endsection
@section('scripts')
<script>
    function closeModal(modal) {
        $(modal).modal('hide');
        $('#lotterId').val(''); 
    }
    function winner(id, status, winner) {
        $('#winnerModal').modal('show');

        if (status == '2') {
            $('#title').html('Número ganador')
            $('#number').val(winner)
            $('#number').prop('disabled', true)
            $('#acceptBtn').fadeOut()
        } else {
            $('#title').html('Seleccione el número ganador')
            $('#number').val('')
            $('#number').prop('disabled', false)
            $('#acceptBtn').fadeIn()
        }
        $('#lotterId').val(id)
    }
</script>
@endsection
