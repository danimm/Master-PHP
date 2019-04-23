<div class="container mt-4">
  <h1>Últimas entradas</h1>
  <article>
    <?php
    $entradas = getEntradas($db, '', true);
    if (!empty($entradas)) :
      while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
        <div class="card mb-4">
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
  endif;
  ?>

    <a href="entradas.php" class="btn btn-primary">Ver todas las entradas</a>
  </article>
</div>