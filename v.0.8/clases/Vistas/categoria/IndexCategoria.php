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
            $categoriaCtrl = new CategoriaController() ; 
            $data = $categoriaCtrl->ctrl_get_categoria() ;
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
        
            $categoriaCtrl = new CategoriaController($cnx) ; 
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
        
            $data = $categoriaCtrl->ctrl_set_categoria($params) ;
        
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
            $categoriaCtrl = new CategoriaController() ; 
            $data = $categoriaCtrl->ctrl_get_categoria_idcategoria( $id) ;
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
        
            $categoriaCtrl = new CategoriaController($cnx) ; 
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
        
            $data = $categoriaCtrl->ctrl_upd_categoria($params) ;
        
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
