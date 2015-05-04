<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class GeocoderController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_geocoder()
    {
        try
        {
            $objGeocoder  = new ClsGeocoder();

            $data = $objGeocoder->get_geocoder() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_geocoder($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objGeocoder  = new ClsGeocoder($this->cnx);
            $bean_geocoder = new BeanGeocoder();
            
            $bean_geocoder->setIdGeocoder($idgeocoder);
            $bean_geocoder->setIdCellocator($idcellocator);
            $bean_geocoder->setLonguitud($longuitud);
            $bean_geocoder->setLatidud($latidud);
            $bean_geocoder->setAddress($address);
            $bean_geocoder->setReferencia($referencia);
            
            $data = $objGeocoder->set_geocoder($bean_geocoder) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_geocoder_by_id($id)
    {
        try
        {
            $objGeocoder  = new ClsGeocoder();
            $bean_geocoder = new BeanGeocoder();

            $bean_geocoder->setId($id);
            $data = $objGeocoder->get_geocoder() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_geocoder($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objGeocoder  = new ClsGeocoder($this->cnx);
            $bean_geocoder = new BeanGeocoder();
            
            $bean_geocoder->setIdGeocoder($idgeocoder);
            $bean_geocoder->setIdCellocator($idcellocator);
            $bean_geocoder->setLonguitud($longuitud);
            $bean_geocoder->setLatidud($latidud);
            $bean_geocoder->setAddress($address);
            $bean_geocoder->setReferencia($referencia);
            
            $data = $objGeocoder->upd_geocoder($bean_geocoder) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
