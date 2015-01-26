<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class UsuarioController
{
    function get_usuario()
    {
        try
        {
            $objUsuario  = new ClsUsuario();

            $data = $objUsuario->get_usuario() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function set_usuario($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objUsuario  = new ClsUsuario();
            $bean_usuario = new BeanUsuario();
            
            $bean_usuario->setIdUsuario($idusuario);
            $bean_usuario->setIdPersona($idpersona);
            $bean_usuario->setIdRol($idrol);
            $bean_usuario->setIdTipoRelacion($idtiporelacion);
            $bean_usuario->setUsuario($usuario);
            $bean_usuario->setClave($clave);
            $bean_usuario->setFecha($fecha);
            $bean_usuario->setEstado($estado);
            
            $data = $objUsuario->get_usuario($beanUsuario) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function get_usuario_by_id($id)
    {
        try
        {
            $objUsuario  = new ClsUsuario();
            $bean_usuario = new BeanUsuario();

            $bean_usuario->setId($id);
            $data = $objUsuario->get_usuario() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function upd_usuario($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objUsuario  = new ClsUsuario();
            $bean_usuario = new BeanUsuario();
            
            $bean_usuario->setIdUsuario($idusuario);
            $bean_usuario->setIdPersona($idpersona);
            $bean_usuario->setIdRol($idrol);
            $bean_usuario->setIdTipoRelacion($idtiporelacion);
            $bean_usuario->setUsuario($usuario);
            $bean_usuario->setClave($clave);
            $bean_usuario->setFecha($fecha);
            $bean_usuario->setEstado($estado);
            
            $data = $objUsuario->upd_usuario($beanUsuario) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

}
