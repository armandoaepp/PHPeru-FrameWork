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
        try
        {
            $transmisionCtrl = new TransmisionController() ; 
            $data = $transmisionCtrl->ctrl_get_transmision() ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $transmisionCtrl = new TransmisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idtransmision = $inputs->IdTransmision;
            $idpersonajuridica = $inputs->IdPersonaJuridica;
            $placa = $inputs->Placa;
            $longitud = $inputs->Longitud;
            $latitud = $inputs->Latitud;
            $direccion = $inputs->Direccion;
            $velocidad = $inputs->Velocidad;
            $gpstime = $inputs->GpsTime;
            $panico = $inputs->Panico;
            $estado = $inputs->Estado;
        
            $params = array(
               $idtransmision,
               $idpersonajuridica,
               $placa,
               $longitud,
               $latitud,
               $direccion,
               $velocidad,
               $gpstime,
               $panico,
               $estado,
            ) ; 
        
            $data = $transmisionCtrl->ctrl_set_transmision($params) ;
        
            $objConexion->commit();
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        try
        {
            $id = $_GET["id"] ;
            $transmisionCtrl = new TransmisionController() ; 
            $data = $transmisionCtrl->ctrl_get_transmision_idtransmision( $id) ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $transmisionCtrl = new TransmisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idtransmision = $inputs->IdTransmision;
            $idpersonajuridica = $inputs->IdPersonaJuridica;
            $placa = $inputs->Placa;
            $longitud = $inputs->Longitud;
            $latitud = $inputs->Latitud;
            $direccion = $inputs->Direccion;
            $velocidad = $inputs->Velocidad;
            $gpstime = $inputs->GpsTime;
            $panico = $inputs->Panico;
            $estado = $inputs->Estado;
        
            $params = array(
               $idtransmision,
               $idpersonajuridica,
               $placa,
               $longitud,
               $latitud,
               $direccion,
               $velocidad,
               $gpstime,
               $panico,
               $estado,
            ) ; 
        
            $data = $transmisionCtrl->ctrl_upd_transmision($params) ;
        
            $objConexion->commit();
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
