<?php
require_once "../sesion_admin.php";
loginRedirect('../../login');

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => 'Nuevo noticias | Admin ', 'follow' => '', 'active' => [1, 1]);
require_once "../layout/head_links.phtml";
?>
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
          <a href="admin/noticias/noticias.php">Noticias</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Noticia</li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Nuevo Noticia </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12">
          <form action="admin/noticias/save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="new">

            <div class="row">

              <div class="col-md-8">
                <div class="form-group">
                  <label for="title">Titulo </label>
                  <input type="text" class="form-control" name="title" id="title" required placeholder="Noticia">
                </div>
              </div>

              <div class="col-md-4">

                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="si" value="S" checked="checked">
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N">
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripción </label>
                  <textarea class="ckeditor form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripción"></textarea>
                </div>
              </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                  <label for="imagen">Imagen </label>
                  <input type="file"  class="form-control" name="imagen" id="imagen"  placeholder="Imagen" accept="image/*">
                </div>
              </div>

            <div class="w-100 text-right">
              <a href="admin/noticias/noticias.php" type="button" class="btn btn-dark ">Cancelar</a>
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
  <?php require_once "../layout/foot_links.phtml"?>

  <script src="admin/plugins/ckeditor/ckeditor.js"></script>

</body>

</html>