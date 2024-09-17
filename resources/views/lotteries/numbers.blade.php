@extends('layouts.app')

@section('content')
    <style>
        @media (max-width: 1224px) {
            .movil-width {
                min-width: 350px;
            }
        }
    </style>
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
    <form action="{{ route('lotteries.show', $lottery->id) }}">

        <div class="row mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Producto:</strong>
                    {{ $lottery->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong># {{ $lottery->unique_id }}</strong>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" style="text-align: justify">
                    <strong>Detalle:</strong>
                    {{ $lottery->detail }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Cédula:</strong>
                    <input type="text" class="form-control" placeholder="Ingrese una cédula" name="document"
                        id="document" value="{{ request()->input('document') }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Número:</strong>
                    <input type="text" class="form-control" placeholder="Ingrese un número" name="number" id="number"
                        value="{{ request()->input('number') }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 mt-6 d-flex">
                <div class="form-group me-3">
                    <button type="submit" class="btn btn-success" id="find">Buscar</button>
                </div>
                <div class="form-group">
                    <a href="{{ route('lotteries.show', $lottery->id) }}" class="btn btn-secondary">Cancelar búsqueda</a>
                </div>
            </div>
        </div>
    </form>
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
                @if ($lottery->status_lottery_id == 2)
                    <th>Ganador</th>
                @endif
                <th>Acción</th>
            </tr>
            @forelse ($purchased_numbers as $i => $number)
                {{-- {{ dd($number->status_voucher()) }} --}}

                <tr>
                    <td>
                        @php $capture = asset((env('APP_ENV') === 'production' ? 'public/' : '') .'storage/'.$number->capture); @endphp
                        <img src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') . 'storage/' . $number->capture) }}"
                            style="width: 100px" alt="Mi imagen" class="img-thumbnail"
                            onclick="displayCapture('{{ $capture }}')">
                    </td>
                    <td>{{ ++$i }}</td>
                    <td>{{ $number->name . ' ' . $number->surname }}</td>
                    <td>{{ $number->document }}</td>
                    <td>

                        <div class="{{ count($number->lotteryNumbers()->get()) > 6 ? 'movil-width' : '' }}">
                            @foreach ($number->lotteryNumbers()->get() as $item)
                                <button class="numero">
                                    {{ $item->number }}
                                </button>
                            @endforeach
                        </div>
                        @if ($number->reject_numbers)
                        @foreach (json_decode($number->reject_numbers, true) as $item)
                            <button class="numero">
                                {{ $item }}
                            </button>
                        @endforeach
                        @endif
                    </td>
                    <td>{{ $number->reference_number }}</td>
                    <td>{{ number_format($number->amount, 2, ',', '.') }} <strong>Bs.</strong></td>
                    <td>
                        @if (!empty($number->status_voucher()))
                            <label
                                class="badge bg-{{ $number->status_voucher->id == 2 ? 'success' : 'danger' }}">{{ $number->status_voucher->description }}</label>
                        @endif
                    </td>
                    @if ($lottery->status_lottery_id == 2)
                        <td>{{ $number->is_winner ? 'SI' : 'NO' }}</td>
                    @endif
                    <td>
                        @can('lottery-edit')
                            <div style="width: 100px">

                                <a class="btn btn-success btn-sm @if ($number->status_voucher_id == 2 || $number->status_voucher_id == 3) visually-hidden @endif"
                                    href="#" title="Aceptar" onclick="accept('{{ $number->id }}')">
                                    <i class="fa-solid fa-check"></i>
                                </a>
                                <a class="btn btn-danger btn-sm  @if ($number->status_voucher_id == 2 || $number->status_voucher_id == 3) visually-hidden @endif"
                                    href="#" title="Rechazar" onclick="reject('{{ $number->id }}')">
                                    <i class="fa-solid fa-ban"></i>
                                </a>
                            </div>
                        @endcan
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">
                        <p class="text-center "><small>No hay resultados</small></p>
                    </td>

                </tr>
            @endforelse
        </table>
    </div>
    <div id="imagePopup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Captura de pantalla</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        onclick="closeModal('#imagePopup')">&times;</button>
                </div>
                <div class="modal-body">
                    <img id="largeImage" src="" alt="Imagen grande">
                </div>
            </div>
        </div>
    </div>
    <div id="acceptModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Desea aprobar el comprobante</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        onclick="closeModal('#acceptModal')">&times;</button>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('lotteries.voucher.accept') }}" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" id="voucherAcceptId", name="voucherId">
                        @can('lottery-delete')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                nclick="closeModal('#acceptModal')">Cerrar</button>
                            <button type="submit" class="btn btn-success">Aceptar</button>
                        @endcan
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div id="rejectModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Desea rechazar el comprobante</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        onclick="closeModal('#rejectModal')">&times;</button>
                </div>
                <form action="{{ route('lotteries.voucher.reject') }}" method="POST">
                    <div class="modal-footer">
                        @csrf
                        @method('POST')
                        <input type="hidden" id="voucherRejectId", name="voucherId">
                        @can('lottery-delete')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                nclick="closeModal('#acceptModal')">Cerrar</button>
                            <button type="submit" class="btn btn-danger">Rechazar</button>
                        @endcan
                    </div>
                </form>
            </div>
        </div>
    </div>

    {!! $purchased_numbers->links('pagination::bootstrap-5') !!}
    <p class="text-center text-primary"><small></small></p>
@endsection

@section('scripts')
    <script>
        function displayCapture(path) {

            $('#largeImage').attr('src', path);

            $('#imagePopup').modal('show');

        }

        function closeModal(modal) {
            $(modal).modal('hide');
            if (modal == '#acceptModal')
                $('#voucherAcceptId').val('')

            if (modal == '#rejectModal')
                $('#voucherRejectId').val('')

        }

        function accept(id) {
            $('#acceptModal').modal('show');
            $('#voucherAcceptId').val(id)
        }

        function reject(id) {
            $('#rejectModal').modal('show');
            $('#voucherRejectId').val(id)
        }

        $(document).ready(function() {
            let document = "{{ request()->input('document') }}";
            let number = "{{ request()->input('number') }}";

            if (document == '' || number == '') {
                $('#find').prop('disabled', false);
            } else {
                $('#find').prop('disabled', true);
            }

            $('#document, #number').on('input', function() {
                var documentValue = $('#document').val();
                var numberValue = $('#number').val();

                if (documentValue.trim() !== '' || numberValue.trim() !== '') {
                    $('#find').prop('disabled', false);
                } else {
                    $('#find').prop('disabled', true);
                }
            });
        });
    </script>
@endsection
