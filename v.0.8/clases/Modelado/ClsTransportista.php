<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsTransportista extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_transportista($bean_transportista)
    {
        $idtransp = $bean_transportista->getIdTtransp();
        $razonsocial = $bean_transportista->getRazonSocial();
        $direccion = $bean_transportista->getDireccion();
        $telefonos = $bean_transportista->getTelefonos();
        $telefono2 = $bean_transportista->getTelefono2();
        $telefono3 = $bean_transportista->getTelefono3();
        $email = $bean_transportista->getTmail();
        $avatar = $bean_transportista->getAvatar();
        $ruc = $bean_transportista->getRuc();
        $representante = $bean_transportista->getRepresentante();
        $puntuacion = $bean_transportista->getPuntuacion();
        $permisos = $bean_transportista->getPermisos();
        $web = $bean_transportista->getWeb();
        $facebook = $bean_transportista->getFacebook();
        $twitter = $bean_transportista->getTwitter();
        $fechareg = $bean_transportista->getFechareg();
        $estado = $bean_transportista->getEstado();
        $certificada = $bean_transportista->getCertificada();
        $ubigeo = $bean_transportista->getUbigeo();

        $this->query = "CALL usp_set_transportista('$idtransp','$razonsocial','$direccion','$telefonos','$telefono2','$telefono3','$email','$avatar','$ruc','$representante','$puntuacion','$permisos','$web','$facebook','$twitter','$fechareg','$estado','$certificada','$ubigeo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_transportista($bean_transportista)
    {
        $idtransp = $bean_transportista->getIdTtransp();
        $razonsocial = $bean_transportista->getRazonSocial();
        $direccion = $bean_transportista->getDireccion();
        $telefonos = $bean_transportista->getTelefonos();
        $telefono2 = $bean_transportista->getTelefono2();
        $telefono3 = $bean_transportista->getTelefono3();
        $email = $bean_transportista->getTmail();
        $avatar = $bean_transportista->getAvatar();
        $ruc = $bean_transportista->getRuc();
        $representante = $bean_transportista->getRepresentante();
        $puntuacion = $bean_transportista->getPuntuacion();
        $permisos = $bean_transportista->getPermisos();
        $web = $bean_transportista->getWeb();
        $facebook = $bean_transportista->getFacebook();
        $twitter = $bean_transportista->getTwitter();
        $fechareg = $bean_transportista->getFechareg();
        $estado = $bean_transportista->getEstado();
        $certificada = $bean_transportista->getCertificada();
        $ubigeo = $bean_transportista->getUbigeo();

        $this->query = "CALL usp_upd_transportista('$idtransp','$razonsocial','$direccion','$telefonos','$telefono2','$telefono3','$email','$avatar','$ruc','$representante','$puntuacion','$permisos','$web','$facebook','$twitter','$fechareg','$estado','$certificada','$ubigeo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_transportista_estado($bean_transportista)
    {
        $idtransp = $bean_transportista->getIdTtransp();
        $ubigeo = $bean_transportista->getUbigeo();

        $this->query = "CALL usp_upd_transportista_estado('$idtransp','$ubigeo')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_transportista_by_idtransp($bean_transportista)
    {
        $idtransp = $bean_transportista->getIdTtransp();

        $this->query = "CALL usp_get_transportista_by_idtransp('$idtransp')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_transportista()
    {
        $this->query = "CALL usp_get_transportista()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>