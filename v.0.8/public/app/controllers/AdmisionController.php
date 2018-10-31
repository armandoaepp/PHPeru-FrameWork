<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class AdmisionController
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
            $admision  = new Admision();

            $data = $admision->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setAdmision($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $admision  = new Admision($this->cnx);

            $bean_admision = new BeanAdmision();
            
            $bean_admision->setId($id);
            $bean_admision->setTitulo($titulo);
            $bean_admision->setImagen($imagen);
            $bean_admision->setRequisitos($requisitos);
            $bean_admision->setHorarios($horarios);
            $bean_admision->setInversion($inversion);
            $bean_admision->setEmail($email);
            
            $data = $admision->save($bean_admision) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateAdmision($params = array())
    {
        try
        {
            
            extract($params) ; 

            $admision  = new Admision($this->cnx);
            $bean_admision = new BeanAdmision();
            
            $bean_admision->setId($id);
            $bean_admision->setTitulo($titulo);
            $bean_admision->setImagen($imagen);
            $bean_admision->setRequisitos($requisitos);
            $bean_admision->setHorarios($horarios);
            $bean_admision->setInversion($inversion);
            $bean_admision->setEmail($email);

            $data = $admision->update($bean_admision) ;
            
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

            $admision  = new Admision($this->cnx);
            $bean_admision = new BeanAdmision();
            
            $bean_admision->setId($id);
            $bean_admision->setEstado($estado);

            $data = $admision->update($bean_admision) ;
            
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
            $admision  = new Admision();

            $bean_admision = new BeanAdmision();

            $bean_admision->setId($id);

            $data = $admision->getById( $bean_admision) ;

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
            $admision  = new Admision();

            $bean_admision = new BeanAdmision();

            $bean_admision->setId($id);

            $data = $admision->deleteById( $bean_admision ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
