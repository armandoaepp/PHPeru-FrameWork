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
        $idtipooperacion = $bean_bitacora->getIdtipooperacion();
        $registro = $bean_bitacora->getRegistro();
        $referencia = $bean_bitacora->getReferencia();

        $this->query = "CALL usp_set_bitacora('$idbitacora','$idusuario','$idtipooperacion','$registro','$referencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_bitacora($bean_bitacora)
    {
        $idbitacora = $bean_bitacora->getIdbitacora();
        $idusuario = $bean_bitacora->getIdusuario();
        $idtipooperacion = $bean_bitacora->getIdtipooperacion();
        $registro = $bean_bitacora->getRegistro();
        $referencia = $bean_bitacora->getReferencia();

        $this->query = "CALL usp_upd_bitacora('$idbitacora','$idusuario','$idtipooperacion','$registro','$referencia')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_bitacora_estado($bean_bitacora)
    {
        $idbitacora = $bean_bitacora->getIdbitacora();
        $referencia = $bean_bitacora->getReferencia();

        $this->query = "CALL usp_upd_bitacora_estado('$idbitacora','$referencia')";
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