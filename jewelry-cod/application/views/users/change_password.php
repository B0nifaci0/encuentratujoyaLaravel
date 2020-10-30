<div id="content-wrapper-parent">
  <div id="content-wrapper">
    <!-- Content -->
    <div id="content" class="clearfix">
      <div id="breadcrumb" class="breadcrumb">
        <div itemprop="breadcrumb" class="container">
          <div class="row">
            <div class="col-md-24">
              <a href="/" class="homepage-link" title="Back to the frontpage">Mi cuenta</a>
              <span>/</span>
              <span class="page-title">Recuperar contraseña</span>
            </div>
          </div>
        </div>
      </div>
      <section class="page-content">
        <div class="container">
          <div class="row">
            <div id="page-header" class="col-md-24">
              <h1 id="page-title">Recuperar contraseña</h1>
              <p>
                <?= explode(' ', $user->name)[0] ?> escribe tu nueva contraseña para Jewelry Palace.
                <span>Al menos 6 caracteres</span>
              </p>
              <?php if (validation_errors()): ?>
                <div class="alert alert-danger">
                  <?= validation_errors(); ?>
                </div>
              <?php endif; ?>
            </div>
            <div id="col-main" class="col-md-24 register-page clearfix">
              <form method="post" action="/users/change_password/<?= md5($user->id_user) ?>" accept-charset="UTF-8">
                <input name="form_type" type="hidden"><input name="utf8" value="✓" type="hidden">
                <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
                <ul id="register-form" class="row list-unstyled">
                  <li class="unpadding-top action-last">
                      <label class="control-label">Nueva contraseña</label>
                    <input type="password" class="form-control" name="password" required="required" placeholder="************" />
                  </li>
                  <li class="unpadding-top action-last">
                      <label class="control-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" name="password_confirmation" required="required" placeholder="************" />
                  </li>
                  <li class="unpadding-top action-last">
                  <button class="btn" type="submit">Enviar</button>
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
