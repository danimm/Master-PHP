<?php require_once 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>

<div class="container-fluid">
  <div class="row mr-0">
    <!-- Parte Central-->
    <div class="col">
      <div class="container mt-4">
        <h1>Crear nueva entrada</h1>
        <p>
          Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido.
        </p>
        <form action="save-entrada.php" method="POST">
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" placeholder="Introduce el titulo">
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control" name="descripcion" placeholder="Introduce la descripcion"></textarea>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
          </div>
          <div class="form-group">
            <label for="nombre">Categoría</label>
            <select name="categoria">
              <?php
              $categories = getCategories($db);
              if (!empty($categories)) :
                while ($categorie = mysqli_fetch_assoc($categories)) :
                  ?>

                  <option value="<?= $categorie['id'] ?>">
                    <?= $categorie['nombre'] ?>
                  </option>
                <?php
              endwhile;
            endif;
            ?>

            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
        </form>
        <?php borrarErrores() ?>
      </div>
    </div>
    <!-- Aside: Parte lateral-->
    <?php include_once 'includes/aside.php'; ?>
  </div>
</div>

<?php include_once 'includes/footer.php'; ?>