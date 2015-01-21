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
        $data = $personaCtrl->get_persona() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        $idpersona = $inputs->IdPersona;
        $nombres = $inputs->Nombres;
        $nacimiento = $inputs->Nacimiento;
        $tipo = $inputs->Tipo;
        
        $params = array(
           $idpersona,
           $nombres,
           $nacimiento,
           $tipo,
        ) ; 
        
        $personaCtrl = new PersonaController() ; 
        $data = $personaCtrl->set_persona($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $personaCtrl = new PersonaController() ; 
        $data = $personaCtrl->get_persona_idpersona( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        
        $idpersona = $inputs->IdPersona;
        $nombres = $inputs->Nombres;
        $nacimiento = $inputs->Nacimiento;
        $tipo = $inputs->Tipo;
        
        $params = array(
           $idpersona,
           $nombres,
           $nacimiento,
           $tipo,
        ) ; 
        
        $personaCtrl = new PersonaController() ; 
        $data = $personaCtrl->upd_persona($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
