<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class RolController
{
    function get_rol()
    {
        try
        {
            $objRol  = new ClsRol();

            $data = $objRol->get_rol() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function set_rol($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objRol  = new ClsRol();
            $bean_rol = new BeanRol();
            
            $bean_rol->setIdRol($idrol);
            $bean_rol->setNombre($nombre);
            $bean_rol->setEstado($estado);
            
            $data = $objRol->get_rol($beanRol) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function get_rol_by_id($id)
    {
        try
        {
            $objRol  = new ClsRol();
            $bean_rol = new BeanRol();

            $bean_rol->setId($id);
            $data = $objRol->get_rol() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function upd_rol($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objRol  = new ClsRol();
            $bean_rol = new BeanRol();
            
            $bean_rol->setIdRol($idrol);
            $bean_rol->setNombre($nombre);
            $bean_rol->setEstado($estado);
            
            $data = $objRol->upd_rol($beanRol) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

}
