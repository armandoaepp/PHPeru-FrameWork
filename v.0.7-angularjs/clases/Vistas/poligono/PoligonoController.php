<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class PoligonoController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function get_poligono()
    {
        try
        {
            $objPoligono  = new ClsPoligono();

            $data = $objPoligono->get_poligono() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function set_poligono($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objPoligono  = new ClsPoligono($this->$cnx);
            $bean_poligono = new BeanPoligono();
            
            $bean_poligono->setIdPoligono($idpoligono);
            $bean_poligono->setIdPersona($idpersona);
            $bean_poligono->setTipoPoligono($tipopoligono);
            $bean_poligono->setPoliX($polix);
            $bean_poligono->setPoliY($poliy);
            $bean_poligono->setGeoCerca($geocerca);
            $bean_poligono->setFechaReg($fechareg);
            $bean_poligono->setReferencia($referencia);
            $bean_poligono->setEstado($estado);
            
            $data = $objPoligono->get_poligono($beanPoligono) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function get_poligono_by_id($id)
    {
        try
        {
            $objPoligono  = new ClsPoligono();
            $bean_poligono = new BeanPoligono();

            $bean_poligono->setId($id);
            $data = $objPoligono->get_poligono() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function upd_poligono($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objPoligono  = new ClsPoligono($this->$cnx);
            $bean_poligono = new BeanPoligono();
            
            $bean_poligono->setIdPoligono($idpoligono);
            $bean_poligono->setIdPersona($idpersona);
            $bean_poligono->setTipoPoligono($tipopoligono);
            $bean_poligono->setPoliX($polix);
            $bean_poligono->setPoliY($poliy);
            $bean_poligono->setGeoCerca($geocerca);
            $bean_poligono->setFechaReg($fechareg);
            $bean_poligono->setReferencia($referencia);
            $bean_poligono->setEstado($estado);
            
            $data = $objPoligono->upd_poligono($beanPoligono) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
