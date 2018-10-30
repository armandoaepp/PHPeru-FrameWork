<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class AdmisionController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_admision()
    {
        try
        {
            $objAdmision  = new ClsAdmision();

            $data = $objAdmision->get_admision() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_admision($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objAdmision  = new ClsAdmision($this->cnx);
            $bean_admision = new BeanAdmision();
            
            $bean_admision->setid($id);
            $bean_admision->settitulo($titulo);
            $bean_admision->setimagen($imagen);
            $bean_admision->setrequisitos($requisitos);
            $bean_admision->sethorarios($horarios);
            $bean_admision->setinversion($inversion);
            $bean_admision->setemail($email);
            
            $data = $objAdmision->set_admision($bean_admision) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_admision_by_id($id)
    {
        try
        {
            $objAdmision  = new ClsAdmision();
            $bean_admision = new BeanAdmision();

            $bean_admision->setId($id);
            $data = $objAdmision->get_admision() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_admision($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objAdmision  = new ClsAdmision($this->cnx);
            $bean_admision = new BeanAdmision();
            
            $bean_admision->setid($id);
            $bean_admision->settitulo($titulo);
            $bean_admision->setimagen($imagen);
            $bean_admision->setrequisitos($requisitos);
            $bean_admision->sethorarios($horarios);
            $bean_admision->setinversion($inversion);
            $bean_admision->setemail($email);
            
            $data = $objAdmision->upd_admision($bean_admision) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
