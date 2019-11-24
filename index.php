<?php
include 'bll/functions.php';

$funciones = new Functions();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista de producto</title>

  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h1 class="display-4">Lista de Productos</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Nuevo Producto</button>

        </div>
        <div class="card-body">
          <table <table class="table table-bordered table-dark">
            <thead>
              <th>ID Producto</th>
              <th>Nombre Producto</th>
              <th>Cantidad Producto</th>
              <th>Precio Producto</th>
              <th>Funciones>
            </thead>
            <tbody>
              <?php $funciones->getProductoList(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form action="controller/productos.php" method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="producto_nombre">Nombre Producto</label>
                    <input type="text" class="form-control" id="producto_nombre" required="true" placeholder="Ingrese Nombre Producto">
                  </div>
                  <div class="form-group">
                    <label for="producto_nombre">Cantidad Productos</label>
                    <input type="number" min="0" step="1" class="form-control" id="producto_nombre" required="true" placeholder="Ingrese Cantidad de Producto">
                  </div>
                  <div class="form-group">
                    <label for="producto_nombre">Precio Producto</label>
                    <input type="number" min="0" step="0.1" class="form-control" id="producto_nombre" required="true" placeholder="Ingrese Precio Unitario del Producto">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>

        </div>
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
