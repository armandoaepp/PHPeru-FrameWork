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
        $monedaCtrl = new MonedaController() ; 
        $data = $monedaCtrl->get_moneda() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        $idmoneda = $inputs->Idmoneda;
        $nombre = $inputs->Nombre;
        
        $params = array(
           $idmoneda,
           $nombre,
        ) ; 
        
        $monedaCtrl = new MonedaController() ; 
        $data = $monedaCtrl->set_moneda($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $monedaCtrl = new MonedaController() ; 
        $data = $monedaCtrl->get_moneda_idmoneda( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        
        $idmoneda = $inputs->Idmoneda;
        $nombre = $inputs->Nombre;
        
        $params = array(
           $idmoneda,
           $nombre,
        ) ; 
        
        $monedaCtrl = new MonedaController() ; 
        $data = $monedaCtrl->upd_moneda($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
