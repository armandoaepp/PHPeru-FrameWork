<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class Categoria extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll($bean_categoria)
    {
        try{

            $this->query = "SELECT * FROM categoria";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getIdcategoria();
            $nombre = $bean_categoria->getNombre();
            $url = $bean_categoria->getUrl();
            $imagen = $bean_categoria->getImagen();
            $publicar = $bean_categoria->getPublicar();
            $estado = $bean_categoria->getEstado();
            $created_up = $bean_categoria->getCreated_up();

            $this->query = "INSERT INTO categoria
                             VALUES(
                                '$nombre',
                                '$url',
                                '$imagen',
                                '$publicar',
                                '$estado',
                                '$created_up'
                             )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getIdcategoria();
            $nombre = $bean_categoria->getNombre();
            $url = $bean_categoria->getUrl();
            $imagen = $bean_categoria->getImagen();
            $publicar = $bean_categoria->getPublicar();
            $estado = $bean_categoria->getEstado();
            $created_up = $bean_categoria->getCreated_up();

            $this->query = "UPDATE categoria SET 
                                nombre = '$nombre,
                                url = '$url,
                                imagen = '$imagen,
                                publicar = '$publicar,
                                estado = '$estado,
                                created_up = '$created_up
                            WHERE idcategoria='$idcategoria'";
            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getIdcategoria();
            $estado = $bean_categoria->getEstado();

            $this->query = "UPDATE categoria SET 
                                estado = '$estado'
                            WHERE idcategoria='$idcategoria'";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
     }

    # Método Buscar por ID
    public function getById($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getIdcategoria();

            $this->query = "SELECT * FROM categoria WHERE idcategoria = '$idcategoria'";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getIdcategoria();

            $this->query = "DELETE FROM categoria WHERE idcategoria='$idcategoria'";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>