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

// require_once "../../api/model/ProductoDetalle.php";
// require_once "../../api/controller/ProductoDetalleController.php";

try{

  $accion   = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

  $producto    = $_POST['producto'] ;
  // $precio   = $_POST['precio'] ;
  $precio      = !empty($_POST['precio']) ? $_POST['precio'] : 0 ;
  $modelo      = !empty($_POST['modelo']) ? $_POST['modelo'] : '' ;
  $tipo        = !empty($_POST['tipo']) ? $_POST['tipo'] : '' ;
  $idmarca     = !empty($_POST['marca']) ? $_POST['marca'] : 0 ;
  $idcategoria = $_POST['categoria'] ;
  $descripcion = $_POST['descripcion'] ;
  $publicar    = $_POST['publicar'] ;

  $imagenes      = [];
  $img = $_FILES['imagen'];

  // echo '<pre>';
  if(!empty($img))
  {
      $img_desc = reArrayFiles($img);
      // print_r($img_desc);

      foreach($img_desc as $file)
      {
          if (!empty($file['name'])) {

            $name = $file['name'] ;
            # extension file
            $info = new SplFileInfo($name);
            $extension = $info->getExtension();

            # new name and url imgen
            $new_name = date('YmdHms',time()).mt_rand() .".{$extension}" ;
            $imagen_url = "img_admin/productos/{$new_name}" ;
            # ruta destino(donde se movera el archivo )
            $ruta_destino = "../../{$imagen_url}";
            $file_ok = move_uploaded_file($file['tmp_name'], $ruta_destino);

            $imagenes[]  = $imagen_url ;
          }elseif ($file["error"] > 0){
            echo "Error: " . $file['error'] . "<br>";
          }
      }
  }


  $producto_controller = new ProductoController();

  $params = array(
    'nombre'      => $producto,
    'precio'      => $precio,
    'modelo'      => $modelo,
    'tipo'        => $tipo,
    'idmarca'     => $idmarca,
    'idcategoria' => $idcategoria,
    'descripcion' => $descripcion,
    'imagen'      => '',
    // 'imagen'      => !empty($imagenes) ? $imagenes[0] : '',
    'publicar'    => $publicar,
  );

    $idproducto = $producto_controller->setProducto($params);
    if($idproducto > 0){

      $producto_det_controller = new ProductoDetalleController();

      for ($i=0; $i < count($imagenes) ; $i++) {

        $params_det = array(
          'idproducto'  => $idproducto,
          'descripcion' => '',
          'imagen'      => $imagenes[$i] ,
          'item'      => ($i + 1)  ,
        );
        $producto_det_controller->setProductoDetalle($params_det);

      }
    }

    if($idproducto || $idproducto > 0){
      header("Location: ./productos.php ", true, 301);
    }
    else {
    echo "A Sucedido un Error al Rehgistrar". $idproducto ;
    }
}catch(Exception $e){
  echo "Error: {$e}" ;
}

function reArrayFiles(&$file_post) {

  $file_ary = array();
  $file_count = count($file_post['name']);
  $file_keys = array_keys($file_post);

  for ($i=0; $i<$file_count; $i++) {
      foreach ($file_keys as $key) {
          $file_ary[$i][$key] = $file_post[$key][$i];
      }
  }

  return $file_ary;
}

