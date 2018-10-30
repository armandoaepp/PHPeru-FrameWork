<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsAdmision extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_admision($bean_admision)
    {
        $id = $bean_admision->getId();
        $titulo = $bean_admision->getTitulo();
        $imagen = $bean_admision->getImagen();
        $requisitos = $bean_admision->getRequisitos();
        $horarios = $bean_admision->getHorarios();
        $inversion = $bean_admision->getInversion();
        $email = $bean_admision->getEmail();

        $this->query = "CALL usp_set_admision('$id','$titulo','$imagen','$requisitos','$horarios','$inversion','$email')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_admision($bean_admision)
    {
        $id = $bean_admision->getId();
        $titulo = $bean_admision->getTitulo();
        $imagen = $bean_admision->getImagen();
        $requisitos = $bean_admision->getRequisitos();
        $horarios = $bean_admision->getHorarios();
        $inversion = $bean_admision->getInversion();
        $email = $bean_admision->getEmail();

        $this->query = "CALL usp_upd_admision('$id','$titulo','$imagen','$requisitos','$horarios','$inversion','$email')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_admision_estado($bean_admision)
    {
        $id = $bean_admision->getId();
        $email = $bean_admision->getEmail();

        $this->query = "CALL usp_upd_admision_estado('$id','$email')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_admision_by_id($bean_admision)
    {
        $id = $bean_admision->getId();

        $this->query = "CALL usp_get_admision_by_id('$id')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_admision()
    {
        $this->query = "CALL usp_get_admision()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>