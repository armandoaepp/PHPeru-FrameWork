<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class CategoriaController
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
            $categoria  = new Categoria();

            $data = $categoria->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setCategoria($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $categoria  = new Categoria($this->cnx);

            $bean_categoria = new BeanCategoria();
            
            $bean_categoria->setIdcategoria($idcategoria);
            $bean_categoria->setNombre($nombre);
            $bean_categoria->setUrl($url);
            $bean_categoria->setImagen($imagen);
            $bean_categoria->setPublicar($publicar);
            $bean_categoria->setCreated_up($created_up);
            
            $data = $categoria->save($bean_categoria) ;

            return $data ;
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
            $categoria  = new Categoria();

            $bean_categoria = new BeanCategoria();

            $bean_categoria->setIdcategoria($id);

            $data = $categoria->getById() ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateCategoria($params = array())
    {
        try
        {
            
            extract($params) ; 

            $categoria  = new Categoria($this->cnx);
            $bean_categoria = new BeanCategoria();
            
            $bean_categoria->setIdcategoria($idcategoria);
            $bean_categoria->setNombre($nombre);
            $bean_categoria->setUrl($url);
            $bean_categoria->setImagen($imagen);
            $bean_categoria->setPublicar($publicar);
            $bean_categoria->setCreated_up($created_up);
            
            $data = $categoria->update($bean_categoria) ;
            
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

}
