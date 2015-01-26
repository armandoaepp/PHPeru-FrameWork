<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsUsuario extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
     {
         $this->conn = $cnx;
     }
# Método Insertar
    public function set_usuario($bean_usuario)
    {
        $idusuario = $bean_usuario->getIdUsuario();
        $idpersona = $bean_usuario->getIdPersona();
        $idrol = $bean_usuario->getIdRol();
        $idtiporelacion = $bean_usuario->getIdTipoRelacion();
        $usuario = $bean_usuario->getUsuario();
        $clave = $bean_usuario->getClave();
        $fecha = $bean_usuario->getFecha();
        $estado = $bean_usuario->getEstado();

        $this->query = "CALL usp_set_usuario('$idusuario','$idpersona','$idrol','$idtiporelacion','$usuario','$clave','$fecha','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_usuario($bean_usuario)
    {
        $idusuario = $bean_usuario->getIdUsuario();
        $idpersona = $bean_usuario->getIdPersona();
        $idrol = $bean_usuario->getIdRol();
        $idtiporelacion = $bean_usuario->getIdTipoRelacion();
        $usuario = $bean_usuario->getUsuario();
        $clave = $bean_usuario->getClave();
        $fecha = $bean_usuario->getFecha();
        $estado = $bean_usuario->getEstado();

        $this->query = "CALL usp_upd_usuario('$idusuario','$idpersona','$idrol','$idtiporelacion','$usuario','$clave','$fecha','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_usuario_estado($bean_usuario)
    {
        $idusuario = $bean_usuario->getIdUsuario();
        $estado = $bean_usuario->getEstado();

        $this->query = "CALL usp_upd_usuario_estado('$idusuario','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_usuario_by_idusuario($bean_usuario)
    {
        $idusuario = $bean_usuario->getIdUsuario();

        $this->query = "CALL usp_get_usuario_by_idusuario('$idusuario')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_usuario()
    {
        $this->query = "CALL usp_get_usuario()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>