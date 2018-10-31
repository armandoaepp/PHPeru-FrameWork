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
            $admision_controller = new AdmisionController() ; 
            $data = $admision_controller->getAll() ;
            $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
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
        
            $admision_controller = new AdmisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $imagen = $inputs->imagen;
            $requisitos = $inputs->requisitos;
            $horarios = $inputs->horarios;
            $inversion = $inputs->inversion;
            $email = $inputs->email;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'imagen'=> $imagen,
               'requisitos'=> $requisitos,
               'horarios'=> $horarios,
               'inversion'=> $inversion,
               'email'=> $email,
            ) ; 
        
            $data = $admision_controller->setAdmision($params) ;
        
            $objConexion->commit();

            $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
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
        
            $admision_controller = new AdmisionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $imagen = $inputs->imagen;
            $requisitos = $inputs->requisitos;
            $horarios = $inputs->horarios;
            $inversion = $inputs->inversion;
            $email = $inputs->email;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'imagen'=> $imagen,
               'requisitos'=> $requisitos,
               'horarios'=> $horarios,
               'inversion'=> $inversion,
               'email'=> $email,
            ) ; 
        
            $data = $admision_controller->updateAdmision($params) ;
        
            $objConexion->commit();

            $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "updestado":
        try
        {

            $id = $inputs->Id;
            $estado = $inputs->estado;

            $params = array(
               'id'=> $id,
               'estado'=> $estado,
            ) ; 

            $admision_controller = new AdmisionController() ; 

            $data = $admision_controller->updateEstado( $params ) ;

            $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        try
        {

            $id = $_GET["id"] ;
            $admision_controller = new AdmisionController() ; 

            $data = $admision_controller->getById( $id) ;

            $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "delete":
        try
        {

            $id = $_GET["id"] ;
            $admision_controller = new AdmisionController() ; 

            $data = $admision_controller->deleteById( $id) ;

            $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

        }
        catch (Exception $e)
        {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
