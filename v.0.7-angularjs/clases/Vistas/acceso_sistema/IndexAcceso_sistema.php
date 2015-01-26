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
            $acceso_sistemaCtrl = new Acceso_sistemaController() ;
            $data = $acceso_sistemaCtrl->get_acceso_sistema() ;
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

            $acceso_sistemaCtrl = new Acceso_sistemaController($cnx) ;
            $objConexion->beginTransaction();

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

            $data = $acceso_sistemaCtrl->set_acceso_sistema($params) ;

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
            $acceso_sistemaCtrl = new Acceso_sistemaController() ;
            $data = $acceso_sistemaCtrl->get_acceso_sistema_idacceso_sistema( $id) ;
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

            $acceso_sistemaCtrl = new Acceso_sistemaController($cnx) ;
            $objConexion->beginTransaction();

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

            $data = $acceso_sistemaCtrl->upd_acceso_sistema($params) ;

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
