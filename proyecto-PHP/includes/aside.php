<?php require_once 'includes/helpers.php'; ?>

<aside>
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-10 offset-1">
          <h4>Login</h4>
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


          <h4 class="mt-4">Registrarse</h4>

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

        </div>
      </div>

    </div>
  </div>
</aside>