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
            $logCtrl = new LogController() ; 
            $data = $logCtrl->get_log() ;
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
        
            $logCtrl = new LogController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idlog = $inputs->IdLog;
            $fecha = $inputs->Fecha;
            $idusuario = $inputs->IdUsuario;
            $ocurrencia = $inputs->Ocurrencia;
            $referencia = $inputs->Referencia;
        
            $params = array(
               $idlog,
               $fecha,
               $idusuario,
               $ocurrencia,
               $referencia,
            ) ; 
        
            $data = $logCtrl->set_log($params) ;
        
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
            $logCtrl = new LogController() ; 
            $data = $logCtrl->get_log_idlog( $id) ;
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
        
            $logCtrl = new LogController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idlog = $inputs->IdLog;
            $fecha = $inputs->Fecha;
            $idusuario = $inputs->IdUsuario;
            $ocurrencia = $inputs->Ocurrencia;
            $referencia = $inputs->Referencia;
        
            $params = array(
               $idlog,
               $fecha,
               $idusuario,
               $ocurrencia,
               $referencia,
            ) ; 
        
            $data = $logCtrl->upd_log($params) ;
        
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
