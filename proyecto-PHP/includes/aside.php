<div class="col-4 pr-0">
  <aside>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-10 offset-1">
            <div class="container pl-0 mt-4">
              <?php if (isset($_SESSION['usuario'])) : ?>
                <div class="alert alert-primary" role="alert">
                  Bienvenido: <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']  ?>
                </div>
              <?php endif; ?>
            </div>

            <?php if (!isset($_SESSION['usuario'])) : ?>
              <h4>Login</h4>
              <?php if (isset($_SESSION['error_login'])) : ?>
                <p class="alerta alerta-notok">
                  <?= $_SESSION['error_login']; ?>
                </p>
              <?php endif; ?>
              <form action="login.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce tu email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="****">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
              </form>
            <?php endif; ?>


            <?php if (!isset($_SESSION['usuario'])) : ?>
              <h4 class="mt-4">Registrarse</h4>
              <!-- Registro correctamente-->
              <?php
              if (isset($_SESSION['completado'])) : ?>
                <p class="alerta alerta-ok">
                  <?= $_SESSION['completado']; ?>
                </p>
                <!-- Error al guardar el usuario -->
              <?php elseif (isset($_SESSION['errores']['general'])) : ?>
                <p class="alerta alerta-notok">
                  <?= $_SESSION['errores']['general'] ?>
                </p>
              <?php endif; ?>

              <form action="registro.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Introduce tu nombre">
                  <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellidos</label>
                  <input type="text" class="form-control" name="apellidos" aria-describedby="emailHelp" placeholder="Introduce tus apellidos">
                  <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '';  ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Introduce tu email">
                  <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="****">
                  <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
              </form>
              <?php borrarErrores() ?>
            <?php endif; ?>

          </div>
        </div>

      </div>
    </div>
  </aside>
</div>