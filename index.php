<?php include('model/db.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body data-bs-theme="dark">
    <div class="container-fluid bg-dark" >
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inventario</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/producto.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ingreso</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Grafica</h5>
                <p class="card-text">Descripción del producto</p>
                <a href="#" class="btn btn-primary">Mas detalles</a>
            </div>
        </div>

  <?php include('includes/pie.php') ?>