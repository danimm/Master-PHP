<?php require_once 'includes/header.php'; ?>

<div class="container-fluid">
  <div class="row mr-0">
    <!-- Parte Central-->
    <div class="col">
      <div class="container mt-4">
        <h1>Últimas entradas</h1>
        <article>
          <?php
          $entradas = getEntradas($db);
          if (!empty($entradas)) :
            while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
              <div class="card mb-4 mt-4">
                <div class="card-header">
                  <?= $entrada['fecha'] . " - " . $entrada['categoria']; ?>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?= $entrada['titulo']; ?></h5>
                  <p class="card-text"><?= substr($entrada['descripcion'], 0, 250) . "..."; ?></p>
                  <a class="btn btn-outline-primary" href="entrada.php?id=<?=$entrada['id']?>">
                    Ir a la entrada
                  </a>
                </div>
              </div>
            <?php
          endwhile;
        endif;
        ?>
        </article>
      </div>
    </div>
    <!-- Aside: Parte lateral-->
    <?php include_once 'includes/aside.php'; ?>
  </div>
</div>