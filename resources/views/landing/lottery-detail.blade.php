@extends('layouts.landingPage')
@section('content')

<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css
" rel="stylesheet">
<div  class="banner-section-v1 pt-70-fixed pb-70-fixed n4-bg position-relative overflow-hidden">
    
</div>
<div style="background-color: white;" class=" mx-md-15 mx-5 ">
    <h1 class="text-center">{{ $lottery->name }}</h1>
    
    
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col-xl-1"></div>
            <div class="col-xl-5 me-xl-10 col-xs-12">
                <h3 class="text-left">{{ $lottery->name }}</h3>
                <br>
                <p class="text-justify" style="text-align: justify">{!! $lottery->detail !!}</p>
                <br>
                <h5 class="text-left" >Tasa del día {{ $rate->rate }} Bs</h5>
                <br>
                <h5 class="text-left" style="color: red">Rango de números {{ $lottery->number_range }}</h5>
                <br>
                <h3 class="text-left" style="color: red">${{ $lottery->amount }} por rifa</h3>
                
            </div>
            <div class="col-xl-5 col-xs-12 text-center bg-light rounded border">
                <img class="d-block w-100" src="{{ Storage::url($lottery->images[0]) }}"  alt="img">
            </div>
            <div class="col-xl-1"></div>
        </div>
        <div class="col-md-12 mt-3">
            <h5 class="text-center" id="quantity"></h5>
        </div>
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-4 my-3">
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
        
        let amount = parseInt("{{ $lottery->amount }}");

        let dollar = @json($rate);
        
        const todosLosNumeros = @json($range);

        const numerosSeleccionados = JSON.parse(localStorage.getItem('numerosSeleccionados')) || [];

        const numerosNuevos = encontrarYAgregarNumeros();

        console.log(numerosNuevos);
        
        const totalNumeros = todosLosNumeros.length;
        const numerosPorPagina = 100;
        
        let numerosAFiltrar = [];
        

        let paginaActual = 1;
        
        
        if (numerosSeleccionados.length > 0) {
            $('#btnNext').prop('disabled', false)
            $('#quantity').html(`Números seleccionados ${numerosSeleccionados.length} total a pagar ${parseInt(dollar.rate) * (numerosSeleccionados.length * amount)} Bs.`)
        } else {

            $('#btnNext').prop('disabled', true)
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
                        $('#quantity').html(`Números seleccionados ${numerosSeleccionados.length} total a pagar ${parseInt(dollar.rate) * (numerosSeleccionados.length * amount)} Bs.`)
                    } else {

                        $('#btnNext').prop('disabled', true)
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
            const numbersRangeSet = new Set(numerosNuevos);
            formData.append('numbers', JSON.stringify(numerosSeleccionados.filter(f => !numbersRangeSet.has(f))));
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('lottery_id', "{{ $lottery->id }}");
            
            $.ajax({
                type: "POST",
                url: "{{ route('numbers.check') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    
                    if (response.code == 401) {
                        Swal.fire(
                            'Atención', 
                            `${numerosSeleccionados.length == 1 ? 'El número seleccionado se encuentra ocupado' : 'Uno o varios números seleccionados se encuentran ocupados'}, por favor seleccione otro número`, 
                            'error'
                        );
                    } 
                    closeModal()
                },
                error: function(error) {
                    // Manejar errores
                    console.error(error);
                }
            });
        })
        function encontrarYAgregarNumeros() {
            // Crear un conjunto (Set) para una búsqueda más eficiente
            const numbersRangeSet = new Set(todosLosNumeros);

            // Filtrar los números de selectedNumbers que no están en numbersRange
            const numerosNoEncontrados = numerosSeleccionados.filter(num => !numbersRangeSet.has(num));

            // Agregar los números no encontrados a numbersRange y ordenar
            todosLosNumeros.push(...numerosNoEncontrados);
            todosLosNumeros.sort((a, b) => a - b);

            return numerosNoEncontrados;
        }
    });

    function closeModal() {
        $("#exampleModal").modal('toggle');
    }
    
</script>
@endsection