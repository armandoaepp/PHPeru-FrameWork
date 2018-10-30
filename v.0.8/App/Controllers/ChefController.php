<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class ChefController
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
            $chef  = new Chef();

            $data = $chef->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setChef($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $chef  = new Chef($this->cnx);

            $bean_chef = new BeanChef();
            
            $bean_chef->setId($id);
            $bean_chef->setTitulo($titulo);
            $bean_chef->setSubtitulo($subtitulo);
            $bean_chef->setResumen($resumen);
            $bean_chef->setDescripcion($descripcion);
            $bean_chef->setImagen($imagen);
            $bean_chef->setOrden($orden);
            $bean_chef->setFecha($fecha);
            
            $data = $chef->save($bean_chef) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateChef($params = array())
    {
        try
        {
            
            extract($params) ; 

            $chef  = new Chef($this->cnx);
            $bean_chef = new BeanChef();
            
            $bean_chef->setId($id);
            $bean_chef->setTitulo($titulo);
            $bean_chef->setSubtitulo($subtitulo);
            $bean_chef->setResumen($resumen);
            $bean_chef->setDescripcion($descripcion);
            $bean_chef->setImagen($imagen);
            $bean_chef->setOrden($orden);
            $bean_chef->setFecha($fecha);

            $data = $chef->update($bean_chef) ;
            
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

            $chef  = new Chef($this->cnx);
            $bean_chef = new BeanChef();
            
            $bean_chef->setId($id);
            $bean_chef->setEstado($estado);

            $data = $chef->update($bean_chef) ;
            
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
            $chef  = new Chef();

            $bean_chef = new BeanChef();

            $bean_chef->setId($id);

            $data = $chef->getById( $bean_chef) ;

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
            $chef  = new Chef();

            $bean_chef = new BeanChef();

            $bean_chef->setId($id);

            $data = $chef->deleteById( $bean_chef ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
