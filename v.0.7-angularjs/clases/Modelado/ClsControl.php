<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsControl extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
     {
         $this->conn = $cnx;
     }
# Método Insertar
    public function set_control($bean_control)
    {
        $idcontrol = $bean_control->getIdControl();
        $idcontrolpadre = $bean_control->getIdControlPadre();
        $idtipocontrol = $bean_control->getIdIipoControl();
        $jerarquia = $bean_control->getJerarquia();
        $nombre = $bean_control->getNombre();
        $valor = $bean_control->getValor();
        $descripcion = $bean_control->getDescripcion();
        $estado = $bean_control->getEstado();

        $this->query = "CALL usp_set_control('$idcontrol','$idcontrolpadre','$idtipocontrol','$jerarquia','$nombre','$valor','$descripcion','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_control($bean_control)
    {
        $idcontrol = $bean_control->getIdControl();
        $idcontrolpadre = $bean_control->getIdControlPadre();
        $idtipocontrol = $bean_control->getIdIipoControl();
        $jerarquia = $bean_control->getJerarquia();
        $nombre = $bean_control->getNombre();
        $valor = $bean_control->getValor();
        $descripcion = $bean_control->getDescripcion();
        $estado = $bean_control->getEstado();

        $this->query = "CALL usp_upd_control('$idcontrol','$idcontrolpadre','$idtipocontrol','$jerarquia','$nombre','$valor','$descripcion','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_control_estado($bean_control)
    {
        $idcontrol = $bean_control->getIdControl();
        $estado = $bean_control->getEstado();

        $this->query = "CALL usp_upd_control_estado('$idcontrol','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_control_by_idcontrol($bean_control)
    {
        $idcontrol = $bean_control->getIdControl();

        $this->query = "CALL usp_get_control_by_idcontrol('$idcontrol')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_control()
    {
        $this->query = "CALL usp_get_control()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>