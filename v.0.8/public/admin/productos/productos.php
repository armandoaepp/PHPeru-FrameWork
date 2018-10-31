<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";
// require_once "../../api/model/Producto.php";
// require_once "../../api/controller/ProductoController.php";

$producto_controller = new ProductoController();

$params_pro = array(
    'idcategoria' => 0,
);

$productos = $producto_controller->listAdmin($params_pro);
// var_dump($productos);

?>
<?php $title_page = "Proyectos" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => $title_page.' | Admin ', 'follow' => '', 'active' => [1, 1]);
require_once "../layout/head_links.phtml";
?>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>

<body>
  <?php
  require "../layout/header.phtml";
  ?>
  <!-- personalizar -->

 <style>
      .btn-bar {
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        vertical-align: middle;
        display: inline-flex;
        align-items: center;
        color: #ffffff !important;
      }

      .btn-bar i {
        font-size: 1rem;
      }
    </style>

  <main role="main" class="screen-main">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
          <a href="admin/productos/productos.php"><?php echo $title_page ?></a>
        </li>
      </ol>
    </nav>



    <div class="container py-2">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Lista de <?php echo $title_page ?> </h4>
        </div>
        <div class="col-12 mb-3">
          <a href="admin/productos/productos.php" class="btn btn-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">format_list_bulleted</i> Listar
          </a>
          <a href="admin/productos/nuevo-producto.php" class="btn btn-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">insert_drive_file</i> Nuevo
          </a>
        </div>

        <div class="col-12">
          <table id="dataTableList" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <!-- <th>Modelo</th> -->
                <!-- <th>Precio</th> -->
                <th>Categoría</th>
                <th width="150">Publicar</th>
                <th width="70"></th>
                <th width="70"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($productos as &$producto) {?>
              <tr>
                <td>
                  <?php echo $producto['idproducto'] ?>
                </td>
                <td>
                  <?php echo $producto['nombre'] ?>
                </td>
                <!-- <td>
                  <?php echo $producto['modelo'] ?>
                </td>
                <td>
                  <?php echo $producto['precio'] ?>
                </td> -->
                <td>
                  <?php echo $producto['categoria'] ?>
                </td>
                <td>
                  <?php
                    $classBtn = "" ;
                    $title = "" ;
                    $text = "" ;
                    if($producto['publicar'] == 'S'){
                      $text .= '<i class="material-icons text-success"> check </i>';
                      $text .= "Publicado" ;

                      $classBtn =  'btn-danger';
                      $title = "Ocultar al público" ;
                    }
                    else {
                      $text .= '<i class="material-icons text-danger"> close </i>' ;
                      $text .= "Sin Publicar" ;

                      $classBtn =  'btn-primary';
                      $title = "Publicar" ;
                    }
                  ?>
                  <span class="mr-1">
                    <?php echo $text ; ?>
                  </span>

                  <button onclick="modalPublicar(<?php echo $producto['idproducto'] ?>, `<?php echo $producto['nombre'] ?>` ,`<?php echo $title ?>`, `<?php echo $producto['publicar'] ?>`);"
                    class="btn btn-primary btn-sm lh-1 float-right <?php echo $classBtn; ?> " title="<?php echo $title ;?>">
                    <?php
                      if($producto['publicar'] == 'S'){
                        echo '<i class="material-icons"> close </i>' ;
                      }
                      else {
                        echo '<i class="material-icons"> check </i>';
                      }
                    ?>
                  </button>

                </td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm lh-1 " href="admin/productos/edit-producto.php?id=<?php echo $producto['idproducto'] ?>"
                    title="Editar">
                    <i class="material-icons">edit</i>
                  </a>
                </td>
                <td class="text-center">
                  <!-- <a class="btn btn-danger btn-sm lh-1" href="admin/productos//delete-producto.php?id=<?php echo $producto['idproducto'] ?>"
                    title="Eliminar">
                    <i class="material-icons">delete</i>
                  </a> -->
                  <button class="btn btn-danger btn-sm lh-1" onclick="modalDelete(<?php echo $producto['idproducto'] ?>, `<?php echo $producto['nombre'] ?>`);"
                    title="Eliminar">
                    <i class="material-icons">delete</i>
                  </button>
                </td>
              </tr>
              <?php }?>
            </tbody>

          </table>
        </div>

      </div>

    </div>

  </main>

  <footer class="footer bg-dark sticky-bottom">
    <?php
require "../layout/footer.phtml";
?>
  </footer>
  <?php require_once "../layout/foot_links.phtml"?>



  <!-- Modal Delete -->
  <form id="formModal">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle text-uppercase">Eliminar <?php echo $title_page ;?> </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="idRowModal" id="idRowModal">
            <input type="hidden" name="accion" id="accion">
            <input type="hidden" name="publicar" id="publicar">
            <div id="dataTextModal">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger" id="btn-send" >Eliminar </button>
            <div id="alertModal"></div>
          </div>
        </div>
      </div>
    </div>
  </form>


  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/js/data-table-ES.js"></script>

  <script>

    $(document).ready(function () {
      $('#dataTableList').DataTable({
        "columns": [
          null,
          null,
          // null,
          // null,
          null,
          null,
          { "orderable": false },
          { "orderable": false },
        ],
        "language": language,
      });
    });

    // modals



    (function ($) {
      function processFormModal(event) {
        var params = JSON.stringify({
          "idproducto": $('#idRowModal').val(),
          "accion": $('#accion').val(),
          "publicar": $('#publicar').val(),
        });

        $.ajax({
          url: './api/ajax/productos/IndexProducto.php',
          dataType: 'json',
          type: 'post',
          contentType: 'application/json',
          data: params,
          processData: false,
          success: function (data, textStatus, jQxhr) {
            // console.log(data);

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
            console.log(errorThrown);
          }
        });

        event.preventDefault();
      }

      $('#formModal').submit(processFormModal);

    })(jQuery);


    // modal DELETE
    function modalDelete(id, textRow) {
      $('#idRowModal').val(id);
      $('#accion').val('delete');
      var text = `¿Esta seguro de eliminar  <?php echo $title_page ?>: <strong> ${textRow} </strong> ?`;
      $('#dataTextModal').html(text);
      $('#btn-send').text("Eliminar");

      $('#myModal').modal('show');
    }


    // modal PUBLICAR
    function modalPublicar(id, textRow, title, publicar) {
      $('#idRowModal').val(id);
      $('#accion').val('publicar');
      $('#publicar').val(publicar);

      var text = `¿Esta seguro de ${title} la categoría: <strong> ${textRow} </strong> ?`;
      $('#dataTextModal').html(text);
      $('#btn-send').text(title);

      $('#myModal').modal('show');
    }

  </script>





</body>

</html>