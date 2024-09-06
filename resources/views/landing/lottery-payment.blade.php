@extends('layouts.landingPage')
@section('content')

<div class="banner-bredcrumbs pt-70-fixed n4-bg position-relative overflow-hidden">
    <div class="container">
        <div class="breadcrumbs-content position-relative cus-z1 pt-120 pb-120 text-center">
            <span class="mb-xxl-8 mb-xl-6 mb-5 display-two nw1-clr aos-init aos-animate" data-aos="zoom-in"
                data-aos-duration="2000">
                Sección de pago
            </span>
            <div class="box">
                <ul class="bread d-flex justify-content-center align-items-center gap-2">
                    <li>
                        <a href="{{ route('home') }}" class="fs20 fw_600 nw1-clr">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <i class="ph ph-caret-double-right nw1-clr"></i>
                    </li>
                    <li>
                        <span class="fs20 fw_600 p1-clr">
                            Sección de pago
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Banner Shape Images-->
    <img src="{{ asset('assets/images/global/ball-shape19-1.png') }}" alt="img"
        class="ball-shape-breadcrumb aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="2200">
    <img src="{{ asset('assets/images/global/ball-breadcrumbs.png') }}" alt="img" class="ball-circle-breadcrumb">
    <img src="{{ asset('assets/images/global/shape-breadcrum-right.png') }}" alt="img"
        class="shape-breadcrumbright">
    <!--Banner Shape Images-->
</div>
<div class="contest-carslide-section position-relative">
    <div class="container">
        <div
            class="contest-details-carslidewrap position-relative biggest-winner-sldewrap s1-bg swiper py-xxl-5 py-lg-6 py-7 px-2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-99b576f10545f6374" aria-live="polite"
                style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                @foreach ($lottery->images as $key => $image)
                    <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                        data-swiper-slide-index="{{ $key }}" role="group" aria-label="2 / 2"
                        style="width: 500px;">
                        <div class="cons-decar-items">
                            <img src="{{ Storage::url($image) }}" alt="img">
                        </div>
                    </div>
                @endforeach
                {{-- <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 500px;">
                <div class="cons-decar-items">
                    <img src="assets/images/banner/banner-thumb-car1.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 500px;">
                <div class="cons-decar-items">
                    <img src="assets/images/banner/banner-car3.png" alt="img">
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 500px;">
                <div class="cons-decar-items">
                    <img src="assets/images/banner/banner-thumb-car1.png" alt="img">
                </div>
            </div> --}}
            </div>
            <div class="click-slideluxry-button">
                <div class="container">
                    <div class="slider-btn d-inline-flex justify-content-between w-100 gap-xxl-5 gap-3 aos-init aos-animate"
                        data-aos="zoom-in-down" data-aos-duration="1400">
                        <button type="button"
                            class="luxury-prevteam cmn-s1-slide cmn-48 act4-border p1-clr radius-circle" tabindex="0"
                            aria-label="Next slide" aria-controls="swiper-wrapper-99b576f10545f6374">
                            <i class="ph-light ph-caret-left act4-clr"></i>
                        </button>
                        <button type="button"
                            class="luxury-nextteam cmn-s1-slide cmn-48 act4-border p1-clr radius-circle" tabindex="0"
                            aria-label="Previous slide" aria-controls="swiper-wrapper-99b576f10545f6374">
                            <i class="ph-light ph-caret-right act4-clr"></i>
                        </button>
                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</div>
<section class="winners-section n0-bg">
<div class="m-5">
    <h1 class="text-center mb-10">{{ $lottery->name }}</h1>
    
    
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            
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
                <h3 class="text-left" style="color: red">${{ $lottery->amount }} por número</h3>
                <br>
                <div>
                    <h3 class="text-left">Números seleccionados</h3>
                    <div class="text-left" id="numeros"></div>
                </div>
                
          
        </div>
       
        <div class="col-md-6">
            <form id="paymentForm" method="POST" action="{{ route('payment.store') }}" class="row py-3 rounded border mx-0 mx-md-3" enctype="multipart/form-data">
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
                        <strong>Documento de identidad:</strong>
                        <input type="text" name="document" class="form-control" placeholder="Documento de identidad" id="document">
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
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Cargar captura de pago:</strong>
                        <input type="file" name="capture" id="capture" class="form-control" accept="image/*">
                        <img id="preview" src="" alt="Vista previa del capture" style="display: none; height: 200px" class="m-5">
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
        <div class="col-md-1"></div>
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
</section>
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

    const captureInput = document.getElementById('capture');
    const previewImg = document.getElementById('preview');
    captureInput.addEventListener('change', () => {
        const file = captureInput.files[0];
        const reader = new FileReader();

        reader.onload = (e) => {
            previewImg.src = e.target.result;
            previewImg.style.display = 'block'; // Mostrar la imagen
        };

        reader.readAsDataURL(file);
    });
        
   })

    function closeModal() {
        $("#exampleModal").modal('toggle');
    }
    
</script>
@endsection