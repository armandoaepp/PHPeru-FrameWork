<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsRol extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
     {
         $this->conn = $cnx;
     }
# Método Insertar
    public function set_rol($bean_rol)
    {
        $idrol = $bean_rol->getIdRol();
        $nombre = $bean_rol->getNombre();
        $estado = $bean_rol->getEstado();

        $this->query = "CALL usp_set_rol('$idrol','$nombre','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_rol($bean_rol)
    {
        $idrol = $bean_rol->getIdRol();
        $nombre = $bean_rol->getNombre();
        $estado = $bean_rol->getEstado();

        $this->query = "CALL usp_upd_rol('$idrol','$nombre','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_rol_estado($bean_rol)
    {
        $idrol = $bean_rol->getIdRol();
        $estado = $bean_rol->getEstado();

        $this->query = "CALL usp_upd_rol_estado('$idrol','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_rol_by_idrol($bean_rol)
    {
        $idrol = $bean_rol->getIdRol();

        $this->query = "CALL usp_get_rol_by_idrol('$idrol')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_rol()
    {
        $this->query = "CALL usp_get_rol()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>