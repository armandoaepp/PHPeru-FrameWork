<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => 'Nuevo marcas | Admin ', 'follow' => '', 'active' => [1, 1]);
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
          <a href="admin/marcas/marcas.php">Marcas</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Marca</li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Nuevo Marca </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-md-6">
          <form action="admin/marcas/save.php" method="POST" class="">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
            <div class="form-group">
              <label for="marca">Marca </label>
              <input type="text" class="form-control" name="marca" id="marca" required placeholder="Marca">
            </div>

            <!-- <div class="form-group">
              <label for="email">Email </label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div> -->


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

            <div class="w-100 text-right">
                <a href="admin/marcas/marcas.php" type="button" class="btn btn-dark " >Cancelar</a>
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