<?php 
# Class Model Generada - ByPower @armandaepp 
class Admision extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM admision";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_admision)
    {
        try{
            $id = $bean_admision->getId();
            $titulo = $bean_admision->getTitulo();
            $imagen = $bean_admision->getImagen();
            $requisitos = $bean_admision->getRequisitos();
            $horarios = $bean_admision->getHorarios();
            $inversion = $bean_admision->getInversion();
            $email = $bean_admision->getEmail();

            $this->query = "INSERT INTO admision
                            (
                                titulo,
                                imagen,
                                requisitos,
                                horarios,
                                inversion,
                                email
                            )
                            VALUES(
                                '$titulo',
                                '$imagen',
                                '$requisitos',
                                '$horarios',
                                '$inversion',
                                '$email'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_admision)
    {
        try{
            $id = $bean_admision->getId();
            $titulo = $bean_admision->getTitulo();
            $imagen = $bean_admision->getImagen();
            $requisitos = $bean_admision->getRequisitos();
            $horarios = $bean_admision->getHorarios();
            $inversion = $bean_admision->getInversion();
            $email = $bean_admision->getEmail();

            $this->query = "UPDATE admision SET 
                                titulo = '$titulo,
                                imagen = '$imagen,
                                requisitos = '$requisitos,
                                horarios = '$horarios,
                                inversion = '$inversion,
                                email = '$email
                            WHERE id = '$id'
                            LIMIT 1 ";
            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_admision)
    {
        try{
            $id = $bean_admision->getId();
            $estado = $bean_admision->getEstado();

            $this->query = "UPDATE admision SET 
                                estado = '$estado'
                            WHERE id='$id'
                            LIMIT 1 ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Buscar por ID
    public function getById($bean_admision)
    {
        try{
            $id = $bean_admision->getId();

            $this->query = "SELECT * FROM admision WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_admision)
    {
        try{
            $id = $bean_admision->getId();

            $this->query = "DELETE FROM admision WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>