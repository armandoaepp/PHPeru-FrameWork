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
        $acceso_sistemaCtrl = new Acceso_sistemaController() ; 
        $data = $acceso_sistemaCtrl->get_acceso_sistema() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        $idaccesosistema = $inputs->IdAccesoSistema;
        $idusuario = $inputs->IdUsuario;
        $idcontrol = $inputs->IdControl;
        $referencia = $inputs->Referencia;
        $estado = $inputs->Estado;
        
        $params = array(
           $idaccesosistema,
           $idusuario,
           $idcontrol,
           $referencia,
           $estado,
        ) ; 
        
        $acceso_sistemaCtrl = new Acceso_sistemaController() ; 
        $data = $acceso_sistemaCtrl->set_acceso_sistema($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $acceso_sistemaCtrl = new Acceso_sistemaController() ; 
        $data = $acceso_sistemaCtrl->get_acceso_sistema_idacceso_sistema( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        
        $idaccesosistema = $inputs->IdAccesoSistema;
        $idusuario = $inputs->IdUsuario;
        $idcontrol = $inputs->IdControl;
        $referencia = $inputs->Referencia;
        $estado = $inputs->Estado;
        
        $params = array(
           $idaccesosistema,
           $idusuario,
           $idcontrol,
           $referencia,
           $estado,
        ) ; 
        
        $acceso_sistemaCtrl = new Acceso_sistemaController() ; 
        $data = $acceso_sistemaCtrl->upd_acceso_sistema($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
