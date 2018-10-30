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
            $bitacoraCtrl = new BitacoraController() ; 
            $data = $bitacoraCtrl->ctrl_get_bitacora() ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => false, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $bitacoraCtrl = new BitacoraController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idbitacora = $inputs->Idbitacora;
            $idusuario = $inputs->Idusuario;
            $tipo = $inputs->Tipo;
            $ingreso = $inputs->Ingreso;
            $salida = $inputs->Salida;
        
            $params = array(
               'idbitacora'=> $idbitacora,
               'idusuario'=> $idusuario,
               'tipo'=> $tipo,
               'ingreso'=> $ingreso,
               'salida'=> $salida,
            ) ; 
        
            $data = $bitacoraCtrl->ctrl_set_bitacora($params) ;
        
            $objConexion->commit();
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        try
        {
            $id = $_GET["id"] ;
            $bitacoraCtrl = new BitacoraController() ; 
            $data = $bitacoraCtrl->ctrl_get_bitacora_idbitacora( $id) ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => treu, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $bitacoraCtrl = new BitacoraController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idbitacora = $inputs->Idbitacora;
            $idusuario = $inputs->Idusuario;
            $tipo = $inputs->Tipo;
            $ingreso = $inputs->Ingreso;
            $salida = $inputs->Salida;
        
            $params = array(
               'idbitacora'=> $idbitacora,
               'idusuario'=> $idusuario,
               'tipo'=> $tipo,
               'ingreso'=> $ingreso,
               'salida'=> $salida,
            ) ; 
        
            $data = $bitacoraCtrl->ctrl_upd_bitacora($params) ;
        
            $objConexion->commit();
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
