<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');

if (!isset($_POST)) {
  header("Location: admin/categorias/categorias.php ", true, 301);
}

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";
// require_once "../../api/model/SubCategoria.php";
// require_once "../../api/controller/SubCategoriaController.php";

#helpers
// require_once "../../api/helper/helper.php";
require_once "../../api/helper/upload_files.php";

$subcategoria_controller = new SubCategoriaController();

  # para editar
    $idsubcategoria = !empty($_POST['id']) ? $_POST['id']: 0 ;

  #inputs
    $idcategoria = $_POST['categoria'] ;
    $nombre      = $_POST['subcategoria'] ;
    $publicar    = $_POST['publicar'] ;
    $img_bd      = !empty($_POST['img_bd']) ? $_POST['img_bd'] : '' ;
    $accion      = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

  #URL amigable
    $url = UrlHelper::urlFriendly($nombre);

  # Upload IMAGEN
    $imagen      = '';
    $img_file = (isset($_FILES['imagen'])) ? $_FILES['imagen'] : null;
    $imagen = loadImg($img_file,'img_admin/subcategorias');
    if(empty($imagen)){
      $imagen = $img_bd ;
    }

  # cantidad de filas en tabla
    $num_row = $subcategoria_controller->getContRow() ;
    $item = $num_row + 1 ;

  #PARAMS
    $params = array(
      'idcategoria' => $idcategoria ,
      'nombre'      => $nombre,
      'publicar'    => $publicar,
      'url'         => $url ,
      'imagen'      => $imagen ,
      'item'        => $item ,
    );
    // echo "<pre> " ;
    // print_r( $params);
    // echo "</pre> " ;
    // return ;
if($accion == 'new')
{
  $response = $subcategoria_controller->setSubCategoria($params);
}elseif($accion == 'edit')
{
  $response = $subcategoria_controller->editCategoria($params);
}else
{
  $response = false ;
}

if($response)
{
  header("Location: ./subcategorias.php ", true, 301);
}
else
{
  echo "A Sucedido un Error al Rehgistrar". $response ;
}
