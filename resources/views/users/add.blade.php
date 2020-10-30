@extends('layout.layoust')
@section('title')
ALTA USUARIO
@endsection

@section('nav')

@endsection
@section('menu')

@endsection
@section('content')

<h3 class="panel-title">Informacion del Usuario</h3>
<div class="panel-body">
  <div class='col-md-12'>
    <form class="" action="/usuarios" method="POST">
      <div class="col-md-6 form-group">
        <label class="floating-label">Nombre usuario: </label>
        <input type="text" class="form-control" name="username" value="" required="required" placeholder="Admin" />
      </div>
      <div class="col-md-6 form-group">
        <label class="floating-label">Correo electronico : </label>
        <input type="text" class="form-control" name="email" value="" required="required" placeholder="Admin" />
      </div>
    </div>
    <div class='col-md-12'>
      <div class="col-md-6 margin-bottom">
        <label class="floating-label">Contraseña: </label>
        <input type="password" class="form-control" name="password" required="required" placeholder="********" />
      </div>
    <div class="col-md-6 margin-bottom">
      <label class="floating-label">Confirmar contraseña: </label>
      <input type="password" class="form-control" name="password_confirm" required="required" placeholder="********" />
    </div>
    <div class="col-md-12 form-group">
                <button id="ok" type="submit" class="btn btn-info">Guardar</button>
            </div>
    </div>
    </form>

</div>
@endsection
