<?php
 class pruebaController
{
    function c_get_prueba()
    {
        try
        {
            $objprueba  = new ClsPrueba();
            $data = $objprueba->get_prueba() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_set_prueba()
    {
        try
        {
            
            $inputs = json_decode(file_get_contents("php://input"));
            $id = validar($inputs->Id);
            $nombres = validar($inputs->Nombres);
            $apellidos = validar($inputs->Apellidos);
        
            $objPrueba  = new ClsPrueba();
            $beanPrueba = new BeanPrueba();
            
            $beanPrueba->setId($id);
            $beanPrueba->setNombres($nombres);
            $beanPrueba->setApellidos($apellidos);
            
            $data = $objPrueba->get_prueba($beanPrueba) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_get_prueba_by_id($id)
    {
        try
        {
            $objPrueba  = new ClsPrueba();
            $beanPrueba = new BeanPrueba();
            $beanPrueba->setId($id);
            $data = $objprueba->get_prueba() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_upd_prueba()
    {
        try
        {
            
            $inputs = json_decode(file_get_contents("php://input"));
            $id = validar($inputs->Id);
            $nombres = validar($inputs->Nombres);
            $apellidos = validar($inputs->Apellidos);
        
            $objPrueba  = new ClsPrueba();
            $beanPrueba = new BeanPrueba();
            
            $beanPrueba->setId($id);
            $beanPrueba->setNombres($nombres);
            $beanPrueba->setApellidos($apellidos);
            
            $data = $objPrueba->upd_prueba($beanPrueba) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

}
