@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">
<style type="text/css">
    .dz-preview .dz-image img{
      width: 100% !important;
      height: 100% !important;
      object-fit: cover;
    }
  </style>
<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">
        <div class="pull-left">
            <h2>Crear rifa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-secondary btn-sm" href="{{ route('lotteries.index') }}"><i class="fa fa-arrow-left"></i> Atras</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('lotteries.store') }}" method="POST" id="rifa-form" enctype="multipart/form-data" class="dropzone mt-4 " novalidate>
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre" id="name">
                    <span class="invalid-feedback" id="name-error"></span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Descripción" id="detail"></textarea>
                    <span class="invalid-feedback" id="detail-error"></span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Fecha:</strong>
                    <input type="date" name="startDate" class="form-control" placeholder="Nombre" id="startDate">
                    <span class="invalid-feedback" id="startDate-error"></span>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Cantidad de números:</strong>
                    <div class="row">
                        <div class="form-group col-md-6" >
                            <select name="qty_numbers" class="form-control" placeholder="Tipo de pago" id="qty_numbers">
                                <option value="100">100</option>
                                <option value="1000">1000</option>
                                <option value="10000">10000</option>
                            </select>
                            <span class="invalid-feedback" id="starNumber-error"></span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Monto por rifa:</strong>
                    <input type="text" name="amount" class="form-control" placeholder="Nombre" id="amount">
                    <span class="invalid-feedback" id="amount-error"></span>
                </div>
            </div>
            <div class="form-group mb-4">
                <label class="form-label text-muted opacity-75 fw-medium" for="formImage">Imagen</label>
                <div class="dropzone-drag-area form-control" id="images">
                    <div class="dz-message text-muted opacity-50" data-dz-message>
                        <span>Arrastre las imagenes aquí</span>
                    </div>    
                    <div class="d-none" id="dzPreviewContainer">
                        <div class="dz-preview dz-file-preview">
                            <div class="dz-photo">
                                <img class="dz-thumbnail" data-dz-thumbnail>
                            </div>
                            <button class="dz-delete border-0 p-0" type="button" data-dz-remove>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="times"><path fill="#FFFFFF" d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="invalid-feedback" id="images-error">Campo requerido.</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3" >
            <div class="form-container">
                <button type="button" 
                    class="btn btn-success cmn-btn radius12 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-2 py-3 px-xl-6 px-5 n0-clr mt-1"
                    id="btn-rifa">
                    <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                    <i class="fa-solid fa-floppy-disk"></i> Guardar
                </button>
            </div>
        </div>
    </form>
    {{-- <form action="{{ route('lotteries.upload') }}" method="post" >
        @csrf
        <div>
            <h4>Cargar imagenes</h4>
        </div>
    </form> --}}
