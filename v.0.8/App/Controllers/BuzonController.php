<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class BuzonController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function getAll()
    {
        try
        {
            $buzon  = new Buzon();

            $data = $buzon->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setBuzon($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $buzon  = new Buzon($this->cnx);

            $bean_buzon = new BeanBuzon();
            
            $bean_buzon->setId($id);
            $bean_buzon->setNombres($nombres);
            $bean_buzon->setTelefono($telefono);
            $bean_buzon->setEmail($email);
            $bean_buzon->setMensaje($mensaje);
            $bean_buzon->setFecha($fecha);
            
            $data = $buzon->save($bean_buzon) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateBuzon($params = array())
    {
        try
        {
            
            extract($params) ; 

            $buzon  = new Buzon($this->cnx);
            $bean_buzon = new BeanBuzon();
            
            $bean_buzon->setId($id);
            $bean_buzon->setNombres($nombres);
            $bean_buzon->setTelefono($telefono);
            $bean_buzon->setEmail($email);
            $bean_buzon->setMensaje($mensaje);
            $bean_buzon->setFecha($fecha);

            $data = $buzon->update($bean_buzon) ;
            
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

    public function updateEstado($params = array())
    {
        try
        {
            
            extract($params) ; 

            $buzon  = new Buzon($this->cnx);
            $bean_buzon = new BeanBuzon();
            
            $bean_buzon->setId($id);
            $bean_buzon->setEstado($estado);

            $data = $buzon->update($bean_buzon) ;
            
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

    public function getById($id)
    {
        try
        {
            $buzon  = new Buzon();

            $bean_buzon = new BeanBuzon();

            $bean_buzon->setId($id);

            $data = $buzon->getById( $bean_buzon) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function deleteById($id)
    {
        try
        {
            $buzon  = new Buzon();

            $bean_buzon = new BeanBuzon();

            $bean_buzon->setId($id);

            $data = $buzon->deleteById( $bean_buzon ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
