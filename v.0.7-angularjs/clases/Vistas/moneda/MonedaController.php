<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class MonedaController
{
    function get_moneda()
    {
        try
        {
            $objMoneda  = new ClsMoneda();

            $data = $objMoneda->get_moneda() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function set_moneda($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objMoneda  = new ClsMoneda();
            $bean_moneda = new BeanMoneda();
            
            $bean_moneda->setidmoneda($idmoneda);
            $bean_moneda->setnombre($nombre);
            
            $data = $objMoneda->get_moneda($beanMoneda) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function get_moneda_by_id($id)
    {
        try
        {
            $objMoneda  = new ClsMoneda();
            $bean_moneda = new BeanMoneda();

            $bean_moneda->setId($id);
            $data = $objMoneda->get_moneda() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

    function upd_moneda($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objMoneda  = new ClsMoneda();
            $bean_moneda = new BeanMoneda();
            
            $bean_moneda->setidmoneda($idmoneda);
            $bean_moneda->setnombre($nombre);
            
            $data = $objMoneda->upd_moneda($beanMoneda) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
        return $rpta ;
    }

}
