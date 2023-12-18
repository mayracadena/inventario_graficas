<?php include('../model/db.php');
include('../includes/cabeza.php');
?>
<main class="container p-4">
<div class="row">
    <div class="col-md-4">
        <!-- mensajes de alerta -->

        <?php if (isset($_SESSION['mensaje'])) { ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensaje'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset();
        } ?>

        <!-- Aagregar un nuevo producto -->
        <div class="card card-body">
            <form action="../controller/producto_control.php" method="POST">
                <div class="form-group">
                    Nombre del producto:
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" autofocus>
                </div>
                <div class="form-group">
                    <label class="label label-success">Descripción:</label>
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripción del producto"></textarea>
                </div>
                <div class="form-group">
                    Valor del producto:
                    <div class="input-group mb-3">

                        <span class="input-group-text">$</span>
                        <input type="number" name="precio" class="form-control" placeholder="Ingrese valor del producto">
                    </div>
                </div>

                <div class="form-group">
                    <label class="label label-success">Imagen:</label>
                    <input type="file" name="imagen_g" class="form-control" accept="image/png, image/jpeg">
                </div>
        <br>
                <input type="submit" name="guardar_grafica" class="btn btn-success btn-block" value="Guardar">
            </form>
        </div>
    </div>
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>Descripción</th>
                    <th>precio</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
</main>

<?php include('../includes/pie.php'); ?>