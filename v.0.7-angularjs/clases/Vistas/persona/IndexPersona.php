<?php 
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
    header('content-type: application/json; charset=utf-8');
    require_once '../../autoload.php';

if(isset($_GET["accion"]))
{
    $evento = $_GET["accion"];
}
elseif (isset($_POST))
{
    $inputs = json_decode(file_get_contents("php://input"));
    $evento = $inputs->accion;
}

switch($evento)
{
    case "list":
        $personaCtrl = new PersonaController() ; 
        $data = $personaCtrl->c_get_persona() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        $personaCtrl = new PersonaController() ; 
        $data = $personaCtrl->c_set_persona() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $personaCtrl = new PersonaController() ; 
        $data = $personaCtrl->c_get_persona_idpersona( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        $personaCtrl = new PersonaController() ; 
        $data = $personaCtrl->c_upd_persona() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
