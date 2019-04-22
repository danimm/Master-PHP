<?php require_once 'conexion.php' ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog de Videojuegos</title>
  <!-- Styles de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .footer {
      width: 100%;
      height: 60px;
      margin-top: 20px;
      background-color: #f5f5f5f5;
    }

    .alerta {
      margin-top: 5px;
      padding: 5px;
      font-size: 14px;
      color: white;
      box-shadow: 0px 1px 3px #ccc;
    }

    .alerta-ok {
      background: green;
    }

    .alerta-notok {
      background: red;
    }

    .enlaces {
      display: block;
      margin-top: 10px;
    }

    /* .dropdown-toggle:hover+.dropdown-menu {
      display: none;
    }

    .dropdown-menu {
      display: block;
    } */
  </style>
</head>

<body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand mr-4" href="#">Blog de Videojuegos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <?php
          $categories = getCategories($db);
          if (!empty($categories)) :
            while ($categorie = mysqli_fetch_assoc($categories)) :
              ?>
              <li class="nav-item dropdown">
                <a class="nav-link" href="categoria.php?id=<?= $categorie['id']; ?>"><?= $categorie['nombre']; ?></a>
              </li>
            <?php
          endwhile;
        endif;
        ?>
          <?php if (isset($_SESSION['usuario'])) : ?>
            <li class="nav-item">
              <a class="btn btn-outline-info mr-2 mb-2" href="user.php">Mis datos</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info mr-2 mb-2" href="new-entrada.php">Crear entrada</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info mr-2 mb-2" href="new-category.php">Crear categoría</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-warning mr-2 mb-2" href="logout.php">Cerrar sesión</a>
            </li>
          <?php endif; ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </header>