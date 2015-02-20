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
            $vehiculo_alertaCtrl = new Vehiculo_alertaController() ; 
            $data = $vehiculo_alertaCtrl->get_vehiculo_alerta() ;
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
        
            $vehiculo_alertaCtrl = new Vehiculo_alertaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idvehiculoalerta = $inputs->IdVehiculoAlerta;
            $idvehiculo = $inputs->IdVehiculo;
            $idccellocator = $inputs->IdCcellocator;
            $rmuid = $inputs->RMUId;
            $gpsx = $inputs->GPSX;
            $gpsy = $inputs->GPSY;
            $speed = $inputs->Speed;
            $direction = $inputs->Direction;
            $utctime = $inputs->UTCTime;
            $fecharegistro = $inputs->FechaRegistro;
            $inputvoltage = $inputs->InputVoltage;
            $idtipoalerta = $inputs->IdTipoAlerta;
            $referencia = $inputs->Referencia;
            $estado = $inputs->Estado;
        
            $params = array(
               $idvehiculoalerta,
               $idvehiculo,
               $idccellocator,
               $rmuid,
               $gpsx,
               $gpsy,
               $speed,
               $direction,
               $utctime,
               $fecharegistro,
               $inputvoltage,
               $idtipoalerta,
               $referencia,
               $estado,
            ) ; 
        
            $data = $vehiculo_alertaCtrl->set_vehiculo_alerta($params) ;
        
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
            $vehiculo_alertaCtrl = new Vehiculo_alertaController() ; 
            $data = $vehiculo_alertaCtrl->get_vehiculo_alerta_idvehiculo_alerta( $id) ;
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
        
            $vehiculo_alertaCtrl = new Vehiculo_alertaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idvehiculoalerta = $inputs->IdVehiculoAlerta;
            $idvehiculo = $inputs->IdVehiculo;
            $idccellocator = $inputs->IdCcellocator;
            $rmuid = $inputs->RMUId;
            $gpsx = $inputs->GPSX;
            $gpsy = $inputs->GPSY;
            $speed = $inputs->Speed;
            $direction = $inputs->Direction;
            $utctime = $inputs->UTCTime;
            $fecharegistro = $inputs->FechaRegistro;
            $inputvoltage = $inputs->InputVoltage;
            $idtipoalerta = $inputs->IdTipoAlerta;
            $referencia = $inputs->Referencia;
            $estado = $inputs->Estado;
        
            $params = array(
               $idvehiculoalerta,
               $idvehiculo,
               $idccellocator,
               $rmuid,
               $gpsx,
               $gpsy,
               $speed,
               $direction,
               $utctime,
               $fecharegistro,
               $inputvoltage,
               $idtipoalerta,
               $referencia,
               $estado,
            ) ; 
        
            $data = $vehiculo_alertaCtrl->upd_vehiculo_alerta($params) ;
        
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
