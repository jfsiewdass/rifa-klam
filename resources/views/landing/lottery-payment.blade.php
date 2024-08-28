@extends('layouts.landingPage')
@section('content')

<div  class="banner-section-v1 pt-70-fixed pb-70-fixed n4-bg position-relative overflow-hidden">
    
</div>
<div style="background-color: white;" class=" mx-md-15 mx-5 ">
    <h1 class="text-center">{{ $lottery->name }}</h1>
    
    
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col-xl-1"></div>
            <div class="col-xl-5 me-xl-10 col-xs-12">
                <h3 class="text-left text-success">RIFA #{{ $lottery->unique_id }}</h3>
                <br>
                <h3 class="text-left">{{ $lottery->name }}</h3>
                <br>
                <p class="text-justify" style="text-align: justify">{!! $lottery->detail !!}</p>
                <br>
                <h5 class="text-left" >Tasa del día {{ $rate->rate }} Bs</h5>
                <br>
                <h5 class="text-left" style="color: red">Rango de números {{ $lottery->number_range }}</h5>
                <br>
                <h3 class="text-left" style="color: red">${{ $lottery->amount }} por rifa</h3>
                <br>
                <div>
                    <h3 class="text-left">Números seleccionados</h3>
                    <div class="text-left" id="numeros"></div>
                </div>
                
            </div>
            <div class="col-xl-5 col-xs-12 text-center bg-light rounded border">
                <img class="d-block w-100" src="{{ Storage::url($lottery->images[0]) }}"  alt="img">
                
            </div>
            <div class="col-xl-1"></div>
        </div>
       
        <div class="col-md-10 my-10">
            <form id="paymentForm" method="POST" action="{{ route('payment.store') }}" class="row py-3 rounded border">
                <input type="hidden" name="day_rate_id" value="{{ $rate->id }}">
                <input type="hidden" name="lottery_id" value="{{ $lottery->id }}">
                <input type="hidden" name="amount" value="{{ $lottery->id }}" id="amount">
                <input type="hidden" name="numbers" id="numbers">
                <h3 class="text-center text-success mb-10">REALIZAR COMPRA</h3>
                <div>
                    <h3 id="subtotal"></h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Nombre" id="name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        <input type="text" name="surname" class="form-control" placeholder="Apellido" id="surname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Telefono:</strong>
                        <input type="text" name="phone" class="form-control" placeholder="Apellido" id="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Tipo de pago:</strong>
                        <select name="payment_type" class="form-control" placeholder="Tipo de pago" id="payment_type">
                            <option value="1">TRANSFERENCIA</option>
                            <option value="2">PAGO MÓVIL</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Banco:</strong>
                        <input type="text" name="bank_code" class="form-control" placeholder="Banco" id="bank_code">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Número de referencia:</strong>
                        <input type="text" name="reference_number" class="form-control" placeholder="Banco" id="reference_number">
                    </div>
                </div>
                <div class="col-xs-12 row row justify-content-center mt-5">
    
                    <div class="col-md-4">
                        @csrf
                        <button type="submit"
                            class="btn btn-success cmn-btn radius12 w-100 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-4 py-3 px-xl-6 px-5 n0-clr mt-1"
                            id="btnNext">
                            <span class="fw_600 n0-clr">
                                Pagar
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿Desea continuar?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Si continúa tendrá 3 minutos para procesar el pago</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Cancelar</button>
              <button type="button" class="btn btn-success" id="paymentProcess">Continuar</button>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/plugins/bootstrap.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PaymentRequest', '#paymentForm') !!}
<script>
   $(document).ready(function() {
    const savedNumbers = JSON.parse(localStorage.getItem('savedNumbers')) || [];
    const numerosSeleccionados = JSON.parse(localStorage.getItem('numerosSeleccionados')) || [];
    
    
    if (savedNumbers.length == 0) {
        window.location.href = '{{ route("home") }}';
    }


    let amount = parseInt("{{ $lottery->amount }}");

    let dollar = @json($rate);

    $('#subtotal').text(`Total a pagar ${(parseFloat(dollar.rate) * (numerosSeleccionados.length * amount).toFixed(2))} Bs`);
    
    $('#amount').val(numerosSeleccionados.length * amount * parseInt(dollar.rate));
    $('#numbers').val(`${JSON.stringify(savedNumbers)}`)
    const botones = numerosSeleccionados.map(createButton);
    
    botones.forEach(boton => $('#numeros').append(boton));

    function createButton(numero) {
            const boton = $('<button>').addClass('numero').text(numero);
            boton.data('numero', numero); // Almacenamos el número en el elemento para facilitar la búsqueda

            // Marcar los números seleccionados
            if (numerosSeleccionados.includes(numero)) {
                boton.addClass('seleccionado');
            }

            return boton; // Retornamos el botón creado
        }
   })

    function closeModal() {
        $("#exampleModal").modal('toggle');
    }
    
</script>
@endsection