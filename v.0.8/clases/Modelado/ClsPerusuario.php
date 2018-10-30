<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsPerusuario extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_perusuario($bean_perusuario)
    {
        $idperusuario = $bean_perusuario->getIdPerUsuario();
        $perapellidos = $bean_perusuario->getPerApellidos();
        $pernombre = $bean_perusuario->getPerNombre();
        $perusuario = $bean_perusuario->getPerUsuario();
        $perpassword = $bean_perusuario->getPerPassword();
        $fechareg = $bean_perusuario->getFechaReg();
        $estado = $bean_perusuario->getEstado();

        $this->query = "CALL usp_set_perusuario('$idperusuario','$perapellidos','$pernombre','$perusuario','$perpassword','$fechareg','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_perusuario($bean_perusuario)
    {
        $idperusuario = $bean_perusuario->getIdPerUsuario();
        $perapellidos = $bean_perusuario->getPerApellidos();
        $pernombre = $bean_perusuario->getPerNombre();
        $perusuario = $bean_perusuario->getPerUsuario();
        $perpassword = $bean_perusuario->getPerPassword();
        $fechareg = $bean_perusuario->getFechaReg();
        $estado = $bean_perusuario->getEstado();

        $this->query = "CALL usp_upd_perusuario('$idperusuario','$perapellidos','$pernombre','$perusuario','$perpassword','$fechareg','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_perusuario_estado($bean_perusuario)
    {
        $idperusuario = $bean_perusuario->getIdPerUsuario();
        $estado = $bean_perusuario->getEstado();

        $this->query = "CALL usp_upd_perusuario_estado('$idperusuario','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_perusuario_by_idperusuario($bean_perusuario)
    {
        $idperusuario = $bean_perusuario->getIdPerUsuario();

        $this->query = "CALL usp_get_perusuario_by_idperusuario('$idperusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_perusuario()
    {
        $this->query = "CALL usp_get_perusuario()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>