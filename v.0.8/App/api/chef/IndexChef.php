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
            $chef_controller = new ChefController() ; 
            $data = $chef_controller->getAll() ;
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
        
            $chef_controller = new ChefController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $subtitulo = $inputs->subtitulo;
            $resumen = $inputs->resumen;
            $descripcion = $inputs->descripcion;
            $imagen = $inputs->imagen;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'subtitulo'=> $subtitulo,
               'resumen'=> $resumen,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $chef_controller->setChef($params) ;
        
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
        
            $chef_controller = new ChefController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $subtitulo = $inputs->Subtitulo;
            $resumen = $inputs->Resumen;
            $descripcion = $inputs->Descripcion;
            $imagen = $inputs->Imagen;
            $orden = $inputs->Orden;
            $fecha = $inputs->Fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'subtitulo'=> $subtitulo,
               'resumen'=> $resumen,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $chef_controller->updateChef($params) ;
        
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

            $chef_controller = new ChefController() ; 

            $data = $chef_controller->updateEstado( $params ) ;

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
            $chef_controller = new ChefController() ; 

            $data = $chef_controller->getById( $id) ;

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
            $chef_controller = new ChefController() ; 

            $data = $chef_controller->deleteById( $id) ;

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
