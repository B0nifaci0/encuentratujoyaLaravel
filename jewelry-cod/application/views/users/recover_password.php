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
                Ingresa tu correo electronico, te enviaremos un email para ayudate a recuperar tu cuenta.
              </p>
            </div>
            <div id="col-main" class="col-md-24 register-page clearfix">
              <form method="post" action="/users/recover_password" accept-charset="UTF-8">
                <input name="form_type" type="hidden"><input name="utf8" value="✓" type="hidden">
                <ul id="register-form" class="row list-unstyled">
                      <label class="control-label">Correo electronico : </label>
                    <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" required="required" placeholder="ejemplo@gmail.com" />
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
