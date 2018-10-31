<?php
require_once "../sesion_admin.php";
loginRedirect('../../login');

if (!isset($_POST)) {
  header("Location: admin/noticias/noticias.php ", true, 301);
}

require_once "../../api/autoload.php";

$noticia_controller = new NoticiaController();

$title      = $_POST['title'] ;
$descripcion      = $_POST['descripcion'] ;
$publicar    = $_POST['publicar'] ;
$idnoticia = !empty($_POST['id']) ? $_POST['id']: 0 ;
$accion      = !empty($_POST['accion']) ? $_POST['accion'] : '' ;
$img_bd    = $_POST['img_bd'] ;

$url = UrlHelper::urlFriendly($title);




$imagen      = '';
# load file(*imagen)
  $archivo = (isset($_FILES['imagen'])) ? $_FILES['imagen'] : null;
  // $imagen_url = uploadImagen($archivo);

  // return ;
  //  if ($archivo) {
  if (!empty($archivo['name'])) {

    $name = $archivo['name'] ;
    # extension archivo
    $info = new SplFileInfo($name);
    $extension = $info->getExtension();

    # name and url imgen
    $name = date('YmdHms') .".{$extension}" ;
    $imagen_url = "img/noticias/{$name}" ;

    // $ruta_destino = "../../img/img_products/{$archivo['name']}";
    $ruta_destino = "../../{$imagen_url}";
    $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino);

    $imagen = $imagen_url ;
  }elseif ($archivo["error"] > 0){
    echo "Error: " . $archivo['error'] . "<br>";
    $imagen = $img_bd ;

  }


$params = array(
  'title'       => $title,
  'publicar'    => $publicar,
  'descripcion' => $descripcion ,
  'imagen'      => $imagen ,
  'url'         => $url ,
  'idnoticia'   => $idnoticia ,
);

if($accion == 'new'){
  $response = $noticia_controller->setNoticia($params);
}elseif($accion == 'edit'){
  $response = $noticia_controller->editNoticia($params);
}else{
  $response = false ;
}

if($response){
  header("Location: ./noticias.php ", true, 301);
}
else {
echo "A Sucedido un Error al Rehgistrar". $response ;
}

?>