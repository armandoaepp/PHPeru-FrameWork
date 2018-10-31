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
// require_once "../../api/controller/ProductoController.php";

// require_once "../../api/model/ProductoDetalle.php";
// require_once "../../api/controller/ProductoDetalleController.php";
#helper
// require_once "../../api/helper/helper.php";
require_once "../../api/helper/upload_files.php";

try{

  $accion   = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

  $idproducto  = !empty($_POST['id']) ? $_POST['id']: 0 ;
  $ids_producto_detalle  = !empty($_POST['ids_producto_detalle']) ? $_POST['ids_producto_detalle']: [] ;

  $producto_det_controller = new ProductoDetalleController();

  ####### SORTABLEs #############################################
    $cant_item = count($ids_producto_detalle) ;
    for ($i=0; $i < $cant_item ; $i++)
    {

      $param_item = array(
        'id_producto_detalle'  => $ids_producto_detalle[$i],
        'item'      => ( $i + 1 ) ,
      );

      $producto_det_controller->updateItem($param_item);
    }

  ###############################################################

    $imagenes = [];
    # load file(*imagen)
    $imgs = $_FILES['imagen'];

    /* echo "<pre>";
    print_r($imgs );
    echo "</pre>";
    return ; */

    # uploads images
    $imagenes = uploadMultiFiles($imgs, 'img_admin/productos/', '../../') ;

    if($idproducto > 0)
    {

      for ($i=0; $i < count($imagenes) ; $i++) {
        if(!empty($imagenes[$i]))
        {
          $params_det = array(
            'idproducto'  => $idproducto,
            'descripcion' => '',
            'imagen'      => $imagenes[$i] ,
            'item' => ( $cant_item + $i + 1 ),
          );

          $producto_det_controller->setProductoDetalle($params_det);
        }

      }
    }


    header("Location: ./edit-detalle.php?id=".$idproducto, true, 301);

}catch(Exception $e){
  echo "Error: {$e}" ;
}