<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

$id = !empty($_GET['id']) ? $_GET['id'] : 0  ;

if($id <= 0){
  header("Location: ./usuarios.php ", true, 301);
}

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";
// require_once "../../api/model/User.php";
// require_once "../../api/controller/UserController.php";

$user_controller = new UserController();

$params = array(
  'user_id'   => $id,
);

$user = $user_controller->getById($params);
// var_dump($user);

$nombre = $user['nombre'] ;
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array('titulo' => 'Nuevo usuarios | Admin ', 'follow' => '', 'active' => [1, 1]);
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
          <a href="admin/usuarios/usuarios.php">Usuarios</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Editar Usuario</li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Editar Usuario </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-md-6">
          <form action="admin/usuarios/save.php" method="POST" class="">
          <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
          <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">


            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Nombre </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Nombre" value="<?php echo $user['nombre'] ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="apellidos">Apellidos </label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" required placeholder="Apellidos" value="<?php echo $user['apellidos'] ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Usuario or Email </label>
                  <input type="text" class="form-control" name="email" id="email" required placeholder="Usuario" value="<?php echo $user['email'] ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="password">Password </label>
                  <input type="password" class="form-control" name="password" id="password" required placeholder="Password" disabled value="<?php echo $user['password'] ?>">
                </div>
              </div>
            </div>



            <div class="w-100 text-right">
                <a href="admin/usuarios/usuarios.php" type="button" class="btn btn-dark " >Cancelar</a>
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