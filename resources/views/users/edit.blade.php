@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex justify-content-between align-items-center margin-tb">
        <div class="pull-left">
            <h2>Editar Usuario</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-secondary btn-sm mb-2" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i> Atras</a>
        </div>
    </div>
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
      </ul>
    </div>
@endif

<form method="POST" action="{{ route('users.update', $user->id) }}" id="user-form">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" placeholder="Nombre" class="form-control" value="{{ $user->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
            <div class="form-group">
                <strong>Correo electrónico:</strong>
                <input type="email" name="email" placeholder="Correo electrónico" class="form-control" value="{{ $user->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
            <div class="form-group">
                <strong>Contraseña:</strong>
                <input type="password" name="password" placeholder="Contraseña" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
            <div class="form-group">
                <strong>Confirme Contraseña:</strong>
                <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
            <div class="form-group">
                <strong>Perfil:</strong>
                <select name="roles[]" class="form-control">
                    @foreach ($roles as $value => $label)
                        <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : ''}}>
                            {{ $label }}
                        </option>
                     @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success cmn-btn s1-bg radius12 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-xxl-2 py-3 px-xl-6 px-5 n0-clr mt-1"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        </div>
    </div>
</form>

<p class="text-center text-primary"><small></small></p>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ url((env('APP_ENV') === 'production' ? 'public/' : '') .'vendor/jsvalidation/js/jsvalidation.js') }}"></script>
{!! JsValidator::formRequest('App\Http\Requests\User\UpdateUserRequest', '#user-form') !!}
@endsection
