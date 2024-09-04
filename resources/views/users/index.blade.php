@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex justify-content-between align-items-center margin-tb">
        <div class="pull-left">
            <h2>Gestión de usuarios</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success mb-2" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> Crear usuario</a>
        </div>
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
<div class="table-responsive">
<table class="table table-bordered">
   <tr>
       <th>N°</th>
       <th>Nombre</th>
       <th>Correo electronico</th>
       <th>Perfil</th>
       <th width="280px">Accion</th>
   </tr>
   @foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
               <label class="badge bg-success">{{ $v }}</label>
            @endforeach
          @endif
        </td>
        <td>
             {{-- <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fa-solid fa-list"></i> </a> --}}
            <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="width: 100px">
                <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> </button>
            </form>
        </td>
    </tr>
 @endforeach
</table>
</div>
{!! $data->links('pagination::bootstrap-5') !!}

<p class="text-center text-primary"><small></small></p>
@endsection
