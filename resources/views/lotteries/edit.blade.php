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
    <div class="col-lg-12 d-flex justify-content-between align-items-center margin-tb">
        <div class="pull-left">
            <h2>Editar rifa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-secondary btn-sm mb-2" href="{{ route('lotteries.index') }}"><i class="fa fa-arrow-left"></i> Atras</a>
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
@session('error')
    <div class="alert alert-danger" role="alert"> 
        {{ $value }}
    </div>
@endsession
<form action="{{ route('lotteries.update', $lottery->id) }}" id="lottery-form" method="POST" enctype="multipart/form-data" class="mt-4 ">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" id="name" value="{{ $lottery->name }}" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalle:</strong>
                <textarea class="form-control" style="height:150px" name="detail" id="detail" placeholder="Detalle">{{ $lottery->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Fecha:</strong>
                <input type="date" name="date" class="form-control" placeholder="Nombre" id="date" value="{{ $lottery->date }}">
                <span class="invalid-feedback" id="date-error"></span>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Cantidad de números:</strong>
               
                <input type="text" name="qty_numbers" value="{{ $lottery->number_range }}" class="form-control" placeholder="Cantidad de números" disabled>
                    
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Monto por rifa:</strong>
                <input type="text" name="amount" class="form-control" placeholder="Nombre" id="amount" value="{{ $lottery->amount }}" disabled>
                <span class="invalid-feedback" id="amount-error"></span>
            </div>
        </div>
        <div class="col-xs-12">
            <strong>Imagenes</strong>
           <div class="row ">
            @foreach ($lottery->images as $key => $image)
                <div class="col-lg-3 mt-3" id="imageContainer_{{ $key }}">
                    <div class="position-relative">
                        <img src="{{ asset('storage/'.$image) }}" alt="" class="img-thumbnail">
                        <button type="button" class="btn btn-default btn-sm position-absolute top-0 end-0 delete-image" data-image="{{ $image }}" data-key="{{ $key }}">
                            <i class="fas fa-trash" style="color: red"></i>
                        </button>
                    </div>
                </div>
            @endforeach
            <input type="hidden" name="deletedImages" id="deletedImages">
           </div>
        </div>
        <div class="form-group mb-4">
            <label class="form-label text-muted opacity-75 fw-medium" for="formImage">Imagen</label>
            <div id="drop-zone" class="drop-zone">
                Arrastra y suelta tus imágenes aquí
                <input type="file" id="imageInput" name="images[]" multiple style="display: none">
            </div>
            <div id="progress-bar"></div>
            <div id="messages"></div>
            <div id="imagePreviews" class="row"></div>
            <div class="invalid-feedback" id="images-error">Campo requerido.</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3" >
            <div class="form-container">
                <button type="submit" 
                    class="btn btn-success cmn-btn radius12 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-2 py-3 px-xl-6 px-5 n0-clr mt-1"
                    id="btn-lottery">
                    <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                    <i class="fa-solid fa-floppy-disk"></i> Actualizar
                </button>
            </div>
        </div>
    </div>
</form>

<p class="text-center text-primary"><small></small></p>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Lottery\UpdateLotteryRequest', '#lottery-form') !!}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> --}}
<script type="text/javascript">
    $(document).ready(function() {
        //$('.delete-image').hide();

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
});
</script>
@endsection
