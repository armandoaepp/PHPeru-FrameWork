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
            $poligonoCtrl = new PoligonoController() ; 
            $data = $poligonoCtrl->ctrl_get_poligono() ;
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
        
            $poligonoCtrl = new PoligonoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idpoligono = $inputs->IdPoligono;
            $idpersona = $inputs->IdPersona;
            $tipopoligono = $inputs->TipoPoligono;
            $polix = $inputs->PoliX;
            $poliy = $inputs->PoliY;
            $geocerca = $inputs->GeoCerca;
            $fechareg = $inputs->FechaReg;
            $referencia = $inputs->Referencia;
            $estado = $inputs->Estado;
        
            $params = array(
               $idpoligono,
               $idpersona,
               $tipopoligono,
               $polix,
               $poliy,
               $geocerca,
               $fechareg,
               $referencia,
               $estado,
            ) ; 
        
            $data = $poligonoCtrl->ctrl_set_poligono($params) ;
        
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
            $poligonoCtrl = new PoligonoController() ; 
            $data = $poligonoCtrl->ctrl_get_poligono_idpoligono( $id) ;
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
        
            $poligonoCtrl = new PoligonoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $idpoligono = $inputs->IdPoligono;
            $idpersona = $inputs->IdPersona;
            $tipopoligono = $inputs->TipoPoligono;
            $polix = $inputs->PoliX;
            $poliy = $inputs->PoliY;
            $geocerca = $inputs->GeoCerca;
            $fechareg = $inputs->FechaReg;
            $referencia = $inputs->Referencia;
            $estado = $inputs->Estado;
        
            $params = array(
               $idpoligono,
               $idpersona,
               $tipopoligono,
               $polix,
               $poliy,
               $geocerca,
               $fechareg,
               $referencia,
               $estado,
            ) ; 
        
            $data = $poligonoCtrl->ctrl_upd_poligono($params) ;
        
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
