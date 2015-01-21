<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class PersonaController
{
    function get_persona()
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
        return $rpta ;
    }

    function set_persona($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objPersona  = new ClsPersona();
            $bean_persona = new BeanPersona();
            
            $bean_persona->setIdPersona($idpersona);
            $bean_persona->setNombres($nombre);
            $bean_persona->setNacimiento($nacimiento);
            $bean_persona->setTipo($tipo);
            
            $data = $objPersona->get_persona($beanPersona) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function get_persona_by_id($id)
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
        return $rpta ;
    }

    function upd_persona($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objPersona  = new ClsPersona();
            $bean_persona = new BeanPersona();
            
            $bean_persona->setIdPersona($idpersona);
            $bean_persona->setNombres($nombre);
            $bean_persona->setNacimiento($nacimiento);
            $bean_persona->setTipo($tipo);
            
            $data = $objPersona->upd_persona($beanPersona) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

}