<br><br>
<p class="text-center text-primary "><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    
    // $('#detail').summernote();

    $('#rifa-form').dropzone({
        previewTemplate: $('#dzPreviewContainer').html(),
        url: "{{ route('lotteries.store') }}",
        addRemoveLinks: true,
        autoProcessQueue: false,       
        uploadMultiple: true,
        parallelUploads: 5,
        maxFiles: 5,
        acceptedFiles: '.jpeg, .jpg, .png, .gif, webp',
       
        previewsContainer: "#images",
        timeout: 0,
        init: function() 
        {
           
            myDropzone = this;

            // when file is dragged in
            this.on('addedfile', function(file) { 
                $('.dropzone-drag-area').removeClass('is-invalid').next('.invalid-feedback').hide();
            });
        },
        success: function(file, response) 
        {
           
            window.location.href = '{{ route("lotteries.index") }}'
        },
        error: function(xhr, status, error) {
            console.log(status.errors);
            
            if (status.errors) {
                //console.log('aqui');
                
                $.each(status.errors, function(key, value) {
                        console.log(key, value);
                        
                            $('#' + key + '-error').text(value[0]);
                            $('#' + key).addClass('is-invalid');
                        });
            }
        
        }
    });

    /**
     * Form on submit
     */
    $('#btn-rifa').on('click', function(event) {
        event.preventDefault();
        var $this = $(this);
        $('#name-error').text('');
        $('#detail-error').text('');
        $('#startDate-error').text('');
        $('#endDate-error').text('');
        $('#starNumber-error').text('');
        $('#endNumber-error').text('');
        $('#name').removeClass('is-invalid');
        $('#detail').removeClass('is-invalid');
        $('#startDate').removeClass('is-invalid');
        $('#endDate').removeClass('is-invalid');
        $('#starNumber').removeClass('is-invalid');
        $('#endNumber').removeClass('is-invalid');
        
       
        console.log($('#rifa-form')[0].checkValidity());
        
        // validate form & submit if valid
        if ($('#rifa-form')[0].checkValidity() === true  && !validateForm()) {
            event.stopPropagation();

            // show error messages & hide button spinner    
            $('#rifa-form').addClass('was-validated'); 
            // $this.children('.spinner-border').addClass('d-none');

            // if dropzone is empty show error message
            if (!myDropzone.getQueuedFiles().length > 0) {                        
                $('.dropzone-drag-area').addClass('is-invalid').next('.invalid-feedback').show();
            }
        } else {

            // if everything is ok, submit the form
            myDropzone.processQueue();
        }
    });
    function validateForm() {
        const name = $('#name').val();
        const detail = $('#detail').val();
        const startDate = $('#startDate').val();
        const endDate = $('#endDate').val();
        const starNumber = $('#starNumber').val();
        const endNumber = $('#endNumber').val();
        const amount = $('#amount').val();
        const images = $('#images').find('img');
        
        let isValid = true;

        // Validación del nombre
        if (name.length < 3) {
            $('#name').addClass('is-invalid');
            $('#name-error').text('El nombre debe tener al menos 3 caracteres.');
            isValid = false;
        } else {
            $('#name').removeClass('is-invalid');
            $('#name-error').text('');
        }

        // Validación del detalle
        if (detail.length < 3) {
            $('#detail').addClass('is-invalid');
            $('#detail-error').text('El detalle debe tener al menos 3 caracteres.');
            isValid = false;
        } else {
            $('#detail').removeClass('is-invalid');
            $('#detail-error').text('');
        }
        if (amount.length < 1) {
            $('#amount').addClass('is-invalid');
            $('#amount-error').text('El detalle debe tener al menos 1 caracter.');
            isValid = false;
        } else {
            $('#amount').removeClass('is-invalid');
            $('#amount-error').text('');
        }

        // Validación de fechas (ajusta según tu formato de fecha)
        if (!startDate) {
            $('#startDate').addClass('is-invalid');
            //$('#endDate').addClass('is-invalid');
            $('#startDate-error').text('Las fechas de inicio y fin son obligatorias.');
            //$('#endDate-error').text('Las fechas de inicio y fin son obligatorias.');
            isValid = false;
        } else {
            // Aquí puedes agregar lógica para validar que startDate sea menor que endDate
            // ...
        }

        // Validación de números
        if (starNumber && endNumber) {
            // console.log(starNumber, endNumber);
            
            if (isNaN(starNumber) || isNaN(endNumber)) {
                $('#starNumber').addClass('is-invalid');
                $('#endNumber').addClass('is-invalid');
                $('#starNumber-error').text('Debe ser un numero');
                $('#endNumber-error').text('Debe ser un numero');
                isValid = false;
            } else if (starNumber < 1 || endNumber <= starNumber) {
                $('#starNumber').addClass('is-invalid');
                $('#endNumber').addClass('is-invalid');
                $('#starNumber-error').text('El número de inicio debe ser mayor o igual a 0 y menor que el número final.');
                $('#endNumber-error').text('El número final debe ser mayor que el número de inicio.');
                isValid = false;
            } else {
                $('#starNumber').removeClass('is-invalid');
                $('#endNumber').removeClass('is-invalid');
                $('#starNumber-error').text('');
                $('#endNumber-error').text('');
            }
        } else  {
            // console.log(starNumber, endNumber, 'or');
            $('#starNumber').addClass('is-invalid');
            $('#endNumber').addClass('is-invalid');
            $('#starNumber-error').text('Campo requerido');
            $('#endNumber-error').text('Campo requerido');
            isValid = false;
        }

        if (images.length === 0) {
            isValid = false;
        }

        return isValid;
    }

</script>
@endsection
