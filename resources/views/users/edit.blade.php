@extends('layout.layoust')
@section('title')
MODIFICACION USUARIO
@endsection

@section('nav')

@endsection
@section('menu')

@endsection
@section('content')
<h3 class="panel-title">Informacion del Usuario</h3>
<div class="panel-body">
  <form action="{{ route('usuarios.update', ['id' => $users->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
  <div class='col-md-12'>
    <div class="col-md-6 form-group">
      <label class="floating-label">Nombre usuario: </label>
      <input type="text" class="form-control" name="username" value="{{$users->username}}" required="required" placeholder="Admin" />
    </div>
    <div class="col-md-6 form-group">
      <label class="floating-label">Correo electronico : </label>
      <input type="text" class="form-control" name="email" value="{{$users->email}}" required="required" placeholder="Admin" />
    </div>
  </div>
  <div class='col-md-12'>
    <div class="col-md-6 margin-bottom">
      <label class="floating-label">Contraseña: </label>
      <input type="password" class="form-control" name="password"  required="required" placeholder="********" />
    </div>
  <div class="col-md-6 margin-bottom">
    <label class="floating-label">Confirmar contraseña: </label>
    <input type="password" class="form-control" name="password_confirm" required="required" placeholder="********" />
  </div>
  </div>
  <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
        </form>
  </div>
</div>
@endsection
