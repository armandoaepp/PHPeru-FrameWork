<?php
require_once "../sesion_admin.php";
loginRedirect('../../login');


require_once "../../api/autoload.php";


$noticia_controller = new NoticiaController();

$noticias = $noticia_controller->list();
// var_dump($noticias);



?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  $setvar = array('titulo' => ' Noticias | Admin ', 'follow' => '', 'active' => [1, 1]);
  require_once "../layout/head_links.phtml";
  ?>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

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
        <li class="breadcrumb-item" aria-current="page">
          <a href="admin/noticias/noticias.php">Noticias</a>
        </li>
      </ol>
    </nav>



    <div class="container py-2">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Lista de noticias </h4>
        </div>
        <div class="col-12 mb-3">
          <a href="admin/noticias/noticias.php" class="btn btn-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">format_list_bulleted</i> Listar
          </a>
          <a href="admin/noticias/nuevo-noticia.php" class="btn btn-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">insert_drive_file</i> Nuevo
          </a>
        </div>

        <div class="col-12">
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th width="40">Id</th>
                <th>Titutlo</th>
                <th width="150">Publicado</th>
                <th width="80">Editar</th>
                <th width="80">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($noticias as &$noticia) {?>
              <tr>
                <td>
                  <?php echo $noticia['idnoticia'] ?>
                </td>
                <td>
                  <?php echo $noticia['title'] ?>
                </td>
                <td>

                  <?php
                    $classBtn = "" ;
                    $title = "" ;
                    $text = "" ;
                    if($noticia['publicar'] == 'S'){
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
                   <button onclick="modalPublicar(<?php echo $noticia['idnoticia'] ?>, `<?php echo $noticia['nombre'] ?>` ,`<?php echo $title ?>`, `<?php echo $noticia['publicar'] ?>`);"  class="btn btn-primary btn-sm lh-1 float-right <?php echo $classBtn; ?> "
                    title="<?php echo $title ;?>">
                    <?php
                      if($noticia['publicar'] == 'S'){
                        echo '<i class="material-icons"> close </i>' ;
                      }
                      else {
                        echo '<i class="material-icons"> check </i>';
                      }
                    ?>
                  </button>

                </td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm lh-1 " href="admin/noticias/editar-noticia.php?id=<?php echo $noticia['idnoticia'] ?>"
                    title="Editar">
                    <i class="material-icons">edit</i>
                  </a>
                </td>
                <td class="text-center">
                  <!-- <a class="btn btn-danger btn-sm lh-1" href="admin/noticias//delete-noticia.php?id=<?php echo $noticia['idnoticia'] ?>" title="Eliminar"> -->
                  <button class="btn btn-danger btn-sm lh-1" onclick="modalDelete(<?php echo $noticia['idnoticia'] ?>, `<?php echo $noticia['nombre'] ?>`);" title="Eliminar">
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
            <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Noticia </h5>
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

      $('#dataTable').DataTable({
        "columns": [
          null,
          null,
          { "orderable": false },
          { "orderable": false },
          { "orderable": false },
        ],
        "language": language,
      });

    });



(function($) {
  function processFormModal(event) {
    var params = JSON.stringify({
      "idnoticia": $('#idRowModal').val(),
      "accion"     : $('#accion').val(),
      "publicar"   : $('#publicar').val(),
    });

    $.ajax({
      url: './api/ajax/noticias/IndexNoticia.php',
      dataType: 'json',
      type: 'post',
      contentType: 'application/json',
      data: params,
      processData: false,
      success: function(data, textStatus, jQxhr) {
        // console.log(data);

        if(!data.error && data.data){
          $('#myModal').modal('hide');
          $("#formModal")[0].reset();
          location.reload();
        }
        else {
            $('#alertModal').html('Error en servidor: ' + data.data);
        }

      },
      error: function(jqXhr, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });

    event.preventDefault();
  }

  $('#formModal').submit(processFormModal);

})(jQuery);


 // modal DELETE
 function modalDelete(id,textRow) {
      $('#idRowModal').val(id);
      $('#accion').val('delete');
      var  text = `¿Esta seguro de eliminar la noticia: <strong> ${textRow} </strong> ?` ;
      $('#dataTextModal').html(text);
      $('#btn-send').text("Eliminar");

      $('#myModal').modal('show');
    }


 // modal PUBLICAR
 function modalPublicar(id,textRow,title, publicar) {
      $('#idRowModal').val(id);
      $('#accion').val('publicar');
      $('#publicar').val(publicar);

      var  text = `¿Esta seguro de ${title} la noticia: <strong> ${textRow} </strong> ?` ;
      $('#dataTextModal').html(text);
      $('#btn-send').text(title);

      $('#myModal').modal('show');
    }
  </script>




</body>

</html>