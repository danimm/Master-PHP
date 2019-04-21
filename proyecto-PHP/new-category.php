<?php require_once 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>

<div class="container-fluid">
  <div class="row mr-0">
    <!-- Parte Central-->
    <div class="col">
      <div class="container mt-4">
        <h1>Crear categorías</h1>
        <p>
          Añade nuevas categorías al blog para que los usuarios puedan crear sus entradas.
        </p>
        <form action="save-category.php" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre de la nueva categoría</label>
            <input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
    <!-- Aside: Parte lateral-->
    <?php include_once 'includes/aside.php'; ?>
  </div>
</div>

<?php include_once 'includes/footer.php'; ?>