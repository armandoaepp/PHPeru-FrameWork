<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsMoneda extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
     {
         $this->conn = $cnx;
     }
# Método Insertar
    public function set_moneda($bean_moneda)
    {
        $idmoneda = $bean_moneda->getIdmoneda();
        $nombre = $bean_moneda->getNombre();
        $estado = $bean_moneda->getEstado();

        $this->query = "CALL usp_set_moneda('$idmoneda','$nombre','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_moneda($bean_moneda)
    {
        $idmoneda = $bean_moneda->getIdmoneda();
        $nombre = $bean_moneda->getNombre();
        $estado = $bean_moneda->getEstado();

        $this->query = "CALL usp_upd_moneda('$idmoneda','$nombre','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_moneda_estado($bean_moneda)
    {
        $idmoneda = $bean_moneda->getIdmoneda();
        $estado = $bean_moneda->getEstado();

        $this->query = "CALL usp_upd_moneda_estado('$idmoneda','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_moneda_by_idmoneda($bean_moneda)
    {
        $idmoneda = $bean_moneda->getIdmoneda();

        $this->query = "CALL usp_get_moneda_by_idmoneda('$idmoneda')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_moneda()
    {
        $this->query = "CALL usp_get_moneda()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>