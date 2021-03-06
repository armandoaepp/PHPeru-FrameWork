<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

?>
<?php $title_page = "Categoría" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => 'Nuevo '.$title_page.' | Admin ', 'follow' => '', 'active' => [1, 1]);
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
          <a href="admin/categorias/categorias.php"><?php echo $title_page ;?>s</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo <?php echo $title_page ;?></li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Nuevo <?php echo $title_page ;?> </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-md-10">
          <form action="admin/categorias/save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="new">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="categoria">Categoría </label>
                  <input type="text" class="form-control" name="categoria" id="categoria" required placeholder="Categoría">
                </div>

              </div>
              <div class="col-md-6">
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

              <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label for="imagen">Imagen(Recomendación Imagen de 350 x 200 pixeles ) </label>
                    <input type="file"  class="form-control" name="imagen" id="imagen"  placeholder="Imagen" accept="image/*">
                  </div>
                </div>


            </div>



            <div class="w-100 text-center">
              <a href="admin/categorias/categorias.php" type="button" class="btn btn-dark ">Cancelar</a>
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



</body>

</html>