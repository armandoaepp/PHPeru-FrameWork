<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

if (!isset($_POST)) {
  header("Location: admin/marcas/marcas.php ", true, 301);
}

/* require_once "../../api/model/ClsConexion.php";
require_once "../../api/model/Marca.php";
require_once "../../api/controller/MarcaController.php";
require_once "../../api/helper/helper.php"; */

require_once "../../api/autoload.php";

$nombre   = $_POST['marca'] ;
$publicar = $_POST['publicar'] ;
$idmarca  = !empty($_POST['id']) ? $_POST['id']: 0 ;
$accion   = !empty($_POST['accion']) ? $_POST['accion'] : '' ;


$marca_controller = new MarcaController();
$params = array(
  'nombre'      => $nombre,
  'publicar'    => $publicar,
  'idmarca' => $idmarca ,
);

if($accion == 'new'){
  $response = $marca_controller->setMarca($params);
}elseif($accion == 'edit'){
  $response = $marca_controller->editMarca($params);
}else{
  $response = false ;
}

if($response){
  header("Location: ./marcas.php ", true, 301);
}
else {
echo "A Sucedido un Error al Rehgistrar". $response ;
}

?>