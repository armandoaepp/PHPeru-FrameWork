<?php 
# Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp 
class ClsCellocator extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_cellocator($bean_cellocator)
{
$idrastreo = $bean_cellocator->getIdrastreo();
$RMUId = $bean_cellocator->getRMUId();
$CellDateTime = $bean_cellocator->getCellDateTime();
$GPSX = $bean_cellocator->getGPSX();
$GPSY = $bean_cellocator->getGPSY();
$GPSDateTime = $bean_cellocator->getGPSDateTime();
$Speed = $bean_cellocator->getSpeed();
$Direction = $bean_cellocator->getDirection();
$NumOfSat = $bean_cellocator->getNumOfSat();
$LocQuality = $bean_cellocator->getLocQuality();
$EngineOn = $bean_cellocator->getEngineOn();
$ExtInputA = $bean_cellocator->getExtInputA();
$ExtInputB = $bean_cellocator->getExtInputB();
$ExtInputC = $bean_cellocator->getExtInputC();
$ExtInputD = $bean_cellocator->getExtInputD();
$ExtInputE = $bean_cellocator->getExtInputE();
$ExtInputF = $bean_cellocator->getExtInputF();
$VersionNum = $bean_cellocator->getVersionNum();
$IP = $bean_cellocator->getIP();
$InputVoltage = $bean_cellocator->getInputVoltage();
$BackBatVoltage = $bean_cellocator->getBackBatVoltage();
$GPSPDOP = $bean_cellocator->getGPSPDOP();
$GPSHEIGHT = $bean_cellocator->getGPSHEIGHT();
$NetworkTypeId = $bean_cellocator->getNetworkTypeId();
$InsertDate = $bean_cellocator->getInsertDate();
$UTCTime = $bean_cellocator->getUTCTime();
$DriverId = $bean_cellocator->getDriverId();
$TxReasonId = $bean_cellocator->getTxReasonId();
$AlertReason = $bean_cellocator->getAlertReason();
$Hibernation = $bean_cellocator->getHibernation();
$HRNetwork = $bean_cellocator->getHRNetwork();
$MileCounter = $bean_cellocator->getMileCounter();
$GPSMode1 = $bean_cellocator->getGPSMode1();
$GPSMode2 = $bean_cellocator->getGPSMode2();
$OutputA = $bean_cellocator->getOutputA();
$OutputB = $bean_cellocator->getOutputB();
$OutputC = $bean_cellocator->getOutputC();
$OutputD = $bean_cellocator->getOutputD();
$OptionalInput = $bean_cellocator->getOptionalInput();
$GPSCommStatus = $bean_cellocator->getGPSCommStatus();
$RawData = $bean_cellocator->getRawData();
$PLMN = $bean_cellocator->getPLMN();
$SN = $bean_cellocator->getSN();
$MessageType = $bean_cellocator->getMessageType();
$MsgProtocol = $bean_cellocator->getMsgProtocol();
$TripId = $bean_cellocator->getTripId();
$ManeuverId = $bean_cellocator->getManeuverId();
$ManeuverUsage = $bean_cellocator->getManeuverUsage();
$AccidentBuffer = $bean_cellocator->getAccidentBuffer();
$ItemId = $bean_cellocator->getItemId();

$this->query = "CALL usp_set_cellocator('$idrastreo','$RMUId','$CellDateTime','$GPSX','$GPSY','$GPSDateTime','$Speed','$Direction','$NumOfSat','$LocQuality','$EngineOn','$ExtInputA','$ExtInputB','$ExtInputC','$ExtInputD','$ExtInputE','$ExtInputF','$VersionNum','$IP','$InputVoltage','$BackBatVoltage','$GPSPDOP','$GPSHEIGHT','$NetworkTypeId','$InsertDate','$UTCTime','$DriverId','$TxReasonId','$AlertReason','$Hibernation','$HRNetwork','$MileCounter','$GPSMode1','$GPSMode2','$OutputA','$OutputB','$OutputC','$OutputD','$OptionalInput','$GPSCommStatus','$RawData','$PLMN','$SN','$MessageType','$MsgProtocol','$TripId','$ManeuverId','$ManeuverUsage','$AccidentBuffer','$ItemId')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_cellocator($bean_cellocator)
{
$idrastreo = $bean_cellocator->getIdrastreo();
$RMUId = $bean_cellocator->getRMUId();
$CellDateTime = $bean_cellocator->getCellDateTime();
$GPSX = $bean_cellocator->getGPSX();
$GPSY = $bean_cellocator->getGPSY();
$GPSDateTime = $bean_cellocator->getGPSDateTime();
$Speed = $bean_cellocator->getSpeed();
$Direction = $bean_cellocator->getDirection();
$NumOfSat = $bean_cellocator->getNumOfSat();
$LocQuality = $bean_cellocator->getLocQuality();
$EngineOn = $bean_cellocator->getEngineOn();
$ExtInputA = $bean_cellocator->getExtInputA();
$ExtInputB = $bean_cellocator->getExtInputB();
$ExtInputC = $bean_cellocator->getExtInputC();
$ExtInputD = $bean_cellocator->getExtInputD();
$ExtInputE = $bean_cellocator->getExtInputE();
$ExtInputF = $bean_cellocator->getExtInputF();
$VersionNum = $bean_cellocator->getVersionNum();
$IP = $bean_cellocator->getIP();
$InputVoltage = $bean_cellocator->getInputVoltage();
$BackBatVoltage = $bean_cellocator->getBackBatVoltage();
$GPSPDOP = $bean_cellocator->getGPSPDOP();
$GPSHEIGHT = $bean_cellocator->getGPSHEIGHT();
$NetworkTypeId = $bean_cellocator->getNetworkTypeId();
$InsertDate = $bean_cellocator->getInsertDate();
$UTCTime = $bean_cellocator->getUTCTime();
$DriverId = $bean_cellocator->getDriverId();
$TxReasonId = $bean_cellocator->getTxReasonId();
$AlertReason = $bean_cellocator->getAlertReason();
$Hibernation = $bean_cellocator->getHibernation();
$HRNetwork = $bean_cellocator->getHRNetwork();
$MileCounter = $bean_cellocator->getMileCounter();
$GPSMode1 = $bean_cellocator->getGPSMode1();
$GPSMode2 = $bean_cellocator->getGPSMode2();
$OutputA = $bean_cellocator->getOutputA();
$OutputB = $bean_cellocator->getOutputB();
$OutputC = $bean_cellocator->getOutputC();
$OutputD = $bean_cellocator->getOutputD();
$OptionalInput = $bean_cellocator->getOptionalInput();
$GPSCommStatus = $bean_cellocator->getGPSCommStatus();
$RawData = $bean_cellocator->getRawData();
$PLMN = $bean_cellocator->getPLMN();
$SN = $bean_cellocator->getSN();
$MessageType = $bean_cellocator->getMessageType();
$MsgProtocol = $bean_cellocator->getMsgProtocol();
$TripId = $bean_cellocator->getTripId();
$ManeuverId = $bean_cellocator->getManeuverId();
$ManeuverUsage = $bean_cellocator->getManeuverUsage();
$AccidentBuffer = $bean_cellocator->getAccidentBuffer();
$ItemId = $bean_cellocator->getItemId();

$this->query = "CALL usp_upd_cellocator('$idrastreo','$RMUId','$CellDateTime','$GPSX','$GPSY','$GPSDateTime','$Speed','$Direction','$NumOfSat','$LocQuality','$EngineOn','$ExtInputA','$ExtInputB','$ExtInputC','$ExtInputD','$ExtInputE','$ExtInputF','$VersionNum','$IP','$InputVoltage','$BackBatVoltage','$GPSPDOP','$GPSHEIGHT','$NetworkTypeId','$InsertDate','$UTCTime','$DriverId','$TxReasonId','$AlertReason','$Hibernation','$HRNetwork','$MileCounter','$GPSMode1','$GPSMode2','$OutputA','$OutputB','$OutputC','$OutputD','$OptionalInput','$GPSCommStatus','$RawData','$PLMN','$SN','$MessageType','$MsgProtocol','$TripId','$ManeuverId','$ManeuverUsage','$AccidentBuffer','$ItemId')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_cellocator_estado($bean_cellocator)
{
$idrastreo = $bean_cellocator->getIdrastreo();
$ItemId = $bean_cellocator->getItemId();

$this->query = "CALL usp_upd_cellocator_estado('$idrastreo','$ItemId')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_cellocator_by_idrastreo($bean_cellocator)
{
$idrastreo = $bean_cellocator->getIdrastreo();

$this->query = "CALL usp_get_cellocator_by_idrastreo('$idrastreo')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_cellocator()
{
$this->query = "CALL usp_get_cellocator()";
$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>