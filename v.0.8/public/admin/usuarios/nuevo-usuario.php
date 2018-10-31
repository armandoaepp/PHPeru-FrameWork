<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => 'Nuevo categorias | Admin ', 'follow' => '', 'active' => [1, 1]);
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
          <a href="admin/categorias/categorias.php">Usuarios</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Usuario</li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Nuevo Usuario </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12">
          <form action="admin/usuarios/save.php" method="POST" class="">
            <input type="hidden" class="form-control" name="accion" id="accion" value="new">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Nombre </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Nombre">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="apellidos">Apellidos </label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" required placeholder="Apellidos">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Usuario or Email </label>
                  <input type="text" class="form-control" name="email" id="email" required placeholder="Usuario">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="password">Password </label>
                  <input type="password" class="form-control" name="password" id="password" required placeholder="Password">
                </div>
              </div>
            </div>


            <div class="w-100 text-right">
                <a href="admin/categorias/categorias.php" type="button" class="btn btn-dark " >Cancelar</a>
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