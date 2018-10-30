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
            $userCtrl = new UserController() ; 
            $data = $userCtrl->ctrl_get_user() ;
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
        
            $userCtrl = new UserController($cnx) ; 
            $objConexion->beginTransaction();
        
            $user_id = $inputs->User_id;
            $nombre = $inputs->Nombre;
            $apellidos = $inputs->Apellidos;
            $email = $inputs->Email;
            $password = $inputs->Password;
            $created_up = $inputs->Created_up;
        
            $params = array(
               'user_id'=> $user_id,
               'nombre'=> $nombre,
               'apellidos'=> $apellidos,
               'email'=> $email,
               'password'=> $password,
               'created_up'=> $created_up,
            ) ; 
        
            $data = $userCtrl->ctrl_set_user($params) ;
        
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
            $userCtrl = new UserController() ; 
            $data = $userCtrl->ctrl_get_user_iduser( $id) ;
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
        
            $userCtrl = new UserController($cnx) ; 
            $objConexion->beginTransaction();
        
            $user_id = $inputs->User_id;
            $nombre = $inputs->Nombre;
            $apellidos = $inputs->Apellidos;
            $email = $inputs->Email;
            $password = $inputs->Password;
            $created_up = $inputs->Created_up;
        
            $params = array(
               'user_id'=> $user_id,
               'nombre'=> $nombre,
               'apellidos'=> $apellidos,
               'email'=> $email,
               'password'=> $password,
               'created_up'=> $created_up,
            ) ; 
        
            $data = $userCtrl->ctrl_upd_user($params) ;
        
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
