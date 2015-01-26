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
        $rolCtrl = new RolController() ; 
        $data = $rolCtrl->get_rol() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        $idrol = $inputs->IdRol;
        $nombre = $inputs->Nombre;
        $estado = $inputs->Estado;
        
        $params = array(
           $idrol,
           $nombre,
           $estado,
        ) ; 
        
        $rolCtrl = new RolController() ; 
        $data = $rolCtrl->set_rol($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $rolCtrl = new RolController() ; 
        $data = $rolCtrl->get_rol_idrol( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        
        $idrol = $inputs->IdRol;
        $nombre = $inputs->Nombre;
        $estado = $inputs->Estado;
        
        $params = array(
           $idrol,
           $nombre,
           $estado,
        ) ; 
        
        $rolCtrl = new RolController() ; 
        $data = $rolCtrl->upd_rol($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
