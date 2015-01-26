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
        $usuarioCtrl = new UsuarioController() ; 
        $data = $usuarioCtrl->get_usuario() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":
        
        $idusuario = $inputs->IdUsuario;
        $idpersona = $inputs->IdPersona;
        $idrol = $inputs->IdRol;
        $idtiporelacion = $inputs->IdTipoRelacion;
        $usuario = $inputs->Usuario;
        $clave = $inputs->Clave;
        $fecha = $inputs->Fecha;
        $estado = $inputs->Estado;
        
        $params = array(
           $idusuario,
           $idpersona,
           $idrol,
           $idtiporelacion,
           $usuario,
           $clave,
           $fecha,
           $estado,
        ) ; 
        
        $usuarioCtrl = new UsuarioController() ; 
        $data = $usuarioCtrl->set_usuario($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $usuarioCtrl = new UsuarioController() ; 
        $data = $usuarioCtrl->get_usuario_idusuario( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        
        $idusuario = $inputs->IdUsuario;
        $idpersona = $inputs->IdPersona;
        $idrol = $inputs->IdRol;
        $idtiporelacion = $inputs->IdTipoRelacion;
        $usuario = $inputs->Usuario;
        $clave = $inputs->Clave;
        $fecha = $inputs->Fecha;
        $estado = $inputs->Estado;
        
        $params = array(
           $idusuario,
           $idpersona,
           $idrol,
           $idtiporelacion,
           $usuario,
           $clave,
           $fecha,
           $estado,
        ) ; 
        
        $usuarioCtrl = new UsuarioController() ; 
        $data = $usuarioCtrl->upd_usuario($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

}
