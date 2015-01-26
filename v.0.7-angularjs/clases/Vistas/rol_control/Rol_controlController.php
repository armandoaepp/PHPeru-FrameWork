<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class Rol_controlController
{
    function get_rol_control()
    {
        try
        {
            $objRol_control  = new ClsRol_control();

            $data = $objRol_control->get_rol_control() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function set_rol_control($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objRol_control  = new ClsRol_control();
            $bean_rol_control = new BeanRol_control();
            
            $bean_rol_control->setIdRolControl($idrolcontrol);
            $bean_rol_control->setIdRrol($idrol);
            $bean_rol_control->setIdControl($idcontrol);
            $bean_rol_control->setReferencia($referencia);
            $bean_rol_control->setEstado($estado);
            
            $data = $objRol_control->get_rol_control($beanRol_control) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function get_rol_control_by_id($id)
    {
        try
        {
            $objRol_control  = new ClsRol_control();
            $bean_rol_control = new BeanRol_control();

            $bean_rol_control->setId($id);
            $data = $objRol_control->get_rol_control() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function upd_rol_control($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objRol_control  = new ClsRol_control();
            $bean_rol_control = new BeanRol_control();
            
            $bean_rol_control->setIdRolControl($idrolcontrol);
            $bean_rol_control->setIdRrol($idrol);
            $bean_rol_control->setIdControl($idcontrol);
            $bean_rol_control->setReferencia($referencia);
            $bean_rol_control->setEstado($estado);
            
            $data = $objRol_control->upd_rol_control($beanRol_control) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

}
