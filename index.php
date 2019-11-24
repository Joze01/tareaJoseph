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
              <th>Funciones</th
            </thead>
            <tbody>
              <?php $funciones->getProductoList(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!--MODAL NUEVO PRODUCTO-->
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
                    <input type="text" class="form-control" id="producto_nombre" required="true" name="nombre" placeholder="Ingrese Nombre Producto">
                  </div>
                  <div class="form-group">
                    <label for="producto_nombre">Cantidad Productos</label>
                    <input type="number" min="0" step="1" class="form-control" id="producto_nombre" name="cantidad" required="true" placeholder="Ingrese Cantidad de Producto">
                  </div>
                  <div class="form-group">
                    <label for="producto_nombre">Precio Producto</label>
                    <input type="number" min="0" step="0.1" class="form-control" id="producto_nombre" name="precio" required="true" placeholder="Ingrese Precio Unitario del Producto">
                  </div>
                  <input type="hidden" name="method" value="insertar"/>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <!--MODAL MODIFICAR PRODUCTO-->
    <div class="modal fade" id="modalUpdate" tabindex="-1e" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="controller/productos.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                      <label for="nombreupdate">Nombre Producto</label>
                      <input type="text" class="form-control" id="nombreupdate" required="true" name="nombre" placeholder="Ingrese Nombre Producto">
                    </div>
                    <div class="form-group">
                      <label for="cantidad">Cantidad Productos</label>
                      <input type="number" min="0" step="1" class="form-control" id="cantidadupdate" name="cantidad" required="true" placeholder="Ingrese Cantidad de Producto">
                    </div>
                    <div class="form-group">
                      <label for="precio">Precio Producto</label>
                      <input type="number" min="0" step="0.1" class="form-control" id="precioupdate" name="precio" required="true" placeholder="Ingrese Precio Unitario del Producto">
                    </div>
                    <input type="hidden" name="method" value="modificar"/>
                    <input type="hidden" name ="idproducto" id="idproducto" >
                </div>
                <div class="modal-footer">
                  <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('#modalUpdate').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var idproducto = button.data('idproducto')
        var nombre = button.data('nombre')
        var cantidad = button.data('cantidad')
        var precio = button.data('precio')
        // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        document.getElementById("nombreupdate").value = nombre
        document.getElementById("cantidadupdate").value = cantidad
        document.getElementById("precioupdate").value = precio
        document.getElementById("idproducto").value = idproducto

        })


    </script>
  </body>

</html>
