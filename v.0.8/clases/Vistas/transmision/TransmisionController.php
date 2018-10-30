<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class TransmisionController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_transmision()
    {
        try
        {
            $objTransmision  = new ClsTransmision();

            $data = $objTransmision->get_transmision() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_transmision($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objTransmision  = new ClsTransmision($this->cnx);
            $bean_transmision = new BeanTransmision();
            
            $bean_transmision->setIdTransmision($idtransmision);
            $bean_transmision->setIdPersonaJuridica($idpersonajuridica);
            $bean_transmision->setPlaca($placa);
            $bean_transmision->setLongitud($longitud);
            $bean_transmision->setLatitud($latitud);
            $bean_transmision->setDireccion($direccion);
            $bean_transmision->setVelocidad($velocidad);
            $bean_transmision->setGpsTime($gpstime);
            $bean_transmision->setPanico($panico);
            $bean_transmision->setEstado($estado);
            
            $data = $objTransmision->set_transmision($bean_transmision) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_transmision_by_id($id)
    {
        try
        {
            $objTransmision  = new ClsTransmision();
            $bean_transmision = new BeanTransmision();

            $bean_transmision->setId($id);
            $data = $objTransmision->get_transmision() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_transmision($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objTransmision  = new ClsTransmision($this->cnx);
            $bean_transmision = new BeanTransmision();
            
            $bean_transmision->setIdTransmision($idtransmision);
            $bean_transmision->setIdPersonaJuridica($idpersonajuridica);
            $bean_transmision->setPlaca($placa);
            $bean_transmision->setLongitud($longitud);
            $bean_transmision->setLatitud($latitud);
            $bean_transmision->setDireccion($direccion);
            $bean_transmision->setVelocidad($velocidad);
            $bean_transmision->setGpsTime($gpstime);
            $bean_transmision->setPanico($panico);
            $bean_transmision->setEstado($estado);
            
            $data = $objTransmision->upd_transmision($bean_transmision) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
