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
        <article>
          <?php
          if (!empty($entrada_actual)) : ?>
            <div class="card mb-4 mt-4">
              <div class="card-header">
                <?= $entrada_actual['fecha'] . " - " . $entrada_actual['categoria'] . ' | Autor: ' . $entrada_actual['usuario']; ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?= $entrada_actual['titulo']; ?></h5>
                <p class="card-text"><?= $entrada_actual['descripcion']; ?></p>
                <?php
                if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']) :
                  ?>

                  <a href="editEntrada.php?id=<?= $entrada_actual['id'] ?>" class="btn btn-outline-warning">Editar mi entrada</a>
                  <a href="deleteEntrada.php?id=<?= $entrada_actual['id'] ?>" class="btn btn-danger">Eliminar entrada</a>

                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        </article>
      </div>
    </div>
    <!-- Aside: Parte lateral-->
    <?php include_once 'includes/aside.php'; ?>
  </div>
</div>