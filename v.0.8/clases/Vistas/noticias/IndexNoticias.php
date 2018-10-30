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
            $noticiasCtrl = new NoticiasController() ; 
            $data = $noticiasCtrl->ctrl_get_noticias() ;
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
        
            $noticiasCtrl = new NoticiasController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $descripcion = $inputs->Descripcion;
            $imagen = $inputs->Imagen;
            $banner = $inputs->Banner;
            $nombreseo = $inputs->Nombreseo;
            $orden = $inputs->Orden;
            $fecha = $inputs->Fecha;
            $activo = $inputs->Activo;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'banner'=> $banner,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
               'activo'=> $activo,
            ) ; 
        
            $data = $noticiasCtrl->ctrl_set_noticias($params) ;
        
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
            $noticiasCtrl = new NoticiasController() ; 
            $data = $noticiasCtrl->ctrl_get_noticias_idnoticias( $id) ;
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
        
            $noticiasCtrl = new NoticiasController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $descripcion = $inputs->Descripcion;
            $imagen = $inputs->Imagen;
            $banner = $inputs->Banner;
            $nombreseo = $inputs->Nombreseo;
            $orden = $inputs->Orden;
            $fecha = $inputs->Fecha;
            $activo = $inputs->Activo;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'banner'=> $banner,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
               'activo'=> $activo,
            ) ; 
        
            $data = $noticiasCtrl->ctrl_upd_noticias($params) ;
        
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
