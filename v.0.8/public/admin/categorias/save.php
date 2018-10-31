<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

if (!isset($_POST)) {
  header("Location: admin/categorias/categorias.php ", true, 301);
}

require_once "../../api/autoload.php";

# helpers
// require_once "../../api/helper/helper.php";
// require_once "../../api/helper/upload_files.php";

$categoria_controller = new CategoriaController();

$nombre      = $_POST['categoria'] ;
$publicar    = $_POST['publicar'] ;
$idcategoria = !empty($_POST['id']) ? $_POST['id']: 0 ;
$accion      = !empty($_POST['accion']) ? $_POST['accion'] : '' ;
$img_bd      = !empty($_POST['img_bd']) ? $_POST['img_bd'] : '' ;

$url = UrlHelper::urlFriendly($nombre);

  $imagen      = '';

  $imagen = UploadFiles::uploadFile($_FILES['imagen'], 'categorias') ;


  $new_img = false ;
  if ($imagen == 'error')
  {
    $imagen = $img_bd ;
    $new_img = false ;
  }
  else{
    $new_img = true ;
  }


    $params = array(
      'nombre'      => $nombre,
      'publicar'    => $publicar,
      'url'         => $url ,
      'idcategoria' => $idcategoria ,
      'imagen'      => $imagen ,
    );

if($accion == 'new'){
  // $params['imagen'] = $imagen;
  $response = $categoria_controller->setCategoria($params);
}
elseif($accion == 'edit')
{
  $response = $categoria_controller->editCategoria($params);

  if($new_img){
   $status = UploadFiles::removeFile($img_bd) ;
  }

}else{
  $response = false ;
}

if($response){
  header("Location: ./categorias.php ", true, 301);
}
else {
echo "A Sucedido un Error al Rehgistrar". $response ;
}

?>