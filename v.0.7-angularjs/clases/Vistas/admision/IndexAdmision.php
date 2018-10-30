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
            $admisionCtrl = new AdmisionController() ; 
            $data = $admisionCtrl->ctrl_get_admision() ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $admisionCtrl = new AdmisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $imagen = $inputs->Imagen;
            $requisitos = $inputs->Requisitos;
            $horarios = $inputs->Horarios;
            $inversion = $inputs->Inversion;
            $email = $inputs->Email;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'imagen'=> $imagen,
               'requisitos'=> $requisitos,
               'horarios'=> $horarios,
               'inversion'=> $inversion,
               'email'=> $email,
            ) ; 
        
            $data = $admisionCtrl->ctrl_set_admision($params) ;
        
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
            $admisionCtrl = new AdmisionController() ; 
            $data = $admisionCtrl->ctrl_get_admision_idadmision( $id) ;
            $data = array('msg' => 'Se encontraron registros', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $admisionCtrl = new AdmisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $imagen = $inputs->Imagen;
            $requisitos = $inputs->Requisitos;
            $horarios = $inputs->Horarios;
            $inversion = $inputs->Inversion;
            $email = $inputs->Email;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'imagen'=> $imagen,
               'requisitos'=> $requisitos,
               'horarios'=> $horarios,
               'inversion'=> $inversion,
               'email'=> $email,
            ) ; 
        
            $data = $admisionCtrl->ctrl_upd_admision($params) ;
        
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
