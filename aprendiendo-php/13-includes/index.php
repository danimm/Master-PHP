<?php include 'includes/cabecera.php'; ?>
  <!-- 
    Include_once solo incluye una vez 
    Require da error si falla y no se ejecuta nada
    Require_once es el más estricto y mejor resultado da
  -->
  <!-- Contenido -->
  <div>
    <h2>Esta es la pagina de inicio</h2>
    <p>Texto de prueba de la pagina de inicio</p>
    <?= var_dump($nombre); ?>
    <hr>
  </div>
  <!-- Footer -->
  <?php include 'includes/footer.php' ?>
</body>
</html>