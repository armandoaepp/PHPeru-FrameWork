<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class BitacoraController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_bitacora()
    {
        try
        {
            $objBitacora  = new ClsBitacora();

            $data = $objBitacora->get_bitacora() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_bitacora($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objBitacora  = new ClsBitacora($this->cnx);
            $bean_bitacora = new BeanBitacora();
            
            $bean_bitacora->setidbitacora($idbitacora);
            $bean_bitacora->setidusuario($idusuario);
            $bean_bitacora->settipo($tipo);
            $bean_bitacora->setingreso($ingreso);
            $bean_bitacora->setsalida($salida);
            
            $data = $objBitacora->set_bitacora($bean_bitacora) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_bitacora_by_id($id)
    {
        try
        {
            $objBitacora  = new ClsBitacora();
            $bean_bitacora = new BeanBitacora();

            $bean_bitacora->setId($id);
            $data = $objBitacora->get_bitacora() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_bitacora($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objBitacora  = new ClsBitacora($this->cnx);
            $bean_bitacora = new BeanBitacora();
            
            $bean_bitacora->setidbitacora($idbitacora);
            $bean_bitacora->setidusuario($idusuario);
            $bean_bitacora->settipo($tipo);
            $bean_bitacora->setingreso($ingreso);
            $bean_bitacora->setsalida($salida);
            
            $data = $objBitacora->upd_bitacora($bean_bitacora) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
