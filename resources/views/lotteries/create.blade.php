@extends('layouts.app')

@section('content')
<style type="text/css">
    .drop-zone {
    border: 2px dashed #ccc;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    color: #666;
    outline: none;
    transition: border .3s ease-in-out;
}

.drop-zone.highlight {
    border-color: #007bff;
}

.image-preview {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    padding: 10px;
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

    <form action="{{ route('lotteries.store') }}" method="POST" id="lottery-form" enctype="multipart/form-data" class="mt-4 " novalidate>
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
                    <input type="date" name="date" class="form-control" placeholder="Nombre" id="date">
                    <span class="invalid-feedback" id="date-error"></span>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Cantidad de números:</strong>
                    <select name="qty_numbers" class="form-control" placeholder="Tipo de pago" id="qty_numbers">
                        <option value="100">100</option>
                        <option value="1000">1000</option>
                        <option value="10000">10000</option>
                    </select>
                    <span class="invalid-feedback" id="starNumber-error"></span>
                        
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Monto por rifa:</strong>
                    <input type="text" name="amount" class="form-control" placeholder="Nombre" id="amount">
                    <span class="invalid-feedback" id="amount-error"></span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                <label class="form-label text-muted opacity-75 fw-medium" for="formImage">Imagen</label>
                <div id="drop-zone" class="drop-zone form-control">
                    Arrastra y suelta tus imágenes aquí
                    <input type="file" id="imageInput" name="images[]" multiple id="images" style="display: none">
                    <div id="imagePreviews" class="row"></div>
                </div>
                <div id="progress-bar"></div>
                <div id="messages"></div>
                <div class="invalid-feedback" id="images-error">Campo requerido.</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3" >
            <div class="form-container">
                <button type="submit" 
                    class="btn btn-success cmn-btn radius12 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-2 py-3 px-xl-6 px-5 n0-clr mt-1">
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
{{-- <p class="text-center text-primary "><small>Tutorial by ItSolutionStuff.com</small></p> --}}
@endsection

@section('scripts')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
{{-- {!! JsValidator::formRequest('App\Http\Requests\Lottery\CreateLotteryRequest', '#lottery-form') !!} --}}
<script type="text/javascript">
    jQuery(document).ready(function () {

        $("#lottery-form").each(function () {
            $(this).validate({
                errorElement: 'div',
                errorClass: 'invalid-feedback',

                errorPlacement: function (error, element) {
                    //console.log(element[0].name);
                    if (element[0].name == 'images[]') {
                        error.insertAfter(element.parent());
                    } else {

                        error.insertAfter(element);
                    }
                },
                highlight: function (element) {
                    // console.log(element.id);
                    
                    if (element.id == 'imageInput') {
                        $(element).parent().removeClass('is-valid').addClass('is-invalid');
                    } else {

                        $(element).removeClass('is-valid').addClass('is-invalid');
                    }
                    // $(element).removeClass('is-valid').addClass('is-invalid'); // add the Bootstrap error class to the control group
                },

                
                ignore: "[contenteditable='true']",
                

                unhighlight: function (element) {
                    if (element.id == 'imageInput') {
                        $(element).parent().removeClass('is-invalid').addClass('is-valid');
                    } else {

                        $(element).removeClass('is-invalid').addClass('is-valid');
                    }
                    
                },

                success: function (element) {
                    if (element.id == 'imageInput') {
                        $(element).parent().removeClass('is-invalid').addClass('is-valid');
                    } else {

                        $(element).removeClass('is-invalid').addClass('is-valid');
                    }
                    //$(element).removeClass('is-invalid').addClass('is-valid'); // remove the Boostrap error class from the control group
                },

                focusInvalid: true,
                
                rules: {"name":{"laravelValidation":[
                    ["Required",[],"Campo requerido",true,"name"],
                    ["Min",["3"],"El campo name debe contener al menos 3 caracteres.",false,"name"]]},
                    "detail":{"laravelValidation":[["Required",[],"Campo requerido",true,"detail"],
                    ["Min",["3"],"El campo detail debe contener al menos 3 caracteres.",false,"detail"]]},
                    "amount":{"laravelValidation":[["Required",[],"Campo requerido",true,"amount"]]},
                    "qty_numbers":{"laravelValidation":[["Required",[],"Campo requerido",true,"qty_numbers"]]},
                    "images[*]":{"laravelValidation":[["Required",[],"El campo imagen es obligatorio.",true,
                    //"images[*]"],["Max",["2048"],"El campo imagen debe contener 2048 caracteres como m\u00e1ximo.",false,
                    //"images[*]"]],"laravelValidationRemote":[[{},["images[*]","eyJpdiI6IkRDVTJxTkFLQ0dkd0FZd3dKSUJuaHc9PSIsInZhbHVlIjoiYkhXUTdMbVlhSENaeGpXWDhyZ0VFUHZFWTcrZFNnYnlOSHlKTEJWYnYvcnBQRjVGd2kxN3J0Z1NQOVBMOVBBTkszSHRYZUgzSEJDakRTTDVGWEpqUmc9PSIsIm1hYyI6IjM4MTkwODQwZDgwNzA4NzQzZTc4ZDViYjIxOTgyMTFhZjhhOTQyOTU0NGUzMzRjMmU1N2VhMDUzNjAzNDFkNmQiLCJ0YWciOiIifQ==",false],
                    "validation.illuminate\\_validation\\_rules\\_image_file",false,"images[*]"]]}}           
            });
        });
    });
    $('.img-thumbnail').hover(function() {
        $(this).find('.delete-image').show();
    }, function() {
        $(this).find('.delete-image').hide();
    });

    $('.delete-image').click(function() {
        var image = $(this).data('image');
        var key = $(this).data('key');
        $('#imageContainer_'+ key).fadeOut()
        var deletedImagesArray = $('#deletedImages').val() ? JSON.parse($('#deletedImages').val()) : [];
        deletedImagesArray.push(image);
        $('#deletedImages').val(JSON.stringify(deletedImagesArray));

    });
    // $('#detail').summernote();

    const dropZone = document.getElementById('drop-zone');
    const imageInput = document.getElementById('imageInput');
    const imagePreviews = document.getElementById('imagePreviews');
    dropZone.addEventListener('click', () => {
        imageInput.click();
    });
    // Prevent default actions for drag events
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });

    // Highlight   
   //drop zone on dragenter/dragover
    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, highlight, false);
    });

    // Unhighlight drop zone on dragleave/drop
    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, unhighlight, false);
    });

    // Handle dropped files
    dropZone.addEventListener('drop', handleDrop, false);

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function highlight(e)   
    {
        dropZone.classList.add('highlight');
    }

    function unhighlight(e) {
        dropZone.classList.remove('highlight');
    }

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;   


        // Clear any existing files in the input
        imageInput.value = '';

        // Add the dropped files to the input element (if supported)
        if (typeof imageInput.files === 'object') {
            imageInput.files = files; // Modern browsers
        } else {
            // Fallback for older browsers (manually create File objects)
            for (let i = 0; i < files.length; i++) {
            const file = files[i];
            imageInput.files[i] = new File([file], file.name, { type: file.type });
            }
        }

        handleFiles(files);
    }

    // Handle file selection from both drag-and-drop and input change
    imageInput.addEventListener('change', () => {
        const files = imageInput.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        for (let i = 0; i < files.length; i++) {
            const reader = new FileReader();

            reader.onload = (e) => {
            const img = document.createElement('img');
            img.className = 'img-thumbnail';
            img.src = e.target.result;
            const div = document.createElement('div');
            div.className = 'col-xs-12 col-sm-12 col-md-3 cl-lg-3 mt-2';
            div.appendChild(img);
            imagePreviews.appendChild(div);
            };

            reader.readAsDataURL(files[i]);
        }

    // You can still send the files to the server here using FormData and $.ajax or other methods
    // ... (your server-side code)
    }
</script>
@endsection
