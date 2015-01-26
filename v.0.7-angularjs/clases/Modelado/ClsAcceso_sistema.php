<?php
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp
class ClsAcceso_sistema extends ClsConexion {
# CONSTRUCT
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

# Método Insertar
    public function set_acceso_sistema($bean_acceso_sistema)
    {
        $idaccesosistema = $bean_acceso_sistema->getIdAccesoSistema();
        $idusuario = $bean_acceso_sistema->getIdUsuario();
        $idcontrol = $bean_acceso_sistema->getIdControl();
        $referencia = $bean_acceso_sistema->getReferencia();
        $estado = $bean_acceso_sistema->getEstado();

        $this->query = "CALL usp_set_acceso_sistema('$idaccesosistema','$idusuario','$idcontrol','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_acceso_sistema($bean_acceso_sistema)
    {
        $idaccesosistema = $bean_acceso_sistema->getIdAccesoSistema();
        $idusuario = $bean_acceso_sistema->getIdUsuario();
        $idcontrol = $bean_acceso_sistema->getIdControl();
        $referencia = $bean_acceso_sistema->getReferencia();
        $estado = $bean_acceso_sistema->getEstado();

        $this->query = "CALL usp_upd_acceso_sistema('$idaccesosistema','$idusuario','$idcontrol','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_acceso_sistema_estado($bean_acceso_sistema)
    {
        $idaccesosistema = $bean_acceso_sistema->getIdAccesoSistema();
        $estado = $bean_acceso_sistema->getEstado();

        $this->query = "CALL usp_upd_acceso_sistema_estado('$idaccesosistema','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_acceso_sistema_by_idaccesosistema($bean_acceso_sistema)
    {
        $idaccesosistema = $bean_acceso_sistema->getIdAccesoSistema();

        $this->query = "CALL usp_get_acceso_sistema_by_idaccesosistema('$idaccesosistema')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos
    public function get_acceso_sistema()
    {
        $this->query = "CALL usp_get_acceso_sistema()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>