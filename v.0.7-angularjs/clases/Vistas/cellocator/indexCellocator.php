<?php 
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
    header('content-type: application/json; charset=utf-8');
    require_once '../../autoload.php';
    require_once '../helpers/Helpers.php';

if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} elseif (isset($_POST)) {
    $inputs = json_decode(file_get_contents("php://input"));
    $evento = $inputs->accion;
}

switch($evento){
case "list":
    $cellocatorController = new cellocatorController() ; 
    $data = $cellocatorController->c_get_cellocator() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "set":
    $cellocatorController = new cellocatorController() ; 
    $data = $cellocatorController->c_set_cellocator() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "getid":
    $id = $_GET["id"] ;
    $cellocatorController = new cellocatorController() ; 
    $data = $cellocatorController->c_get_cellocator_idcellocator( $id) ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "upd":
    $cellocatorController = new cellocatorController() ; 
    $data = $cellocatorController->c_upd_cellocator() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

}
?>