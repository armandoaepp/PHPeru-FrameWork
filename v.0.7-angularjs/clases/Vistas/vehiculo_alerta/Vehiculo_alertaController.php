<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class Vehiculo_alertaController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function get_vehiculo_alerta()
    {
        try
        {
            $objVehiculo_alerta  = new ClsVehiculo_alerta();

            $data = $objVehiculo_alerta->get_vehiculo_alerta() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function set_vehiculo_alerta($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objVehiculo_alerta  = new ClsVehiculo_alerta($this->$cnx);
            $bean_vehiculo_alerta = new BeanVehiculo_alerta();
            
            $bean_vehiculo_alerta->setIdVehiculoAlerta($idvehiculoalerta);
            $bean_vehiculo_alerta->setIdVehiculo($idvehiculo);
            $bean_vehiculo_alerta->setIdCcellocator($idcellocator);
            $bean_vehiculo_alerta->setRMUId($rmuid);
            $bean_vehiculo_alerta->setGPSX($gpsx);
            $bean_vehiculo_alerta->setGPSY($gpsy);
            $bean_vehiculo_alerta->setSpeed($speed);
            $bean_vehiculo_alerta->setDirection($direction);
            $bean_vehiculo_alerta->setUTCTime($utctime);
            $bean_vehiculo_alerta->setFechaRegistro($fecharegistro);
            $bean_vehiculo_alerta->setInputVoltage($inputvoltage);
            $bean_vehiculo_alerta->setIdTipoAlerta($idtipoalerta);
            $bean_vehiculo_alerta->setReferencia($referencia);
            $bean_vehiculo_alerta->setEstado($estado);
            
            $data = $objVehiculo_alerta->get_vehiculo_alerta($beanVehiculo_alerta) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function get_vehiculo_alerta_by_id($id)
    {
        try
        {
            $objVehiculo_alerta  = new ClsVehiculo_alerta();
            $bean_vehiculo_alerta = new BeanVehiculo_alerta();

            $bean_vehiculo_alerta->setId($id);
            $data = $objVehiculo_alerta->get_vehiculo_alerta() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function upd_vehiculo_alerta($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objVehiculo_alerta  = new ClsVehiculo_alerta($this->$cnx);
            $bean_vehiculo_alerta = new BeanVehiculo_alerta();
            
            $bean_vehiculo_alerta->setIdVehiculoAlerta($idvehiculoalerta);
            $bean_vehiculo_alerta->setIdVehiculo($idvehiculo);
            $bean_vehiculo_alerta->setIdCcellocator($idcellocator);
            $bean_vehiculo_alerta->setRMUId($rmuid);
            $bean_vehiculo_alerta->setGPSX($gpsx);
            $bean_vehiculo_alerta->setGPSY($gpsy);
            $bean_vehiculo_alerta->setSpeed($speed);
            $bean_vehiculo_alerta->setDirection($direction);
            $bean_vehiculo_alerta->setUTCTime($utctime);
            $bean_vehiculo_alerta->setFechaRegistro($fecharegistro);
            $bean_vehiculo_alerta->setInputVoltage($inputvoltage);
            $bean_vehiculo_alerta->setIdTipoAlerta($idtipoalerta);
            $bean_vehiculo_alerta->setReferencia($referencia);
            $bean_vehiculo_alerta->setEstado($estado);
            
            $data = $objVehiculo_alerta->upd_vehiculo_alerta($beanVehiculo_alerta) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
