<?php 
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
    header('content-type: application/json; charset=utf-8');
    require_once '../../autoload.php';

if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} elseif (isset($_POST)) {
    $inputs = json_decode(file_get_contents("php://input"));
    $evento = $inputs->accion;
}

switch($evento){
case "list":
    $pruebaController = new pruebaController() ; 
    $data = $pruebaController->c_get_prueba() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "set":
    $pruebaController = new pruebaController() ; 
    $data = $pruebaController->c_set_prueba() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "getid":
    $id = $_GET["id"] ;
    $pruebaController = new pruebaController() ; 
    $data = $pruebaController->c_get_prueba_idprueba( $id) ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "upd":
    $pruebaController = new pruebaController() ; 
    $data = $pruebaController->c_upd_prueba() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

}
?>