<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class TransportistaController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_transportista()
    {
        try
        {
            $objTransportista  = new ClsTransportista();

            $data = $objTransportista->get_transportista() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_transportista($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objTransportista  = new ClsTransportista($this->cnx);
            $bean_transportista = new BeanTransportista();
            
            $bean_transportista->setIdTtransp($idtransp);
            $bean_transportista->setRazonSocial($razonsocial);
            $bean_transportista->setDireccion($direccion);
            $bean_transportista->setTelefonos($telefonos);
            $bean_transportista->setTelefono2($telefono2);
            $bean_transportista->setTelefono3($telefono3);
            $bean_transportista->setTmail($email);
            $bean_transportista->setAvatar($avatar);
            $bean_transportista->setRuc($ruc);
            $bean_transportista->setRepresentante($representante);
            $bean_transportista->setPuntuacion($puntuacion);
            $bean_transportista->setPermisos($permisos);
            $bean_transportista->setWeb($web);
            $bean_transportista->setFacebook($facebook);
            $bean_transportista->setTwitter($twitter);
            $bean_transportista->setFechareg($fechareg);
            $bean_transportista->setEstado($estado);
            $bean_transportista->setCertificada($certificada);
            $bean_transportista->setUbigeo($ubigeo);
            
            $data = $objTransportista->set_transportista($bean_transportista) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_transportista_by_id($id)
    {
        try
        {
            $objTransportista  = new ClsTransportista();
            $bean_transportista = new BeanTransportista();

            $bean_transportista->setId($id);
            $data = $objTransportista->get_transportista() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_transportista($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objTransportista  = new ClsTransportista($this->cnx);
            $bean_transportista = new BeanTransportista();
            
            $bean_transportista->setIdTtransp($idtransp);
            $bean_transportista->setRazonSocial($razonsocial);
            $bean_transportista->setDireccion($direccion);
            $bean_transportista->setTelefonos($telefonos);
            $bean_transportista->setTelefono2($telefono2);
            $bean_transportista->setTelefono3($telefono3);
            $bean_transportista->setTmail($email);
            $bean_transportista->setAvatar($avatar);
            $bean_transportista->setRuc($ruc);
            $bean_transportista->setRepresentante($representante);
            $bean_transportista->setPuntuacion($puntuacion);
            $bean_transportista->setPermisos($permisos);
            $bean_transportista->setWeb($web);
            $bean_transportista->setFacebook($facebook);
            $bean_transportista->setTwitter($twitter);
            $bean_transportista->setFechareg($fechareg);
            $bean_transportista->setEstado($estado);
            $bean_transportista->setCertificada($certificada);
            $bean_transportista->setUbigeo($ubigeo);
            
            $data = $objTransportista->upd_transportista($bean_transportista) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
