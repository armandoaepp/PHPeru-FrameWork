<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class Acceso_sistemaController
{
    function get_acceso_sistema()
    {
        try
        {
            $objAcceso_sistema  = new ClsAcceso_sistema();

            $data = $objAcceso_sistema->get_acceso_sistema() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function set_acceso_sistema($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objAcceso_sistema  = new ClsAcceso_sistema();
            $bean_acceso_sistema = new BeanAcceso_sistema();
            
            $bean_acceso_sistema->setIdAccesoSistema($idaccesosistema);
            $bean_acceso_sistema->setIdUsuario($idusuario);
            $bean_acceso_sistema->setIdControl($idcontrol);
            $bean_acceso_sistema->setReferencia($referencia);
            $bean_acceso_sistema->setEstado($estado);
            
            $data = $objAcceso_sistema->get_acceso_sistema($beanAcceso_sistema) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function get_acceso_sistema_by_id($id)
    {
        try
        {
            $objAcceso_sistema  = new ClsAcceso_sistema();
            $bean_acceso_sistema = new BeanAcceso_sistema();

            $bean_acceso_sistema->setId($id);
            $data = $objAcceso_sistema->get_acceso_sistema() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function upd_acceso_sistema($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objAcceso_sistema  = new ClsAcceso_sistema();
            $bean_acceso_sistema = new BeanAcceso_sistema();
            
            $bean_acceso_sistema->setIdAccesoSistema($idaccesosistema);
            $bean_acceso_sistema->setIdUsuario($idusuario);
            $bean_acceso_sistema->setIdControl($idcontrol);
            $bean_acceso_sistema->setReferencia($referencia);
            $bean_acceso_sistema->setEstado($estado);
            
            $data = $objAcceso_sistema->upd_acceso_sistema($beanAcceso_sistema) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

}
