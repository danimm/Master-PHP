<div class="container mt-4">
  <h1>Últimas entradas</h1>
  <article>
    <?php
    $entradas = getUltimasEntradas($db);
    if (!empty($entradas)) :
      while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
        <div class="card mb-4">
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

    <a href="#" class="btn btn-primary">Ver todas las entradas</a>
  </article>
</div>