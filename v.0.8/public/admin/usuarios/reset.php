<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

if (!isset($_POST)) {
  header("Location: admin/usuarios/users.php ", true, 301);
}

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";
// require_once "../../api/model/User.php";
// require_once "../../api/controller/UserController.php";
// require_once "../../api/helper/helper.php";

$user_controller = new UserController();


$password  = $_POST['password']  ;
$user_id   = $_POST['id'] ;
$accion    = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

$params = array(
  'password'  => $password ,
  'user_id'   => $user_id ,
);

if($accion == 'reset')
{
  $response = $user_controller->updatePassword($params);
}
else
{
  $response = false ;
}


if($response)
{
  header("Location: ./usuarios.php ", true, 301);
}
else
{
  echo "A Sucedido un Error al Rehgistrar". $response ;
}

?>