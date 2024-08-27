@extends('layouts.landingPage')
@section('content')

<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css
" rel="stylesheet">
<div  class="banner-section-v1 pt-70-fixed pb-70-fixed n4-bg position-relative overflow-hidden">
    
</div>
<div style="background-color: white;" class=" mx-md-15 mx-5 ">
    <h1 class="text-center">{{ $lottery->name }}</h1>
    
    
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-left">${{ $lottery->name }}</h3>
            <br>
            <p class="text-justify" style="text-align: justify">{!! $lottery->detail !!}</p>
            <br>
            <h5 class="text-left" >Tasa del día {{ $rate->rate }} Bs</h5>
            <br>
            <h5 class="text-left" style="color: red">Rango de números {{ $lottery->number_range }}</h5>
            <br>
            <h3 class="text-left" style="color: red">${{ $lottery->amount }} por rifa</h3>
            
        </div>
        <div class="col-md-2">
            
        </div>
        {{-- @foreach ($lottery->images as $img) --}}
        <div class="col-md-4 text-center">
            <img class="d-block w-100" src="{{ Storage::url($lottery->images[0]) }}" alt="img">
        </div>
        <div class="col-md-12">
            <h5 class="text-center" id="quantity"></h5>
        </div>
        {{-- @endforeach --}}
        <div class="col-md-12">
            <div class="row row justify-content-center">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar número" id="findNumber">
                </div>
            </div>
            <div id="numeros"></div>
            <div class="row row justify-content-center py-3">
                <div class="col-md-4">
                    @csrf
                    <button type="button" disabled data-toggle="modal" data-target="#exampleModal"
                        class="btn btn-success cmn-btn radius12 w-100 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-4 py-3 px-xl-6 px-5 n0-clr mt-1"
                        id="btnNext">
                        <span class="fw_600 n0-clr">
                            Siguiente
                        </span>
                    </button>
                </div>
            </div>
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
<script>
    $(document).ready(function() {
        
        let range = "{{ $lottery->number_range }}".split('-');
        let amount = parseInt("{{ $lottery->amount }}");

        let dollar = @json($rate);
        console.log(parseInt(dollar.rate));
        
        
        // for (let i = 100; i <= 200; i++) {
            //     numerosAFiltrar.push(i);
            // }
            // console.log(numerosAFiltrar);
        const totalNumeros = range[1];
        const numerosPorPagina = 100;
        const todosLosNumeros = Array.from({ length: totalNumeros }, (_, i) => i + 1);
        let numerosAFiltrar = [];
        

        let paginaActual = 1;
        //numerosAFiltrar = [1, 54, 986, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 15, 16, 17,]

        // Obtener los números seleccionados desde el almacenamiento local
        const numerosSeleccionados = JSON.parse(localStorage.getItem('numerosSeleccionados')) || [];
        if (numerosSeleccionados.length > 0) {
            $('#btnNext').prop('disabled', false)
        } else {

            $('#btnNext').prop('disabled', true)
        }
        //console.log(numerosSeleccionados);
        
        if (numerosSeleccionados?.length > 0) {
            $('#quantity').html(`Números seleccionados ${numerosSeleccionados.length} total a pagar ${parseInt(dollar.rate) * (numerosSeleccionados.length * amount)} Bs.`)
        } else {
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
                    if (numerosSeleccionados?.length > 0) {
                        $('#quantity').html(`Números seleccionados ${numerosSeleccionados.length} total a pagar ${parseInt(dollar.rate) * (numerosSeleccionados.length * amount)} Bs.`)
                    } else {
                        $('#quantity').html(``)
                    }
                    $(this).toggleClass('seleccionado');
                    guardarNumerosSeleccionados();

                });
            });
        }

        function guardarNumerosSeleccionados() {
            localStorage.setItem('numerosSeleccionados', JSON.stringify(numerosSeleccionados));

            if (numerosSeleccionados.length > 0) {
                $('#btnNext').prop('disabled', false)
            } else {

                $('#btnNext').prop('disabled', true)
            }
        }

        crearNumeros(paginaActual);

       
        const totalNumerosFiltrados = calcularTotalNumerosFiltrados(); // Función auxiliar para calcular el total
        
        var totalPaginas = Math.ceil(totalNumerosFiltrados / numerosPorPagina);
        //console.log(totalNumerosFiltrados, totalPaginas);

        // Crear la lista de páginas
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
            
            // Agregar la lista de páginas al DOM
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
                // Filtrar los números basado en el valor de búsqueda
                const filteredNumbers = todosLosNumeros.filter(num => {
                    const numStr = num.toString();
                    return numStr.includes(targetString);
                });
                
                // Actualizar los botones visibles
                $('#numeros').empty();
                
                
                // Actualizar la página actual si es necesario
                totalPaginas = Math.ceil(filteredNumbers.length / numerosPorPagina);
                paginaActual = Math.min(paginaActual, totalPaginas);
                crearNumeros(1, filteredNumbers);
                
                // Actualizar la lista de páginas
                $('.paginacion li').removeClass('active');
                $(`.paginacion li:nth-child(${paginaActual + 1})`).addClass('active');
            } else {
                crearNumeros(1);
                
                // Actualizar la lista de páginas
                $('.paginacion li').removeClass('active');
                $(`.paginacion li:nth-child(${paginaActual + 1})`).addClass('active');
            }
        });

        function createButton(numero) {
            const boton = $('<button>').addClass('numero').text(numero);
            boton.data('numero', numero); // Almacenamos el número en el elemento para facilitar la búsqueda

            // Marcar los números seleccionados
            if (numerosSeleccionados.includes(numero)) {
                boton.addClass('seleccionado');
            }

            return boton; // Retornamos el botón creado
        }
        $('#btnNext').on('click', function() {
            $("#exampleModal").modal('show');
        })
        $('#paymentProcess').on('click', function() {
            var formData = new FormData();
            formData.append('numeros', JSON.stringify(numerosSeleccionados));
            formData.append('_token', "{{ csrf_token() }}");
            Swal.fire('Hola', 'Este es un mensaje de ejemplo', 'error');
            $.ajax({
                type: "POST",
                url: "{{ route('numbers.check') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    
                    console.log(response);
                },
                error: function(error) {
                    // Manejar errores
                    console.error(error);
                }
            });
        })
    });

    function closeModal() {
        $("#exampleModal").modal('toggle');
    }
</script>
@endsection