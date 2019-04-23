<?php require_once 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php
$entrada_actual = getEntrada($db, $_GET['id']);

if (!isset($entrada_actual['id'])) {
  header("Location: index.php");
}
?>

<div class="container-fluid">
  <div class="row mr-0">
    <!-- Parte Central-->
    <div class="col">
      <div class="container mt-4">
        <h1>Aquí podrás editar tu entrada</h1>
        <form action="save-entrada.php?edit=<?= $entrada_actual['id'] ?>" method="POST">
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" value="<?= $entrada_actual['titulo'] ?>">
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control" name="descripcion"><?= $entrada_actual['descripcion'] ?></textarea>
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

                  <option value="<?= $categorie['id'] ?>" <?= ($categorie['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>>
                    <?= $categorie['nombre'] ?>
                  </option>
                <?php
              endwhile;
            endif;
            ?>

            </select>
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

<?php include_once 'includes/footer.php'; ?>