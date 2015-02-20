<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsVehiculo_alerta extends ClsConexion {
# CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }
# Método Insertar
    public function set_vehiculo_alerta($bean_vehiculo_alerta)
    {
        $idvehiculoalerta = $bean_vehiculo_alerta->getIdVehiculoAlerta();
        $idvehiculo = $bean_vehiculo_alerta->getIdVehiculo();
        $idcellocator = $bean_vehiculo_alerta->getIdCcellocator();
        $RMUId = $bean_vehiculo_alerta->getRMUId();
        $GPSX = $bean_vehiculo_alerta->getGPSX();
        $GPSY = $bean_vehiculo_alerta->getGPSY();
        $Speed = $bean_vehiculo_alerta->getSpeed();
        $Direction = $bean_vehiculo_alerta->getDirection();
        $UTCTime = $bean_vehiculo_alerta->getUTCTime();
        $fecharegistro = $bean_vehiculo_alerta->getFechaRegistro();
        $InputVoltage = $bean_vehiculo_alerta->getInputVoltage();
        $idtipoalerta = $bean_vehiculo_alerta->getIdTipoAlerta();
        $referencia = $bean_vehiculo_alerta->getReferencia();
        $estado = $bean_vehiculo_alerta->getEstado();

        $this->query = "CALL usp_set_vehiculo_alerta('$idvehiculoalerta','$idvehiculo','$idcellocator','$RMUId','$GPSX','$GPSY','$Speed','$Direction','$UTCTime','$fecharegistro','$InputVoltage','$idtipoalerta','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Actualizar
    public function upd_vehiculo_alerta($bean_vehiculo_alerta)
    {
        $idvehiculoalerta = $bean_vehiculo_alerta->getIdVehiculoAlerta();
        $idvehiculo = $bean_vehiculo_alerta->getIdVehiculo();
        $idcellocator = $bean_vehiculo_alerta->getIdCcellocator();
        $RMUId = $bean_vehiculo_alerta->getRMUId();
        $GPSX = $bean_vehiculo_alerta->getGPSX();
        $GPSY = $bean_vehiculo_alerta->getGPSY();
        $Speed = $bean_vehiculo_alerta->getSpeed();
        $Direction = $bean_vehiculo_alerta->getDirection();
        $UTCTime = $bean_vehiculo_alerta->getUTCTime();
        $fecharegistro = $bean_vehiculo_alerta->getFechaRegistro();
        $InputVoltage = $bean_vehiculo_alerta->getInputVoltage();
        $idtipoalerta = $bean_vehiculo_alerta->getIdTipoAlerta();
        $referencia = $bean_vehiculo_alerta->getReferencia();
        $estado = $bean_vehiculo_alerta->getEstado();

        $this->query = "CALL usp_upd_vehiculo_alerta('$idvehiculoalerta','$idvehiculo','$idcellocator','$RMUId','$GPSX','$GPSY','$Speed','$Direction','$UTCTime','$fecharegistro','$InputVoltage','$idtipoalerta','$referencia','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;

    }
# Método Eliminar(Actualizar Estado)
    public function upd_vehiculo_alerta_estado($bean_vehiculo_alerta)
    {
        $idvehiculoalerta = $bean_vehiculo_alerta->getIdVehiculoAlerta();
        $estado = $bean_vehiculo_alerta->getEstado();

        $this->query = "CALL usp_upd_vehiculo_alerta_estado('$idvehiculoalerta','$estado')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
     }
# Método Buscar por ID
    public function get_vehiculo_alerta_by_idvehiculoalerta($bean_vehiculo_alerta)
    {
        $idvehiculoalerta = $bean_vehiculo_alerta->getIdVehiculoAlerta();

        $this->query = "CALL usp_get_vehiculo_alerta_by_idvehiculoalerta('$idvehiculoalerta')";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
# Método get Seleccionar todos 
    public function get_vehiculo_alerta()
    {
        $this->query = "CALL usp_get_vehiculo_alerta()";
        $this->execute_query();
        $data = $this->rows ;
        return $data;
    }
}
?>