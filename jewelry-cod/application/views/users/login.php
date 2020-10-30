<div id="content-wrapper-parent">
  <div id="content-wrapper">
    <!-- Content -->
    <div id="content" class="clearfix">
      <div id="breadcrumb" class="breadcrumb">
        <div itemprop="breadcrumb" class="container">
          <div class="row">
            <div class="col-md-24">
              <a href="/" class="homepage-link" title="Back to the frontpage">Inicio</a>
              <span>/</span>
              <span class="page-title">Iniciar sesión</span>
            </div>
          </div>
        </div>
      </div>
      <section class="page-content">
        <div class="container">
          <div class="row">
            <div id="page-header" class="col-md-24">
              <h1 id="page-title">Iniciar Sesión</h1>
            </div>
            <div id="col-main" class="col-md-24 register-page clearfix">
              <div class="row">
                <?php if (validation_errors()): ?>
                  <div class="alert alert-danger">
                    <?= validation_errors(); ?>
                  </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')): ?>
          				<div class="alert alert-warning">
          					<?= $this->session->flashdata('error') ?>
          				</div>
          			<?php endif; ?>
              </div>
              <form method="post" action="/users/login" accept-charset="UTF-8">
                <input name="form_type" type="hidden"><input name="utf8" value="✓" type="hidden">
                <ul id="register-form" class="row list-unstyled">
                      <label class="control-label">Correo electronico : </label>
                    <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" required="required" placeholder="Admin" />
                  </li>
                  <li id="emailf" class="">
                    <label class="control-label">Contraseña: </label>
                    <input type="password" class="form-control" name="password" required="required" placeholder="********" />
                    <a href="<?= URL ?>users/recover_password">¿Olvidaste tu contraseña?</a>
                  </li>
                  <li class="unpadding-top action-last">
                  <button class="btn" type="submit">Iniciar Sesión</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<!--
<div class='col-md-12'>
  <div class="col-md-6">
    <label class="floating-label">Correo electronico : </label>
    <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" required="required" placeholder="Admin" />
  </div>
</div>
<div class='col-md-12'>
  <div class="col-md-6 margin-bottom">
    <label class="floating-label">Contraseña: </label>
    <input type="password" class="form-control" name="password" required="required" placeholder="********" />
  </div>
</div>
