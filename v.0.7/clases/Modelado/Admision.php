<?php
# Clase Generada - Creado por @armandaepp
class Admision extends ClsConexion
{
# CONSTRUCT
    public function __construct($cnx = null)
    {
        $this->conn = $cnx;
    }

# Método getALl
    public function getAll($bean_admision)
    {
        try {
            $id = $bean_admision->getId();

            $this->query = "SELECT * FROM admision";

            $this->execute_query();

            $data = $this->rows;

            return $data;

        } catch (exception $e) {

            throw new Exception($e->getMessage());

        }
    }
# Método SAVE
    public function save($bean_admision)
    {
        try {

            $titulo = $bean_admision->getTitulo();
            $imagen = $bean_admision->getImagen();
            $requisitos = $bean_admision->getRequisitos();
            $horarios = $bean_admision->getHorarios();
            $inversion = $bean_admision->getInversion();
            $email = $bean_admision->getEmail();

            $consulta = "INSERT INTO admision
VALUES(
'$titulo',
'$imagen',
'$requisitos',
'$horarios',
'$inversion',
'$email'
)";

            $this->execute_query();

            $data = $this->status_exe;

            return $data;

        } catch (exception $e) {

            throw new Exception($e->getMessage());

        }
    }

# Método Actualizar
    public function update($bean_admision)
    {
        try {

            $id = $bean_admision->getId();
            $titulo = $bean_admision->getTitulo();
            $imagen = $bean_admision->getImagen();
            $requisitos = $bean_admision->getRequisitos();
            $horarios = $bean_admision->getHorarios();
            $inversion = $bean_admision->getInversion();
            $email = $bean_admision->getEmail();

            $consulta = "UPDATE admision SET titulo = '$titulo,
imagen = '$imagen,
requisitos = '$requisitos,
horarios = '$horarios,
inversion = '$inversion,
email = '$email
 WHERE id='$id'";
            $this->execute_query();

            $data = $this->status_exe;

            return $data;

        } catch (exception $e) {

            throw new Exception($e->getMessage());

        }

    }

# Método updateEstado(Actualizar Estado)
    public function updateEstado($bean_admision)
    {
        try {
            $id = $bean_admision->getId();
            $email = $bean_admision->getEmail();

            $this->query = "UPDATE admision SET email = 'email WHERE id='$id'";
            $this->execute_query();
            $data = $this->rows;
            return $data;
            $this->execute_query();

            $data = $this->status_exe;

            return $data;

        } catch (exception $e) {

            throw new Exception($e->getMessage());

        }
    }

# Método Buscar por ID
    public function getById($bean_admision)
    {
        try {
            $id = $bean_admision->getId();

            $this->query = "SELECT * FROM admision WHERE id='id'";

            $this->execute_find();

            $data = $this->rows;

            return $data;

        } catch (exception $e) {

            throw new Exception($e->getMessage());

        }
    }
# Método deleteById
    public function deleteById($bean_admision)
    {
        try {
            $id = $bean_admision->getId();

            $this->query = "DELETE FROM admision WHERE id='$id'";
            $this->execute_query();
            $data = $this->rows;
            return $data;
            $this->execute_query();

            $data = $this->status_exe;

            return $data;

        } catch (exception $e) {

            throw new Exception($e->getMessage());

        }
    }

}
