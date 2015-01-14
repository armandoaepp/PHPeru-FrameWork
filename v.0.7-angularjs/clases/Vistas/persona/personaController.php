<?php
 class personaController
{
    function c_get_persona()
    {
        try
        {
            $objpersona  = new ClsPersona();
            $data = $objpersona->get_persona() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_set_persona()
    {
        try
        {
            
            $inputs = json_decode(file_get_contents("php://input"));
            $idpersona = validar($inputs->IdPersona);
            $nombres = validar($inputs->Nombres);
            $nacimiento = validar($inputs->Nacimiento);
            $tipo = validar($inputs->Tipo);
            $estado = validar($inputs->Estado);
        
            $objPersona  = new ClsPersona();
            $beanPersona = new BeanPersona();
            
            $beanPersona->setIdPersona($idpersona);
            $beanPersona->setNombres($nombre);
            $beanPersona->setNacimiento($nacimiento);
            $beanPersona->setTipo($tipo);
            $beanPersona->setEstado($estado);
            
            $data = $objPersona->get_persona($beanPersona) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_get_persona_by_id($id)
    {
        try
        {
            $objPersona  = new ClsPersona();
            $beanPersona = new BeanPersona();
            $beanPersona->setId($id);
            $data = $objpersona->get_persona() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_upd_persona()
    {
        try
        {
            
            $inputs = json_decode(file_get_contents("php://input"));
            $idpersona = validar($inputs->IdPersona);
            $nombres = validar($inputs->Nombres);
            $nacimiento = validar($inputs->Nacimiento);
            $tipo = validar($inputs->Tipo);
            $estado = validar($inputs->Estado);
        
            $objPersona  = new ClsPersona();
            $beanPersona = new BeanPersona();
            
            $beanPersona->setIdPersona($idpersona);
            $beanPersona->setNombres($nombre);
            $beanPersona->setNacimiento($nacimiento);
            $beanPersona->setTipo($tipo);
            $beanPersona->setEstado($estado);
            
            $data = $objPersona->upd_persona($beanPersona) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

}
