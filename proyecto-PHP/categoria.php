<?php require_once 'includes/header.php'; ?>
<?php
$categoria = getCategorie($db, $_GET['id']);

if (!isset($categoria['id'])) {
  header("Location: index.php");
}
?>


<div class="container-fluid">
  <div class="row mr-0">
    <!-- Parte Central-->
    <div class="col">
      <div class="container mt-4">
        <?php
        $categoria_actual = getCategorie($db, $_GET['id']);
        ?>
        <h1>Entradas de <?= $categoria_actual['nombre']; ?></h1>
        <article>
          <?php
          $entradas = getEntradas($db, $_GET['id']);
          if (!empty($entradas)) :
            while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
              <div class="card mb-4 mt-4">
                <div class="card-header">
                  <?= $entrada['fecha'] . " - " . $entrada['categoria']; ?>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?= $entrada['titulo']; ?></h5>
                  <p class="card-text"><?= substr($entrada['descripcion'], 0, 250) . "..."; ?></p>
                </div>
              </div>
            <?php
          endwhile;
        endif;
        ?>
          <?php if (empty($entradas)) : ?>
            <div class="jumbotron">
              <h1 class="display-4">Opps!</h1>
              <p class="lead">Todavía no existen entradas para la categoría que seleccionaste..</p>
              <hr class="my-4">
              <p>¿Te gustaría ser el primero en crear una? ✍🏻.</p>
              <a class="btn btn-primary btn-lg" href="new-entrada.php" role="button">¡Claro que sí!</a>
            </div>
          <?php endif; ?>
        </article>
      </div>
    </div>
    <!-- Aside: Parte lateral-->
    <?php include_once 'includes/aside.php'; ?>
  </div>
</div>