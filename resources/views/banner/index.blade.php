@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12  margin-tb mb-10">
            <h2>Banner</h2>
    </div>
</div>

@session('success')
    <div class="alert alert-success" role="alert"> 
        {{ $value }}
    </div>
@endsession

@session('error')
    <div class="alert alert-danger" role="alert"> 
        {{ $value }}
    </div>
@endsession

<form method="POST" action="{{ route('banner.store') }}" id="banner-form">
    @csrf
    <div class="row">
        {{-- <div class="col-xs-12 col-sm-12 col-md-4"></div> --}}
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Titulo blanco 1:</strong>
                <input type="text" name="title_white_one" placeholder="Titulo blanco 1" class="form-control" value="{{ $banner->title_white_one }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Titulo blanco 2:</strong>
                <input type="text" name="title_white_two" placeholder="Titulo blanco 2" class="form-control" value="{{ $banner->title_white_two }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Titulo verde:</strong>
                <input type="text" name="title_green" placeholder="Titulo verde" class="form-control" value="{{ $banner->title_green }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                <textarea name="description" placeholder="Descripción" class="form-control">{{ $banner->description }}</textarea>
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-4"></div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success cmn-btn s1-bg radius12 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-2 py-3 px-xl-6 px-5 n0-clr mt-1">
                <i class="fa-solid fa-floppy-disk"></i> Guardar
            </button>
        </div>
    </div>
</form>

<p class="text-center text-primary"><small></small></p>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
{!! JsValidator::formRequest('App\Http\Requests\BannerRequest', '#banner-form') !!}
@endsection
