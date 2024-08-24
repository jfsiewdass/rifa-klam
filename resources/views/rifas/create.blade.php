@extends('layouts.app')

@section('content')
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
            <a class="btn btn-secondary btn-sm" href="{{ route('rifas.index') }}"><i class="fa fa-arrow-left"></i> atras</a>
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

<form action="{{ route('rifas.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-sm mb-3 mt-2"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        </div>
    </div>
</form>
<form action="{{ route('rifas.upload') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
    @csrf
    <div>
        <h4>Upload Multiple Image By Click On Box</h4>
    </div>
</form>
<button id="uploadFile" class="btn btn-success mt-1">Upload Images</button>
<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
  
    Dropzone.autoDiscover = false;

    var images = @json($images);

    var myDropzone = new Dropzone(".dropzone", { 
        init: function() { 
            myDropzone = this;

            $.each(images, function(key,value) {
                var mockFile = { name: value.name, size: value.filesize};
 
                myDropzone.emit("addedfile", mockFile);
                myDropzone.emit("thumbnail", mockFile, value.path);
                myDropzone.emit("complete", mockFile);
      
            });
        },
       autoProcessQueue: false,
       paramName: "files",
       uploadMultiple: true,
       maxFilesize: 5,
       acceptedFiles: ".jpeg,.jpg,.png,.gif"
    });
  
    $('#uploadFile').click(function(){
       myDropzone.processQueue();
    });

</script>
@endsection
