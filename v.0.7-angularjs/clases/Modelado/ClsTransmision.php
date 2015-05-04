<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsTransmision extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_transmision($bean_transmision)
    {
        $idtransmision = $bean_transmision->getIdTransmision();
        $idpersonajuridica = $bean_transmision->getIdPersonaJuridica();
        $placa = $bean_transmision->getPlaca();
        $longitud = $bean_transmision->getLongitud();
        $latitud = $bean_transmision->getLatitud();
        $direccion = $bean_transmision->getDireccion();
        $velocidad = $bean_transmision->getVelocidad();
        $gpstime = $bean_transmision->getGpsTime();
        $panico = $bean_transmision->getPanico();
        $estado = $bean_transmision->getEstado();

        $this->query = "CALL usp_set_transmision('$idtransmision','$idpersonajuridica','$placa','$longitud','$latitud','$direccion','$velocidad','$gpstime','$panico','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_transmision($bean_transmision)
    {
        $idtransmision = $bean_transmision->getIdTransmision();
        $idpersonajuridica = $bean_transmision->getIdPersonaJuridica();
        $placa = $bean_transmision->getPlaca();
        $longitud = $bean_transmision->getLongitud();
        $latitud = $bean_transmision->getLatitud();
        $direccion = $bean_transmision->getDireccion();
        $velocidad = $bean_transmision->getVelocidad();
        $gpstime = $bean_transmision->getGpsTime();
        $panico = $bean_transmision->getPanico();
        $estado = $bean_transmision->getEstado();

        $this->query = "CALL usp_upd_transmision('$idtransmision','$idpersonajuridica','$placa','$longitud','$latitud','$direccion','$velocidad','$gpstime','$panico','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_transmision_estado($bean_transmision)
    {
        $idtransmision = $bean_transmision->getIdTransmision();
        $estado = $bean_transmision->getEstado();

        $this->query = "CALL usp_upd_transmision_estado('$idtransmision','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_transmision_by_idtransmision($bean_transmision)
    {
        $idtransmision = $bean_transmision->getIdTransmision();

        $this->query = "CALL usp_get_transmision_by_idtransmision('$idtransmision')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_transmision()
    {
        $this->query = "CALL usp_get_transmision()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>