<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsBitacora extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_bitacora($bean_bitacora)
    {
        $idbitacora = $bean_bitacora->getIdbitacora();
        $idusuario = $bean_bitacora->getIdusuario();
        $tipo = $bean_bitacora->getTipo();
        $ingreso = $bean_bitacora->getIngreso();
        $salida = $bean_bitacora->getSalida();

        $this->query = "CALL usp_set_bitacora('$idbitacora','$idusuario','$tipo','$ingreso','$salida')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_bitacora($bean_bitacora)
    {
        $idbitacora = $bean_bitacora->getIdbitacora();
        $idusuario = $bean_bitacora->getIdusuario();
        $tipo = $bean_bitacora->getTipo();
        $ingreso = $bean_bitacora->getIngreso();
        $salida = $bean_bitacora->getSalida();

        $this->query = "CALL usp_upd_bitacora('$idbitacora','$idusuario','$tipo','$ingreso','$salida')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_bitacora_estado($bean_bitacora)
    {
        $idbitacora = $bean_bitacora->getIdbitacora();
        $salida = $bean_bitacora->getSalida();

        $this->query = "CALL usp_upd_bitacora_estado('$idbitacora','$salida')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_bitacora_by_idbitacora($bean_bitacora)
    {
        $idbitacora = $bean_bitacora->getIdbitacora();

        $this->query = "CALL usp_get_bitacora_by_idbitacora('$idbitacora')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_bitacora()
    {
        $this->query = "CALL usp_get_bitacora()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>