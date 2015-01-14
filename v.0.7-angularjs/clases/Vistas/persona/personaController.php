<?php
 class personaController
{
    function c_get_persona()
    {
        try
        {
            $objPersona  = new ClsPersona();

            $data = $objPersona->get_persona() ;
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

            $idpersona = Helpers::validate($inputs->IdPersona);
            $nombres = Helpers::validate($inputs->Nombres);
            $nacimiento = Helpers::validate($inputs->Nacimiento);
            $tipo = Helpers::validate($inputs->Tipo);
            $estado = Helpers::validate($inputs->Estado);
        
            $objPersona  = new ClsPersona();
            $bean_persona = new BeanPersona();
            
            $bean_persona->setIdPersona($idpersona);
            $bean_persona->setNombres($nombre);
            $bean_persona->setNacimiento($nacimiento);
            $bean_persona->setTipo($tipo);
            $bean_persona->setEstado($estado);
            
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
            $bean_persona = new BeanPersona();

            $bean_persona->setId($id);
            $data = $objPersona->get_persona() ;
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

            $idpersona = Helpers::validate($inputs->IdPersona);
            $nombres = Helpers::validate($inputs->Nombres);
            $nacimiento = Helpers::validate($inputs->Nacimiento);
            $tipo = Helpers::validate($inputs->Tipo);
            $estado = Helpers::validate($inputs->Estado);
        
            $objPersona  = new ClsPersona();
            $bean_persona = new BeanPersona();
            
            $bean_persona->setIdPersona($idpersona);
            $bean_persona->setNombres($nombre);
            $bean_persona->setNacimiento($nacimiento);
            $bean_persona->setTipo($tipo);
            $bean_persona->setEstado($estado);
            
            $data = $objPersona->upd_persona($beanPersona) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

}
