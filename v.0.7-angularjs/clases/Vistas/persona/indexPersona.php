<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
    header('content-type: application/json; charset=utf-8');
    require_once '../../autoload.php';
    // require_once './personaController.php';
    // require_once './cellocatorController.php';

    require_once '../helpers/Helpers.php';

if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} elseif (isset($_POST)) {
    $inputs = json_decode(file_get_contents("php://input"));
    $evento = $inputs->accion;
}

switch($evento){
case "list":
    $personaController = new personaController() ;
    $data = $personaController->c_get_persona() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "set":
    $personaController = new personaController() ;
    $data = $personaController->c_set_persona() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "getid":
    $id = $_GET["id"] ;
    $personaController = new personaController() ;
    $data = $personaController->c_get_persona_idpersona( $id) ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

case "upd":
    $personaController = new personaController() ;
    $data = $personaController->c_upd_persona() ;
    $jsn  = json_encode($data);
    print_r($jsn) ;
break;

}
?>