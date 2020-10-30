<h3 class="panel-title">Informacion del Usuario</h3>
<div class="panel-body">
  <div class='col-md-12'>
    <div class="col-md-6 form-group">
      <label class="floating-label">Nombre usuario: </label>
      <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" required="required" placeholder="Admin" />
    </div>
    <div class="col-md-6 form-group">
      <label class="floating-label">Correo electronico : </label>
      <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" required="required" placeholder="Admin" />
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
  </div>
</div>
