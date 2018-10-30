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
            $configuracion_controller = new ConfiguracionController() ; 
            $data = $configuracion_controller->getAll() ;
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
        
            $configuracion_controller = new ConfiguracionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $horario = $inputs->horario;
            $direccion = $inputs->direccion;
            $email = $inputs->email;
            $telefono = $inputs->telefono;
            $facebook = $inputs->facebook;
            $youtube = $inputs->youtube;
            $instagram = $inputs->instagram;
            $mapa = $inputs->mapa;
            $popup = $inputs->popup;
            $show_popup = $inputs->show_popup;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'horario'=> $horario,
               'direccion'=> $direccion,
               'email'=> $email,
               'telefono'=> $telefono,
               'facebook'=> $facebook,
               'youtube'=> $youtube,
               'instagram'=> $instagram,
               'mapa'=> $mapa,
               'popup'=> $popup,
               'show_popup'=> $show_popup,
            ) ; 
        
            $data = $configuracion_controller->setConfiguracion($params) ;
        
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
        
            $configuracion_controller = new ConfiguracionController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $horario = $inputs->Horario;
            $direccion = $inputs->Direccion;
            $email = $inputs->Email;
            $telefono = $inputs->Telefono;
            $facebook = $inputs->Facebook;
            $youtube = $inputs->Youtube;
            $instagram = $inputs->Instagram;
            $mapa = $inputs->Mapa;
            $popup = $inputs->Popup;
            $show_popup = $inputs->Show_popup;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'horario'=> $horario,
               'direccion'=> $direccion,
               'email'=> $email,
               'telefono'=> $telefono,
               'facebook'=> $facebook,
               'youtube'=> $youtube,
               'instagram'=> $instagram,
               'mapa'=> $mapa,
               'popup'=> $popup,
               'show_popup'=> $show_popup,
            ) ; 
        
            $data = $configuracion_controller->updateConfiguracion($params) ;
        
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

            $configuracion_controller = new ConfiguracionController() ; 

            $data = $configuracion_controller->updateEstado( $params ) ;

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
            $configuracion_controller = new ConfiguracionController() ; 

            $data = $configuracion_controller->getById( $id) ;

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
            $configuracion_controller = new ConfiguracionController() ; 

            $data = $configuracion_controller->deleteById( $id) ;

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
