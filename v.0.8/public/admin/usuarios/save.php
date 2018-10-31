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

$nombre    = $_POST['nombre'] ;
$apellidos = $_POST['apellidos'] ;
$email     = $_POST['email'] ;
$password  = !empty($_POST['password']) ? $_POST['password'] : null  ;
$user_id   = !empty($_POST['id']) ? $_POST['id']: 0 ;
$accion    = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

$params = array(
  'nombre'    => $nombre,
  'apellidos' => $apellidos,
  'email'     => $email,
  'password'  => $password ,
  'user_id'   => $user_id ,
);

if($accion == 'new')
{
  $user_email = $user_controller->getByEmail($params);

  if(count($user_email) > 0)
  {
    echo ' El usuario ya se encuentra Registrado... <a href="./usuarios.php" > Regresar </a> ' ;
    return ;
  }
  else
  {

    $response = $user_controller->setUser($params);

  }


}
elseif($accion == 'edit')
{
  $response = $user_controller->updateUser($params);
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