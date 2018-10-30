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
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/geocoder/IndexGeocoder.php
            $geocoderCtrl = new GeocoderController() ; 
            $data = $geocoderCtrl->ctrl_get_geocoder() ;
=======
            $logCtrl = new LogController() ; 
            $data = $logCtrl->ctrl_get_log() ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/log/IndexLog.php
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
        
            $geocoderCtrl = new GeocoderController($cnx) ; 
            $objConexion->beginTransaction();
        
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/geocoder/IndexGeocoder.php
            $idgeocoder = $inputs->IdGeocoder;
            $idcellocator = $inputs->IdCellocator;
            $longuitud = $inputs->Longuitud;
            $latidud = $inputs->Latidud;
            $address = $inputs->Address;
            $referencia = $inputs->Referencia;
        
            $params = array(
               $idgeocoder,
               $idcellocator,
               $longuitud,
               $latidud,
               $address,
               $referencia,
            ) ; 
        
            $data = $geocoderCtrl->ctrl_set_geocoder($params) ;
=======
            $idlog = $inputs->IdLog;
            $fecha = $inputs->Fecha;
            $idusuario = $inputs->IdUsuario;
            $ocurrencia = $inputs->Ocurrencia;
        
            $params = array(
               $idlog,
               $fecha,
               $idusuario,
               $ocurrencia,
            ) ; 
        
            $data = $logCtrl->ctrl_set_log($params) ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/log/IndexLog.php
        
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
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/geocoder/IndexGeocoder.php
            $geocoderCtrl = new GeocoderController() ; 
            $data = $geocoderCtrl->ctrl_get_geocoder_idgeocoder( $id) ;
=======
            $logCtrl = new LogController() ; 
            $data = $logCtrl->ctrl_get_log_idlog( $id) ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/log/IndexLog.php
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
        
            $geocoderCtrl = new GeocoderController($cnx) ; 
            $objConexion->beginTransaction();
        
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/geocoder/IndexGeocoder.php
            $idgeocoder = $inputs->IdGeocoder;
            $idcellocator = $inputs->IdCellocator;
            $longuitud = $inputs->Longuitud;
            $latidud = $inputs->Latidud;
            $address = $inputs->Address;
            $referencia = $inputs->Referencia;
        
            $params = array(
               $idgeocoder,
               $idcellocator,
               $longuitud,
               $latidud,
               $address,
               $referencia,
            ) ; 
        
            $data = $geocoderCtrl->ctrl_upd_geocoder($params) ;
=======
            $idlog = $inputs->IdLog;
            $fecha = $inputs->Fecha;
            $idusuario = $inputs->IdUsuario;
            $ocurrencia = $inputs->Ocurrencia;
        
            $params = array(
               $idlog,
               $fecha,
               $idusuario,
               $ocurrencia,
            ) ; 
        
            $data = $logCtrl->ctrl_upd_log($params) ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/log/IndexLog.php
        
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
