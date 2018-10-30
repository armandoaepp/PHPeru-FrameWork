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
            $carreraCtrl = new CarreraController() ; 
            $data = $carreraCtrl->ctrl_get_carrera() ;
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
        
            $carreraCtrl = new CarreraController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $descripcion = $inputs->Descripcion;
            $slide = $inputs->Slide;
            $imagen = $inputs->Imagen;
            $presentacion = $inputs->Presentacion;
            $porque = $inputs->Porque;
            $donde = $inputs->Donde;
            $certificacion = $inputs->Certificacion;
            $titulos = $inputs->Titulos;
            $inversion = $inputs->Inversion;
            $titulacion = $inputs->Titulacion;
            $detalleduracion = $inputs->Detalleduracion;
            $detalledia = $inputs->Detalledia;
            $detallehorario = $inputs->Detallehorario;
            $detallelugar = $inputs->Detallelugar;
            $detalleprecio = $inputs->Detalleprecio;
            $detalleequipos = $inputs->Detalleequipos;
            $detalleconsultas = $inputs->Detalleconsultas;
            $detalledirigido = $inputs->Detalledirigido;
            $aquien = $inputs->Aquien;
            $temas = $inputs->Temas;
            $nombreseo = $inputs->Nombreseo;
            $orden = $inputs->Orden;
            $fecha = $inputs->Fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'slide'=> $slide,
               'imagen'=> $imagen,
               'presentacion'=> $presentacion,
               'porque'=> $porque,
               'donde'=> $donde,
               'certificacion'=> $certificacion,
               'titulos'=> $titulos,
               'inversion'=> $inversion,
               'titulacion'=> $titulacion,
               'detalleduracion'=> $detalleduracion,
               'detalledia'=> $detalledia,
               'detallehorario'=> $detallehorario,
               'detallelugar'=> $detallelugar,
               'detalleprecio'=> $detalleprecio,
               'detalleequipos'=> $detalleequipos,
               'detalleconsultas'=> $detalleconsultas,
               'detalledirigido'=> $detalledirigido,
               'aquien'=> $aquien,
               'temas'=> $temas,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $carreraCtrl->ctrl_set_carrera($params) ;
        
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
            $carreraCtrl = new CarreraController() ; 
            $data = $carreraCtrl->ctrl_get_carrera_idcarrera( $id) ;
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
        
            $carreraCtrl = new CarreraController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->Id;
            $titulo = $inputs->Titulo;
            $descripcion = $inputs->Descripcion;
            $slide = $inputs->Slide;
            $imagen = $inputs->Imagen;
            $presentacion = $inputs->Presentacion;
            $porque = $inputs->Porque;
            $donde = $inputs->Donde;
            $certificacion = $inputs->Certificacion;
            $titulos = $inputs->Titulos;
            $inversion = $inputs->Inversion;
            $titulacion = $inputs->Titulacion;
            $detalleduracion = $inputs->Detalleduracion;
            $detalledia = $inputs->Detalledia;
            $detallehorario = $inputs->Detallehorario;
            $detallelugar = $inputs->Detallelugar;
            $detalleprecio = $inputs->Detalleprecio;
            $detalleequipos = $inputs->Detalleequipos;
            $detalleconsultas = $inputs->Detalleconsultas;
            $detalledirigido = $inputs->Detalledirigido;
            $aquien = $inputs->Aquien;
            $temas = $inputs->Temas;
            $nombreseo = $inputs->Nombreseo;
            $orden = $inputs->Orden;
            $fecha = $inputs->Fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'slide'=> $slide,
               'imagen'=> $imagen,
               'presentacion'=> $presentacion,
               'porque'=> $porque,
               'donde'=> $donde,
               'certificacion'=> $certificacion,
               'titulos'=> $titulos,
               'inversion'=> $inversion,
               'titulacion'=> $titulacion,
               'detalleduracion'=> $detalleduracion,
               'detalledia'=> $detalledia,
               'detallehorario'=> $detallehorario,
               'detallelugar'=> $detallelugar,
               'detalleprecio'=> $detalleprecio,
               'detalleequipos'=> $detalleequipos,
               'detalleconsultas'=> $detalleconsultas,
               'detalledirigido'=> $detalledirigido,
               'aquien'=> $aquien,
               'temas'=> $temas,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $carreraCtrl->ctrl_upd_carrera($params) ;
        
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
