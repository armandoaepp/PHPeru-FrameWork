<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class PersonaController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->$cnx = $cnx;
    }
    
    public function get_persona()
    {
        try
        {
            $objPersona  = new ClsPersona();

            $data = $objPersona->get_persona() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function set_persona($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objPersona  = new ClsPersona($this->$cnx);
            $bean_persona = new BeanPersona();
            
            $bean_persona->setidpersona($idpersona);
            $bean_persona->setnombre($nombre);
            $bean_persona->setnacimiento($nacimiento);
            $bean_persona->settipo($tipo);
            
            $data = $objPersona->get_persona($beanPersona) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function get_persona_by_id($id)
    {
        try
        {
            $objPersona  = new ClsPersona();
            $bean_persona = new BeanPersona();

            $bean_persona->setId($id);
            $data = $objPersona->get_persona() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function upd_persona($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objPersona  = new ClsPersona($this->$cnx);
            $bean_persona = new BeanPersona();
            
            $bean_persona->setidpersona($idpersona);
            $bean_persona->setnombre($nombre);
            $bean_persona->setnacimiento($nacimiento);
            $bean_persona->settipo($tipo);
            
            $data = $objPersona->upd_persona($beanPersona) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
