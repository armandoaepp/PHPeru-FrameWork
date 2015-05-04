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
            $perusuarioCtrl = new PerusuarioController() ; 
            $data = $perusuarioCtrl->ctrl_get_perusuario() ;
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
        
            $perusuarioCtrl = new PerusuarioController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idperusuario = $inputs->IdPerUsuario;
            $perapellidos = $inputs->PerApellidos;
            $pernombre = $inputs->PerNombre;
            $perusuario = $inputs->PerUsuario;
            $perpassword = $inputs->PerPassword;
            $fechareg = $inputs->FechaReg;
            $estado = $inputs->Estado;
        
            $params = array(
               'idperusuario'=> $idperusuario,
               'perapellidos'=> $perapellidos,
               'pernombre'=> $pernombre,
               'perusuario'=> $perusuario,
               'perpassword'=> $perpassword,
               'fechareg'=> $fechareg,
               'estado'=> $estado,
            ) ; 
        
            $data = $perusuarioCtrl->ctrl_set_perusuario($params) ;
        
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
            $perusuarioCtrl = new PerusuarioController() ; 
            $data = $perusuarioCtrl->ctrl_get_perusuario_idperusuario( $id) ;
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
        
            $perusuarioCtrl = new PerusuarioController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idperusuario = $inputs->IdPerUsuario;
            $perapellidos = $inputs->PerApellidos;
            $pernombre = $inputs->PerNombre;
            $perusuario = $inputs->PerUsuario;
            $perpassword = $inputs->PerPassword;
            $fechareg = $inputs->FechaReg;
            $estado = $inputs->Estado;
        
            $params = array(
               'idperusuario'=> $idperusuario,
               'perapellidos'=> $perapellidos,
               'pernombre'=> $pernombre,
               'perusuario'=> $perusuario,
               'perpassword'=> $perpassword,
               'fechareg'=> $fechareg,
               'estado'=> $estado,
            ) ; 
        
            $data = $perusuarioCtrl->ctrl_upd_perusuario($params) ;
        
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
