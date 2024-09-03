@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12  margin-tb text-center">
        <div class=" text-center">
            <h2 class=" text-center">Tasa del día</h2>
        </div>
        
    </div>
</div>

{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
      </ul>
    </div>
@endif --}}

<form method="POST" action="{{ route('dayrate.store') }}">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                {{-- <strong>Tasa del día:</strong> --}}
                <input type="text" name="dayrate" placeholder="Tasa del día" class="form-control" value="{{ $day_rate->rate }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success cmn-btn s1-bg radius12 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-2 py-3 px-xl-6 px-5 n0-clr mt-1"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        </div>
    </div>
</form>

<p class="text-center text-primary"><small></small></p>
@endsection
