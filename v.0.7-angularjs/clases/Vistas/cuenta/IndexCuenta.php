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
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/poligono/IndexPoligono.php
            $poligonoCtrl = new PoligonoController() ; 
            $data = $poligonoCtrl->ctrl_get_poligono() ;
=======
            $cuentaCtrl = new CuentaController() ; 
            $data = $cuentaCtrl->ctrl_get_cuenta() ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/cuenta/IndexCuenta.php
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
        
            $cuentaCtrl = new CuentaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idcuenta = $inputs->IdCuenta;
            $tipocli = $inputs->TipoCli;
            $idcli = $inputs->IdCli;
            $saldo = $inputs->Saldo;
        
            $params = array(
               'idcuenta'=> $idcuenta,
               'tipocli'=> $tipocli,
               'idcli'=> $idcli,
               'saldo'=> $saldo,
            ) ; 
        
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/poligono/IndexPoligono.php
            $data = $poligonoCtrl->ctrl_set_poligono($params) ;
=======
            $data = $cuentaCtrl->ctrl_set_cuenta($params) ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/cuenta/IndexCuenta.php
        
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
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/poligono/IndexPoligono.php
            $poligonoCtrl = new PoligonoController() ; 
            $data = $poligonoCtrl->ctrl_get_poligono_idpoligono( $id) ;
=======
            $cuentaCtrl = new CuentaController() ; 
            $data = $cuentaCtrl->ctrl_get_cuenta_idcuenta( $id) ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/cuenta/IndexCuenta.php
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
        
            $cuentaCtrl = new CuentaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idcuenta = $inputs->IdCuenta;
            $tipocli = $inputs->TipoCli;
            $idcli = $inputs->IdCli;
            $saldo = $inputs->Saldo;
        
            $params = array(
               'idcuenta'=> $idcuenta,
               'tipocli'=> $tipocli,
               'idcli'=> $idcli,
               'saldo'=> $saldo,
            ) ; 
        
<<<<<<< HEAD:v.0.7-angularjs/clases/Vistas/poligono/IndexPoligono.php
            $data = $poligonoCtrl->ctrl_upd_poligono($params) ;
=======
            $data = $cuentaCtrl->ctrl_upd_cuenta($params) ;
>>>>>>> 2414869aa375932485252e971d3a9db69f9f4429:v.0.7-angularjs/clases/Vistas/cuenta/IndexCuenta.php
        
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
