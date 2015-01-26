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
        $rol_controlCtrl = new Rol_controlController() ; 
        $data = $rol_controlCtrl->get_rol_control() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        $idrolcontrol = $inputs->IdRolControl;
        $idrrol = $inputs->IdRrol;
        $idcontrol = $inputs->IdControl;
        $referencia = $inputs->Referencia;
        $estado = $inputs->Estado;
        
        $params = array(
           $idrolcontrol,
           $idrrol,
           $idcontrol,
           $referencia,
           $estado,
        ) ; 
        
        $rol_controlCtrl = new Rol_controlController() ; 
        $data = $rol_controlCtrl->set_rol_control($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $rol_controlCtrl = new Rol_controlController() ; 
        $data = $rol_controlCtrl->get_rol_control_idrol_control( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        
        $idrolcontrol = $inputs->IdRolControl;
        $idrrol = $inputs->IdRrol;
        $idcontrol = $inputs->IdControl;
        $referencia = $inputs->Referencia;
        $estado = $inputs->Estado;
        
        $params = array(
           $idrolcontrol,
           $idrrol,
           $idcontrol,
           $referencia,
           $estado,
        ) ; 
        
        $rol_controlCtrl = new Rol_controlController() ; 
        $data = $rol_controlCtrl->upd_rol_control($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
