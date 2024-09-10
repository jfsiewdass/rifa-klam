@extends('layouts.landingPage')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
    <div class="banner-bredcrumbs pt-70-fixed n4-bg position-relative overflow-hidden">
        <div class="container">
            <div class="breadcrumbs-content position-relative cus-z1 pt-120 pb-120 text-center">
                <span class="mb-xxl-8 mb-xl-6 mb-5 display-two nw1-clr aos-init aos-animate" data-aos="zoom-in"
                    data-aos-duration="2000">
                    Detalle de la rifa
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
                                Detalle de la rifa
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
        <div class="container ">
            <h1 class="text-center my-10 mb-15">{{ $lottery->name }}</h1>
            @php
                $total = $lottery->number_range;
                $numbers = $lottery->lotteryNumbers()->where('status_number_id', '<>', '1')->count();
                $percent = ($numbers * 100) / $total;
            @endphp

            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-xl-12 me-xl-10 col-xs-12">
                        <h3 class="text-left text-success">RIFA #{{ $lottery->unique_id }}</h3>
                        <br>
                        <h3 class="text-left">{{ $lottery->name }}</h3>
                        <br>
                        <p class="text-justify" style="text-align: justify">{!! $lottery->detail !!}</p>
                        <div class="cmn-prrice-range pe-xxl-6 pe-xl-5 pe-lg-4 pe-3 d-flex align-items-center gap-2 mt-5">
                            <div class="range-custom position-relative"
                                style="--range-width: {{ number_format($percent, 2) }}%;">
                                <span class="curs-range"></span>
                            </div>
                            <span class="n4-clr soldout fw_700 fs-eight">
                                {{ number_format($percent, 2) }}% Vendido
                            </span>
                        </div>
                        <br>
                        <h5 class="text-left">Tasa del día {{ $rate->rate }} Bs</h5>
                        <br>
                        <h5 class="text-left" style="color: red">Rango de números {{ $lottery->number_range }}</h5>
                        <br>
                        <h3 class="text-left" style="color: red">${{ $lottery->amount }} por número</h3>

                    </div>

                </div>
                <div class="col-md-12 mt-3">
                    <h5 class="text-center" id="quantity"></h5>
                </div>
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-md-4 my-3 d-flex">
                            <input type="text" class="form-control me-5" placeholder="Buscar número" id="findNumber">
                            <button class="btn btn-danger border d-flex align-items-center" disabled id="btnCancel">
                                {{-- <i class="ph-bold ph-empty act4-clr"></i> --}}
                                Cancelar
                            </button>
                        </div>

                    </div>
                    <div id="numeros" class="text-center"></div>
                    <div class="row row justify-content-center py-3">
                        <div class="col-md-4">
                            @csrf
                            <button type="button" disabled data-toggle="modal" data-target="#exampleModal"
                                class="btn btn-success cmn-btn radius12 w-100 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-4 py-3 px-xl-6 px-5 n0-clr mt-1"
                                id="btnNext">
                                <span class="fw_600 n0-clr">
                                    Pagar
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Desea continuar?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                onclick="closeModal()">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Si continúa tendrá 3 minutos para procesar el pago</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                onclick="closeModal()">Cancelar</button>
                            <button type="button" class="btn btn-success" id="paymentProcess">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Desea continuar?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                onclick="closeCancelModal()">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Se liberarán los números reservados</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                onclick="closeCancelModal()">Cancelar</button>
                            <button type="button" class="btn btn-success" id="cancelNumbers">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="termModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Términos y Condiciones</h5>
                    {{-- <button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <p>
                        1.- Los números disponibles para la compra en cada una de nuestros sorteos se especificarán en la página de detalles correspondientes a cada sorteo.
                    </p>

                    <p>
                        2.- Solo podrán participar en nuestros sorteos personas naturales mayores de 18 años con nacionalidad venezolana o extranjeros que residan legalmente en Venezuela.
                    </p>

                    <p>
                        3.- Los premios deberán ser retirados en persona en la ubicación designada para cada Sorteo. Solo se realizará entregas personales en la dirección indicada por el ganado del primer premio o premio mayor.
                    </p>

                    <p>
                        4.- La compra mínima requerida para participar en nuestros sorteos en de dos tickets. Los ticket serán asignado de manera aleatoria y los recibirás a través del correo electrónico proporcionado.
                    </p>

                    <p>
                        5.- Para reclamar tu premio tienes un lapso de 72 horas.
                    </p>

                    <p>
                        6.- Los ganadores aceptan aparecer en el contenido audio visual de el sorteo mostrando su presencia en las redes y entrega de los premios. Esto es OBLIGATORIO.
                    </p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" href="{{ route('home') }}">Cancelar</a>
                    <button type="button" class="btn btn-success" id="cancelNumbers" data-dismiss="modal" onclick="closeTermModal()">Continuar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/plugins/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#termModal').modal({
                backdrop: 'static',
                keyboard: false
            }).modal('show');
            
            // countdown()
            let amount = parseInt("{{ $lottery->amount }}");

            let dollar = @json($rate);

            const todosLosNumeros = @json($range);

            const numerosSeleccionados = JSON.parse(localStorage.getItem('numerosSeleccionados')) || [];

            const numerosNuevos = encontrarYAgregarNumeros();

            const totalNumeros = todosLosNumeros.length;
            const numerosPorPagina = 101;

            let numerosAFiltrar = [];


            let paginaActual = 1;


            if (numerosSeleccionados.length > 0) {
                $('#btnNext').prop('disabled', false)
                $('#btnCancel').prop('disabled', false)
                $('#quantity').html(
                    `Números seleccionados ${numerosSeleccionados.length} total a pagar ${(parseFloat(dollar.rate) * (numerosSeleccionados.length * amount))?.toFixed(2)} Bs.`
                    )
            } else {

                $('#btnNext').prop('disabled', true)
                $('#btnCancel').prop('disabled', true)
                $('#quantity').html(``)
            }

            function calcularTotalNumerosFiltrados() {
                let contador = 0;
                for (let i = 1; i <= totalNumeros; i++) {
                    if (!numerosAFiltrar.includes(i)) {
                        contador++;
                    }
                }
                return contador;
            }

            function crearNumeros(pagina, paginaArray = null) {

                const inicio = (pagina - 1) * numerosPorPagina + 1;
                const fin = inicio + numerosPorPagina - 1;


                var paginaActualizada = todosLosNumeros.slice(inicio - 1, fin);

                if (paginaArray?.length > 0) {

                    paginaActualizada = paginaArray
                }

                $('#numeros').empty();
                // Usamos map() para crear los botones
                const botones = paginaActualizada.map(createButton);

                // Agregamos los botones al DOM
                botones.forEach(boton => $('#numeros').append(boton));

                // Event listener para los botones
                botones.forEach(boton => {
                    boton.click(function() {
                        const numero = $(this).data('numero');
                        const indice = numerosSeleccionados.indexOf(numero);

                        if (indice === -1) {
                            numerosSeleccionados.push(numero);
                        } else {
                            numerosSeleccionados.splice(indice, 1);
                        }
                        if (numerosSeleccionados.length > 0) {
                            $('#btnNext').prop('disabled', false)
                            $('#btnCancel').prop('disabled', false)
                            $('#quantity').html(
                                `Números seleccionados ${numerosSeleccionados.length} total a pagar ${(parseFloat(dollar.rate) * (numerosSeleccionados.length * amount))?.toFixed(2)} Bs.`
                                )
                        } else {

                            $('#btnNext').prop('disabled', true)
                            $('#btnCancel').prop('disabled', true)
                            $('#quantity').html(``)
                        }
                        $(this).toggleClass('seleccionado');
                        guardarNumerosSeleccionados();

                    });
                });
            }

            function guardarNumerosSeleccionados() {
                localStorage.setItem('numerosSeleccionados', JSON.stringify(numerosSeleccionados));


            }

            crearNumeros(paginaActual);


            const totalNumerosFiltrados = calcularTotalNumerosFiltrados();

            var totalPaginas = Math.ceil(totalNumerosFiltrados / numerosPorPagina);

            const listaPaginas = $('<ul>').addClass('paginacion');
            listaPaginas.append($('<li>').append($('<a>').attr('id', 'anterior').text('Anterior')));


            for (let i = 1; i <= totalPaginas; i++) {

                const enlace = $('<a>').text(i);
                enlace.click(function() {

                    paginaActual = parseInt($(this).text());
                    crearNumeros(paginaActual);
                    $('.paginacion li').removeClass('active');
                    $(this).parent().addClass('active');
                });

                listaPaginas.append($('<li>').append(enlace));
            }
            listaPaginas.append($('<li>').append($('<a>').attr('id', 'siguiente').text('Siguiente')));

            $('#numeros').after(listaPaginas);
            $('.paginacion li:nth-child(2)').addClass('active');
            $('#anterior').click(function() {
                if (paginaActual > 1) {
                    paginaActual--;
                    crearNumeros(paginaActual);

                    $('.paginacion li').removeClass('active');
                    $(`.paginacion li:nth-child(${paginaActual + 1})`).addClass('active');
                }
            });

            $('#siguiente').click(function() {
                if (paginaActual < totalPaginas) {
                    paginaActual++;
                    crearNumeros(paginaActual);
                    $('.paginacion li').removeClass('active');
                    $(`.paginacion li:nth-child(${paginaActual + 1})`).addClass('active');
                }
            });

            $("#findNumber").keyup(() => {
                var number = $("#findNumber").val();


                if (number) {
                    const targetString = number.toString();

                    const filteredNumbers = todosLosNumeros.filter(num => {
                        const numStr = num.toString();
                        return numStr.includes(targetString);
                    });

                    $('#numeros').empty();

                    totalPaginas = Math.ceil(filteredNumbers.length / numerosPorPagina);
                    paginaActual = Math.min(paginaActual, totalPaginas);
                    crearNumeros(1, filteredNumbers);

                    $('.paginacion li').removeClass('active');
                    $(`.paginacion li:nth-child(${paginaActual + 1})`).addClass('active');
                } else {
                    crearNumeros(1);

                    $('.paginacion li').removeClass('active');
                    $(`.paginacion li:nth-child(${paginaActual + 1})`).addClass('active');
                }
            });

            function createButton(numero) {
                const boton = $('<button>').addClass('numero').text(numero);
                boton.data('numero', numero);

                if (numerosSeleccionados.includes(numero)) {
                    boton.addClass('seleccionado');
                }

                return boton;
            }
            $('#btnNext').on('click', function() {
                $("#exampleModal").modal('show');
            })
            $('#paymentProcess').on('click', function() {
                var formData = new FormData();
                const savedNumbers = JSON.parse(localStorage.getItem('savedNumbers')) || [];

                const numbersRangeSet = new Set(numerosNuevos);
                formData.append('numbers', JSON.stringify(numerosSeleccionados.filter(f => !numbersRangeSet.has(f))));
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('lottery_id', "{{ $lottery->id }}");
                formData.append('savedNumbers', JSON.stringify(savedNumbers.map((s) => ({id: s.id,number: s.number}))));

                $.ajax({
                    type: "POST",
                    url: "{{ route('numbers.check') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // console.log(response);

                        if (response.code == 401) {
                            Swal.fire({
                                title: 'Atención',
                                text: `${numerosSeleccionados.length == 1 ? 'El número seleccionado se encuentra ocupado' : 'Uno o varios números seleccionados se encuentran ocupados'}, por favor seleccione otro número`,
                                icon: 'error',
                                confirmButtonColor: '#109856' // Cambia '#3085d6' por el color deseado
                            })
                           
                        }

                        if (response.code == 200) {
                            console.log(savedNumbers);

                            let numbers = response.numbers.map((n) => {
                                console.log(n);

                                savedNumbers.push(n)
                            })
                            localStorage.setItem('savedNumbers', JSON.stringify(savedNumbers));
                            localStorage.setItem('lottery_id', JSON.stringify(
                                '{{ $id }}'));
                            window.location.href = '{{ route('payment', $id) }}';

                        }
                        closeModal()
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            })
            $('#btnCancel').on('click', function() {
                const botonesNumero = document.querySelectorAll('.seleccionado');

                botonesNumero.forEach(boton => {
                    const savedNumbers = JSON.parse(localStorage.getItem('savedNumbers')) || [];
                    if (savedNumbers.length > 0) {
                        $("#cancelModal").modal('show');
                    } else {
                        localStorage.removeItem('numerosSeleccionados');
                        localStorage.removeItem('savedNumbers');
                        localStorage.removeItem('lottery_id');
                        boton.click();
                    }

                    
                });
            })

            function encontrarYAgregarNumeros() {
                const numbersRangeSet = new Set(todosLosNumeros);

                const numerosNoEncontrados = numerosSeleccionados.filter(num => !numbersRangeSet.has(num));

                todosLosNumeros.push(...numerosNoEncontrados);
                todosLosNumeros.sort((a, b) => a - b);

                return numerosNoEncontrados;
            }
        });

        function closeModal() {
            $("#exampleModal").modal('toggle');
        }
        function closeCancelModal() {
            $("#cancelModal").modal('toggle');
        }
        function closeTermModal() {
            $("#termModal").modal('toggle');
        }
        $('#cancelNumbers').on('click', function() {
            const savedNumbers = JSON.parse(localStorage.getItem('savedNumbers')) || [];
            var formData = new FormData();
            formData.append('savedNumbers', JSON.stringify(savedNumbers.map((s) => ({
                id: s.id,
                number: s.number
            }))));
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('lottery_id', "{{ $lottery->id }}");
            $.ajax({
                type: "POST",
                url: "{{ route('numbers.remove') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    closeCancelModal()
                },
                error: function(error) {
                    // Manejar errores
                    console.error(error);
                }
            });
            const botonesNumero = document.querySelectorAll('.seleccionado');

            botonesNumero.forEach(boton => {
                localStorage.removeItem('numerosSeleccionados');
                localStorage.removeItem('savedNumbers');
                localStorage.removeItem('lottery_id');
                boton.click();
            })
        })
    </script>
@endsection
