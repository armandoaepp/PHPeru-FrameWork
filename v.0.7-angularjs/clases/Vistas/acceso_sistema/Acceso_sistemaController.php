<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class Acceso_sistemaController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->$cnx = $cnx;
    }
    
    public function get_acceso_sistema()
    {
        try
        {
            $objAcceso_sistema  = new ClsAcceso_sistema();

            $data = $objAcceso_sistema->get_acceso_sistema() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function set_acceso_sistema($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objAcceso_sistema  = new ClsAcceso_sistema($this->$cnx);
            $bean_acceso_sistema = new BeanAcceso_sistema();
            
            $bean_acceso_sistema->setIdAccesoSistema($idaccesosistema);
            $bean_acceso_sistema->setIdUsuario($idusuario);
            $bean_acceso_sistema->setIdControl($idcontrol);
            $bean_acceso_sistema->setReferencia($referencia);
            $bean_acceso_sistema->setEstado($estado);
            
            $data = $objAcceso_sistema->get_acceso_sistema($beanAcceso_sistema) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function get_acceso_sistema_by_id($id)
    {
        try
        {
            $objAcceso_sistema  = new ClsAcceso_sistema();
            $bean_acceso_sistema = new BeanAcceso_sistema();

            $bean_acceso_sistema->setId($id);
            $data = $objAcceso_sistema->get_acceso_sistema() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function upd_acceso_sistema($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objAcceso_sistema  = new ClsAcceso_sistema($this->$cnx);
            $bean_acceso_sistema = new BeanAcceso_sistema();
            
            $bean_acceso_sistema->setIdAccesoSistema($idaccesosistema);
            $bean_acceso_sistema->setIdUsuario($idusuario);
            $bean_acceso_sistema->setIdControl($idcontrol);
            $bean_acceso_sistema->setReferencia($referencia);
            $bean_acceso_sistema->setEstado($estado);
            
            $data = $objAcceso_sistema->upd_acceso_sistema($beanAcceso_sistema) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
