<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

$id = !empty($_GET['id']) ? $_GET['id'] : 0;

if ($id <= 0) {
    header("Location: ./marcas.php ", true, 301);
}

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";

# Marcas
// require_once "../../api/model/Marca.php";
// require_once "../../api/controller/MarcaController.php";

$marca_controller = new MarcaController();

$marcas = $marca_controller->list();

#Categorias
// require_once "../../api/model/Categoria.php";
// require_once "../../api/controller/CategoriaController.php";

$categoria_controller = new CategoriaController();

$categorias = $categoria_controller->list();

#Producto
// require_once "../../api/model/Producto.php";
// require_once "../../api/model/ProductoDetalle.php";
// require_once "../../api/controller/ProductoController.php";

$producto_controller = new ProductoController();

$params_pro = array(
    'idproducto' => $id,
);

// $producto = $producto_controller->productoById($params_pro);
$data = $producto_controller->productoDetalle($params_pro);
if (empty($data)) {
    echo "<h1> El Producto no existe </h1>";
}

$producto = $data['producto'];
$producto_detalles = $data['producto_detalle'];
// echo '<pre>' ;
// print_r($data) ;
// echo '</pre>' ;

?>
  <?php $title_page = "Proyecto" ?>


<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => 'Editar Detalle '.$title_page.' | Admin ', 'follow' => '', 'active' => [1, 1]);
require_once "../layout/head_links.phtml";
?>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css">
  <!-- sortable -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>

<body>
  <?php
require "../layout/header.phtml";
?>

  <main role="main" class="screen-main">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a href="admin/productos/productos.php"><?php echo $title_page ?>s</a>
        </li>
        <li class="breadcrumb-item">
          <a href="admin/productos/edit-producto.php?id=<?php echo $id ?>">Editar <?php echo $title_page ?></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Editar Detalle</li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Editar Detalle </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="admin/productos/save-detalle.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accionForm" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>">

            <div class="row">
              <div class="col-sm-6 col-lg-5">
                <div class="form-group">
                  <label for="producto">Nombre </label> :
                  <?php echo $producto["nombre"] ?>
                </div>
              </div>

              <!-- imagenes detalle -->
              <div class="col-12">
                <div id="sortable" class="row my-2">

                  <?php
                    foreach ($producto_detalles as &$detalle) {
                  ?>

                  <div class="col-6 col-sm-2 mb-3 ">
                    <div class="card ui-state-default">
                      <input type="hidden" name="ids_producto_detalle[]" value="<?php echo $detalle['id_producto_detalle'] ?>">
                      <a href="<?php echo $detalle['imagen'] ?>" data-fancybox="gallery" data-caption="<?php echo $detalle['descripcion'] ?>">
                        <img src="<?php echo $detalle['imagen'] ?>" class="img-fluid " alt="" />
                      </a>
                      <button type="button" class="close ml-auto" aria-label="Close" onclick="event.preventDefault(); deleteItemImg(<?php echo $detalle['id_producto_detalle'] ?>)">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>

                  <?php
                  }
                  ?>
                </div>
              </div>

              <div class="col-12 mb-1">
                <div class="row border-bottom pb-1">
                  <div class="col-6 pt-3">
                    Imagen
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-dark btn-sm lh-1" id="addImg" title="Agregar nueva imagen">
                      <i class="material-icons">add</i>
                    </button>

                  </div>
                </div>
              </div>

              <div class="col-12" id="imgContent">
                <div class="form-group">
                  <label for="imagen" class="sr-only">Imagen </label>
                  <input type="file" class="form-control" name="imagen[]" id="imagen" placeholder="Imagen" accept="image/*">
                </div>
              </div>

            </div>

            <div class="w-100 text-right">
              <a href="admin/productos/productos.php" type="button" class="btn btn-dark ">Cancelar</a>
              <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
            </div>

          </form>
        </div>
      </div>

    </div>

  </main>

  <footer class="footer bg-dark sticky-bottom">
    <?php
require "../layout/footer.phtml";
?>
  </footer>

  <!-- Modal Delete -->
  <form id="formModal">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle text-uppercase">Eliminar <?php echo $title_page ?> </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="idRowModal" id="idRowModal">
            <input type="hidden" name="accion" id="accion">
            <div id="dataTextModal">
            </div>

            <div class="col-12 my-3">
              <label for="si" class="text-bold "> Conservar en historial: </label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="historial" id="si" value="1" >
                <label class="form-check-label" for="si">SI</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="historial" id="no" value="0" checked="checked">
                <label class="form-check-label" for="no">NO</label>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger" id="btn-send">Eliminar </button>
            <div id="alertModal"></div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <?php require_once "../layout/foot_links.phtml"?>

  <script src="admin/plugins/ckeditor/ckeditor.js"></script>

  <script>
    $(document).ready(function () {
      $('#addImg').click(function (e) {
        e.preventDefault();
        var htmlImg = `
                    <div class="input-group mb-3 img-item">
                      <input type="file" class="form-control" name="imagen[]" id="imagen" placeholder="Imagen" accept="image/*">
                      <div class="input-group-append " onclick="ImgItemRemove(this)">
                        <span class="input-group-text bg-danger text-white border-0 fw-700 px-3 img-item-remove" style="cursor: pointer;">-</span>
                      </div>
                    </div> ` ;

        $('#imgContent').append(htmlImg);
      });
    });

    function ImgItemRemove(object) {
      // console.log(object);
      $(object).closest(".img-item").remove();
    }
  </script>
  <!-- fancybos -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
  <!-- detalle -->
  <script>

    (function ($) {
      function processFormModal(event) {
        event.preventDefault();

        // var params = JSON.stringify({
        //   "id_producto_detalle": $('#idRowModal').val(),
        //   "accion": $('#accion').val(),
        // });

        var inputs = $('#formModal').serializeFormJSON();
        var params = JSON.stringify(inputs);

        console.log(params);
        // console.log(inputs);
        // return;

        $.ajax({
          url: './api/ajax/productos/IndexProductoDetalle.php',
          dataType: 'json',
          type: 'POST',
          contentType: 'application/json',
          data: params,
          processData: false,
          success: function (data, textStatus, jQxhr) {
            console.log(data);

            if (!data.error && data.data) {
              $('#myModal').modal('hide');
              $("#formModal")[0].reset();
              location.reload();
            }
            else {
              $('#alertModal').html('Error en servidor: ' + data.data);
            }

          },
          error: function (jqXhr, textStatus, errorThrown) {
            console.log(textStatus);
            console.log(jqXhr);
            console.log(errorThrown);
          }
        });

      }

      $('#formModal').submit(processFormModal);

    })(jQuery);


    // modal DELETE
    function deleteItemImg(id, textRow) {
      $('#idRowModal').val(id);
      $('#accion').val("deleteImg");
      var text = `¿Esta seguro de eliminar Imagen del <?php echo $title_page ?>?`;
      $('#dataTextModal').html(text);
      $('#btn-send').text("Eliminar");

      $('#myModal').modal('show');
    }
  </script>

  <!-- sortable -->
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#sortable").sortable();
      $("#sortable").disableSelection();
    });
  </script>
</body>

</html>