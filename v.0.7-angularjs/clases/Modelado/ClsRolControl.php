<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsRol_control extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
     {
         $this->conn = $cnx;
     }
# Método Insertar
    public function set_rol_control($bean_rol_control)
    {
        $idrolcontrol = $bean_rol_control->getIdRolControl();
        $idrol = $bean_rol_control->getIdRrol();
        $idcontrol = $bean_rol_control->getIdControl();
        $referencia = $bean_rol_control->getReferencia();
        $estado = $bean_rol_control->getEstado();

        $this->query = "CALL usp_set_rol_control('$idrolcontrol','$idrol','$idcontrol','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_rol_control($bean_rol_control)
    {
        $idrolcontrol = $bean_rol_control->getIdRolControl();
        $idrol = $bean_rol_control->getIdRrol();
        $idcontrol = $bean_rol_control->getIdControl();
        $referencia = $bean_rol_control->getReferencia();
        $estado = $bean_rol_control->getEstado();

        $this->query = "CALL usp_upd_rol_control('$idrolcontrol','$idrol','$idcontrol','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_rol_control_estado($bean_rol_control)
    {
        $idrolcontrol = $bean_rol_control->getIdRolControl();
        $estado = $bean_rol_control->getEstado();

        $this->query = "CALL usp_upd_rol_control_estado('$idrolcontrol','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_rol_control_by_idrolcontrol($bean_rol_control)
    {
        $idrolcontrol = $bean_rol_control->getIdRolControl();

        $this->query = "CALL usp_get_rol_control_by_idrolcontrol('$idrolcontrol')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_rol_control()
    {
        $this->query = "CALL usp_get_rol_control()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>