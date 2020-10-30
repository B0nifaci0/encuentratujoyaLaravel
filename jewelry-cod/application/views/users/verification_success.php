<section class="content">
  <div class="container">
    <div class="row">
      <h2>Felicidades <?= explode(' ', $user->name)[0] ?> Tu cuenta esta validada</h2>
      <p>
        <a href="<?= URL .'users/login' ?>" class="btn btn-info">Iniciar sessión</a>
      </p>
    </div>
  </div>
</section>
