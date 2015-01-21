<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsPersona extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
     {
         $this->conn = $cnx;
     }
# Método Insertar
    public function set_persona($bean_persona)
    {
        $idpersona = $bean_persona->getIdPersona();
        $nombre = $bean_persona->getNombres();
        $nacimiento = $bean_persona->getNacimiento();
        $tipo = $bean_persona->getTipo();
        $estado = $bean_persona->getEstado();

        $this->query = "CALL usp_set_persona('$idpersona','$nombre','$nacimiento','$tipo','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_persona($bean_persona)
    {
        $idpersona = $bean_persona->getIdPersona();
        $nombre = $bean_persona->getNombres();
        $nacimiento = $bean_persona->getNacimiento();
        $tipo = $bean_persona->getTipo();
        $estado = $bean_persona->getEstado();

        $this->query = "CALL usp_upd_persona('$idpersona','$nombre','$nacimiento','$tipo','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_persona_estado($bean_persona)
    {
        $idpersona = $bean_persona->getIdPersona();
        $estado = $bean_persona->getEstado();

        $this->query = "CALL usp_upd_persona_estado('$idpersona','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_persona_by_idpersona($bean_persona)
    {
        $idpersona = $bean_persona->getIdPersona();

        $this->query = "CALL usp_get_persona_by_idpersona('$idpersona')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_persona()
    {
        $this->query = "CALL usp_get_persona()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>