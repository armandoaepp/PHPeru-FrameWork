<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class ControlController
{
    function get_control()
    {
        try
        {
            $objControl  = new ClsControl();

            $data = $objControl->get_control() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function set_control($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objControl  = new ClsControl();
            $bean_control = new BeanControl();
            
            $bean_control->setIdControl($idcontrol);
            $bean_control->setIdControlPadre($idcontrolpadre);
            $bean_control->setIdIipoControl($idtipocontrol);
            $bean_control->setJerarquia($jerarquia);
            $bean_control->setNombre($nombre);
            $bean_control->setValor($valor);
            $bean_control->setDescripcion($descripcion);
            $bean_control->setEstado($estado);
            
            $data = $objControl->get_control($beanControl) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function get_control_by_id($id)
    {
        try
        {
            $objControl  = new ClsControl();
            $bean_control = new BeanControl();

            $bean_control->setId($id);
            $data = $objControl->get_control() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function upd_control($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objControl  = new ClsControl();
            $bean_control = new BeanControl();
            
            $bean_control->setIdControl($idcontrol);
            $bean_control->setIdControlPadre($idcontrolpadre);
            $bean_control->setIdIipoControl($idtipocontrol);
            $bean_control->setJerarquia($jerarquia);
            $bean_control->setNombre($nombre);
            $bean_control->setValor($valor);
            $bean_control->setDescripcion($descripcion);
            $bean_control->setEstado($estado);
            
            $data = $objControl->upd_control($beanControl) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

}
