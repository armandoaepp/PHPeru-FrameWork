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
            $categoria_controller = new CategoriaController() ; 
            $data = $categoria_controller->getAll() ;
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
        
            $categoria_controller = new CategoriaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idcategoria = $inputs->idcategoria;
            $nombre = $inputs->nombre;
            $descripcion = $inputs->descripcion;
            $visible = $inputs->visible;
            $fechareg = $inputs->fechareg;
            $url = $inputs->url;
            $imagen = $inputs->imagen;
            $publicar = $inputs->publicar;
            $created_up = $inputs->created_up;
        
            $params = array(
               'idcategoria'=> $idcategoria,
               'nombre'=> $nombre,
               'descripcion'=> $descripcion,
               'visible'=> $visible,
               'fechareg'=> $fechareg,
               'url'=> $url,
               'imagen'=> $imagen,
               'publicar'=> $publicar,
               'created_up'=> $created_up,
            ) ; 
        
            $data = $categoria_controller->setCategoria($params) ;
        
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
        
            $categoria_controller = new CategoriaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idcategoria = $inputs->Idcategoria;
            $nombre = $inputs->Nombre;
            $descripcion = $inputs->Descripcion;
            $visible = $inputs->Visible;
            $fechareg = $inputs->Fechareg;
            $url = $inputs->Url;
            $imagen = $inputs->Imagen;
            $publicar = $inputs->Publicar;
            $created_up = $inputs->Created_up;
        
            $params = array(
               'idcategoria'=> $idcategoria,
               'nombre'=> $nombre,
               'descripcion'=> $descripcion,
               'visible'=> $visible,
               'fechareg'=> $fechareg,
               'url'=> $url,
               'imagen'=> $imagen,
               'publicar'=> $publicar,
               'created_up'=> $created_up,
            ) ; 
        
            $data = $categoria_controller->updateCategoria($params) ;
        
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

            $idcategoria = $inputs->Idcategoria;
            $estado = $inputs->estado;

            $params = array(
               'idcategoria'=> $idcategoria,
               'estado'=> $estado,
            ) ; 

            $categoria_controller = new CategoriaController() ; 

            $data = $categoria_controller->updateEstado( $params ) ;

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
            $categoria_controller = new CategoriaController() ; 

            $data = $categoria_controller->getById( $id) ;

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
            $categoria_controller = new CategoriaController() ; 

            $data = $categoria_controller->deleteById( $id) ;

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
