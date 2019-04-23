<?php
if (empty($_POST['buscar'])) {
  header("Location: index.php");
}

?>
<?php require_once 'includes/header.php'; ?>


<div class="container-fluid">
  <div class="row mr-0">
    <!-- Parte Central-->
    <div class="col">
      <div class="container mt-4">
        <h1>Resultados de la búsqueda: </h1>
        <article>
          <?php
          $busqueda = getEntradas($db, null, null, $_POST['buscar']);
          if (!empty($busqueda) && mysqli_num_rows($busqueda) >= 1) :
            while ($entrada = mysqli_fetch_assoc($busqueda)) : ?>
              <div class="card mb-4 mt-4">
                <div class="card-header">
                  <?= $entrada['fecha'] . " - " . $entrada['categoria'] . ' | Autor: ' . $entrada['usuario']; ?>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?= $entrada['titulo']; ?></h5>
                  <p class="card-text"><?= substr($entrada['descripcion'], 0, 250) . "..."; ?></p>
                  <a class="btn btn-outline-primary" href="entrada.php?id=<?= $entrada['id'] ?>">
                    Ir a la entrada
                  </a>
                </div>
              </div>
            <?php
          endwhile;
        else :
          ?>
            <div class="jumbotron">
              <h1 class="display-4">Opps!</h1>
              <p class="lead">Todavía no existen entradas para la categoría que seleccionaste..</p>
              <hr class="my-4">
              <p>¿Te gustaría ser el primero en crear una ✍🏻?</p>
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