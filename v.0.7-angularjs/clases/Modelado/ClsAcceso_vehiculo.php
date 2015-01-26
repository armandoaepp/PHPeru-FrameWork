<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsAcceso_vehiculo extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_acceso_vehiculo($bean_acceso_vehiculo)
    {
        $idaccesovehiculo = $bean_acceso_vehiculo->getIdaccesovehiculo();
        $idusuario = $bean_acceso_vehiculo->getIdusuario();
        $idvehiculo = $bean_acceso_vehiculo->getIdvehiculo();
        $observacion = $bean_acceso_vehiculo->getObservacion();
        $estado = $bean_acceso_vehiculo->getEstado();

        $this->query = "CALL usp_set_acceso_vehiculo('$idaccesovehiculo','$idusuario','$idvehiculo','$observacion','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_acceso_vehiculo($bean_acceso_vehiculo)
    {
        $idaccesovehiculo = $bean_acceso_vehiculo->getIdaccesovehiculo();
        $idusuario = $bean_acceso_vehiculo->getIdusuario();
        $idvehiculo = $bean_acceso_vehiculo->getIdvehiculo();
        $observacion = $bean_acceso_vehiculo->getObservacion();
        $estado = $bean_acceso_vehiculo->getEstado();

        $this->query = "CALL usp_upd_acceso_vehiculo('$idaccesovehiculo','$idusuario','$idvehiculo','$observacion','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_acceso_vehiculo_estado($bean_acceso_vehiculo)
    {
        $idaccesovehiculo = $bean_acceso_vehiculo->getIdaccesovehiculo();
        $estado = $bean_acceso_vehiculo->getEstado();

        $this->query = "CALL usp_upd_acceso_vehiculo_estado('$idaccesovehiculo','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_acceso_vehiculo_by_idaccesovehiculo($bean_acceso_vehiculo)
    {
        $idaccesovehiculo = $bean_acceso_vehiculo->getIdaccesovehiculo();

        $this->query = "CALL usp_get_acceso_vehiculo_by_idaccesovehiculo('$idaccesovehiculo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_acceso_vehiculo()
    {
        $this->query = "CALL usp_get_acceso_vehiculo()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>