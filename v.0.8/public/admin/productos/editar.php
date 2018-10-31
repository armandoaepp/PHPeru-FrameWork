<?php
require_once "../sesion_admin.php";
loginRedirect('../login.php');
date_default_timezone_set('America/Lima');
if (!isset($_POST)) {
  header("Location: admin/productos/productos.php ", true, 301);
}

require_once "../../api/autoload.php";

// require_once "../../api/model/ClsConexion.php";
// require_once "../../api/model/Producto.php";
// require_once "../../api/controller/ProductoController.php";
// require_once "../../api/helper/helper.php";

try{

  $accion   = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

  $idproducto  = !empty($_POST['id']) ? $_POST['id']: 0 ;

  $producto    = $_POST['producto'] ;
  $precio      = !empty($_POST['precio']) ? $_POST['precio'] : 0 ;
  $modelo      = !empty($_POST['modelo']) ? $_POST['modelo'] : '' ;
  $tipo        = !empty($_POST['tipo']) ? $_POST['tipo'] : '' ;
  $idmarca     = !empty($_POST['marca']) ? $_POST['marca'] : 0 ;
  $idcategoria = $_POST['categoria'] ;
  $descripcion = $_POST['descripcion'] ;
  $publicar    = $_POST['publicar'] ;
  $img_bd    = !empty($_POST['img_bd']) ? $_POST['img_bd'] : '' ;

  $imagen      = '';
  # load file(*imagen)
    $archivo = !empty($_FILES['imagen']) ? $_FILES['imagen'] : null;
    // $imagen_url = uploadImagen($archivo);

    // return ;
     if (!empty($archivo['name'])) {

      $name = $archivo['name'] ;
      # extension archivo
      $info = new SplFileInfo($name);
      $extension = $info->getExtension();

      # name and url imgen
      $name = date('YmdHms') .".{$extension}" ;
      $imagen_url = "img_admin/productos/{$name}" ;

      // $ruta_destino = "../../img/img_products/{$archivo['name']}";
      $ruta_destino = "../../{$imagen_url}";
      $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino);

      $imagen = $imagen_url ;
    }elseif ($archivo["error"] > 0){
      echo "Error File: " . $archivo['error'] . "<br>";
      $imagen = $img_bd ;
    }



  $producto_controller = new ProductoController();
  $params = array(
    'idproducto'  => $idproducto,
    'nombre'      => $producto,
    'precio'      => $precio,
    'modelo'      => $modelo,
    'tipo'        => $tipo,
    'idmarca'     => $idmarca,
    'idcategoria' => $idcategoria,
    'descripcion' => $descripcion,
    'imagen'      => $imagen,
    'publicar'    => $publicar,
  );

    $response = $producto_controller->updateProducto($params);

  if($response){
    header("Location: ./productos.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
}catch(Exception $e){
  echo "Error: {$e}" ;
}