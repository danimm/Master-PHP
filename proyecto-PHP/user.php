<?php require_once 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>

<div class="container-fluid">
  <div class="row mr-0">
    <!-- Parte Central-->
    <div class="col">
      <div class="container mt-4">
        <h1>Mis datos</h1>
        <p>Actualizar mis datos </p>
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
        <form action="update-user.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Introduce tu nombre" value="<?= $_SESSION['usuario']['nombre'] ?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" aria-describedby="emailHelp" placeholder="Introduce tus apellidos" value="<?= $_SESSION['usuario']['apellidos'] ?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '';  ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Introduce tu email" value="<?= $_SESSION['usuario']['email'] ?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <?php borrarErrores() ?>
      </div>
    </div>
    <!-- Aside: Parte lateral-->
    <?php include_once 'includes/aside.php'; ?>
  </div>
</div>