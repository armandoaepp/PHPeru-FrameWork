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
        $controlCtrl = new ControlController() ; 
        $data = $controlCtrl->get_control() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        $idcontrol = $inputs->IdControl;
        $idcontrolpadre = $inputs->IdControlPadre;
        $idiipocontrol = $inputs->IdIipoControl;
        $jerarquia = $inputs->Jerarquia;
        $nombre = $inputs->Nombre;
        $valor = $inputs->Valor;
        $descripcion = $inputs->Descripcion;
        $estado = $inputs->Estado;
        
        $params = array(
           $idcontrol,
           $idcontrolpadre,
           $idiipocontrol,
           $jerarquia,
           $nombre,
           $valor,
           $descripcion,
           $estado,
        ) ; 
        
        $controlCtrl = new ControlController() ; 
        $data = $controlCtrl->set_control($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $controlCtrl = new ControlController() ; 
        $data = $controlCtrl->get_control_idcontrol( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        
        $idcontrol = $inputs->IdControl;
        $idcontrolpadre = $inputs->IdControlPadre;
        $idiipocontrol = $inputs->IdIipoControl;
        $jerarquia = $inputs->Jerarquia;
        $nombre = $inputs->Nombre;
        $valor = $inputs->Valor;
        $descripcion = $inputs->Descripcion;
        $estado = $inputs->Estado;
        
        $params = array(
           $idcontrol,
           $idcontrolpadre,
           $idiipocontrol,
           $jerarquia,
           $nombre,
           $valor,
           $descripcion,
           $estado,
        ) ; 
        
        $controlCtrl = new ControlController() ; 
        $data = $controlCtrl->upd_control($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
