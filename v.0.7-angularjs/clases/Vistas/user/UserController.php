<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class UserController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function ctrl_get_user()
    {
        try
        {
            $objUser  = new ClsUser();

            $data = $objUser->get_user() ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_set_user($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $objUser  = new ClsUser($this->cnx);
            $bean_user = new BeanUser();
            
            $bean_user->setuser_id($user_id);
            $bean_user->setnombre($nombre);
            $bean_user->setapellidos($apellidos);
            $bean_user->setemail($email);
            $bean_user->setpassword($password);
            $bean_user->setcreated_up($created_up);
            
            $data = $objUser->set_user($bean_user) ;
            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_get_user_by_id($id)
    {
        try
        {
            $objUser  = new ClsUser();
            $bean_user = new BeanUser();

            $bean_user->setId($id);
            $data = $objUser->get_user() ;
            return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function ctrl_upd_user($params = array())
    {
        try
        {
            
            extract($params) ; 

            $objUser  = new ClsUser($this->cnx);
            $bean_user = new BeanUser();
            
            $bean_user->setuser_id($user_id);
            $bean_user->setnombre($nombre);
            $bean_user->setapellidos($apellidos);
            $bean_user->setemail($email);
            $bean_user->setpassword($password);
            $bean_user->setcreated_up($created_up);
            
            $data = $objUser->upd_user($bean_user) ;
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
