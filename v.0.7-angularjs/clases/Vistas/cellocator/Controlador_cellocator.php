<?php
include_once "../../Modelado/Modelo_cellocator.php"; 
include_once "../validacion.php"; 
function CRegistrar_cellocator(){
$encellocator=new Clase_cellocator();
$encellocator->setidrastreo(validar($_POST["idrastreo_"]));
$encellocator->setRMUId(validar($_POST["RMUId_"]));
$encellocator->setCellDateTime(validar($_POST["CellDateTime_"]));
$encellocator->setGPSX(validar($_POST["GPSX_"]));
$encellocator->setGPSY(validar($_POST["GPSY_"]));
$encellocator->setGPSDateTime(validar($_POST["GPSDateTime_"]));
$encellocator->setSpeed(validar($_POST["Speed_"]));
$encellocator->setDirection(validar($_POST["Direction_"]));
$encellocator->setNumOfSat(validar($_POST["NumOfSat_"]));
$encellocator->setLocQuality(validar($_POST["LocQuality_"]));
$encellocator->setEngineOn(validar($_POST["EngineOn_"]));
$encellocator->setExtInputA(validar($_POST["ExtInputA_"]));
$encellocator->setExtInputB(validar($_POST["ExtInputB_"]));
$encellocator->setExtInputC(validar($_POST["ExtInputC_"]));
$encellocator->setExtInputD(validar($_POST["ExtInputD_"]));
$encellocator->setExtInputE(validar($_POST["ExtInputE_"]));
$encellocator->setExtInputF(validar($_POST["ExtInputF_"]));
$encellocator->setVersionNum(validar($_POST["VersionNum_"]));
$encellocator->setIP(validar($_POST["IP_"]));
$encellocator->setInputVoltage(validar($_POST["InputVoltage_"]));
$encellocator->setBackBatVoltage(validar($_POST["BackBatVoltage_"]));
$encellocator->setGPSPDOP(validar($_POST["GPSPDOP_"]));
$encellocator->setGPSHEIGHT(validar($_POST["GPSHEIGHT_"]));
$encellocator->setNetworkTypeId(validar($_POST["NetworkTypeId_"]));
$encellocator->setInsertDate(validar($_POST["InsertDate_"]));
$encellocator->setUTCTime(validar($_POST["UTCTime_"]));
$encellocator->setDriverId(validar($_POST["DriverId_"]));
$encellocator->setTxReasonId(validar($_POST["TxReasonId_"]));
$encellocator->setAlertReason(validar($_POST["AlertReason_"]));
$encellocator->setHibernation(validar($_POST["Hibernation_"]));
$encellocator->setHRNetwork(validar($_POST["HRNetwork_"]));
$encellocator->setMileCounter(validar($_POST["MileCounter_"]));
$encellocator->setGPSMode1(validar($_POST["GPSMode1_"]));
$encellocator->setGPSMode2(validar($_POST["GPSMode2_"]));
$encellocator->setOutputA(validar($_POST["OutputA_"]));
$encellocator->setOutputB(validar($_POST["OutputB_"]));
$encellocator->setOutputC(validar($_POST["OutputC_"]));
$encellocator->setOutputD(validar($_POST["OutputD_"]));
$encellocator->setOptionalInput(validar($_POST["OptionalInput_"]));
$encellocator->setGPSCommStatus(validar($_POST["GPSCommStatus_"]));
$encellocator->setRawData(validar($_POST["RawData_"]));
$encellocator->setPLMN(validar($_POST["PLMN_"]));
$encellocator->setSN(validar($_POST["SN_"]));
$encellocator->setMessageType(validar($_POST["MessageType_"]));
$encellocator->setMsgProtocol(validar($_POST["MsgProtocol_"]));
$encellocator->setTripId(validar($_POST["TripId_"]));
$encellocator->setManeuverId(validar($_POST["ManeuverId_"]));
$encellocator->setManeuverUsage(validar($_POST["ManeuverUsage_"]));
$encellocator->setAccidentBuffer(validar($_POST["AccidentBuffer_"]));
$encellocator->setItemId(validar($_POST["ItemId_"]));
$rpta=$encellocator->Insertar_cellocator();
return $rpta;
}

function CActualizar_cellocator(){
$encellocator=new Clase_cellocator();
$encellocator->setidrastreo(validar($_POST["idrastreo_"]));
$encellocator->setRMUId(validar($_POST["RMUId_"]));
$encellocator->setCellDateTime(validar($_POST["CellDateTime_"]));
$encellocator->setGPSX(validar($_POST["GPSX_"]));
$encellocator->setGPSY(validar($_POST["GPSY_"]));
$encellocator->setGPSDateTime(validar($_POST["GPSDateTime_"]));
$encellocator->setSpeed(validar($_POST["Speed_"]));
$encellocator->setDirection(validar($_POST["Direction_"]));
$encellocator->setNumOfSat(validar($_POST["NumOfSat_"]));
$encellocator->setLocQuality(validar($_POST["LocQuality_"]));
$encellocator->setEngineOn(validar($_POST["EngineOn_"]));
$encellocator->setExtInputA(validar($_POST["ExtInputA_"]));
$encellocator->setExtInputB(validar($_POST["ExtInputB_"]));
$encellocator->setExtInputC(validar($_POST["ExtInputC_"]));
$encellocator->setExtInputD(validar($_POST["ExtInputD_"]));
$encellocator->setExtInputE(validar($_POST["ExtInputE_"]));
$encellocator->setExtInputF(validar($_POST["ExtInputF_"]));
$encellocator->setVersionNum(validar($_POST["VersionNum_"]));
$encellocator->setIP(validar($_POST["IP_"]));
$encellocator->setInputVoltage(validar($_POST["InputVoltage_"]));
$encellocator->setBackBatVoltage(validar($_POST["BackBatVoltage_"]));
$encellocator->setGPSPDOP(validar($_POST["GPSPDOP_"]));
$encellocator->setGPSHEIGHT(validar($_POST["GPSHEIGHT_"]));
$encellocator->setNetworkTypeId(validar($_POST["NetworkTypeId_"]));
$encellocator->setInsertDate(validar($_POST["InsertDate_"]));
$encellocator->setUTCTime(validar($_POST["UTCTime_"]));
$encellocator->setDriverId(validar($_POST["DriverId_"]));
$encellocator->setTxReasonId(validar($_POST["TxReasonId_"]));
$encellocator->setAlertReason(validar($_POST["AlertReason_"]));
$encellocator->setHibernation(validar($_POST["Hibernation_"]));
$encellocator->setHRNetwork(validar($_POST["HRNetwork_"]));
$encellocator->setMileCounter(validar($_POST["MileCounter_"]));
$encellocator->setGPSMode1(validar($_POST["GPSMode1_"]));
$encellocator->setGPSMode2(validar($_POST["GPSMode2_"]));
$encellocator->setOutputA(validar($_POST["OutputA_"]));
$encellocator->setOutputB(validar($_POST["OutputB_"]));
$encellocator->setOutputC(validar($_POST["OutputC_"]));
$encellocator->setOutputD(validar($_POST["OutputD_"]));
$encellocator->setOptionalInput(validar($_POST["OptionalInput_"]));
$encellocator->setGPSCommStatus(validar($_POST["GPSCommStatus_"]));
$encellocator->setRawData(validar($_POST["RawData_"]));
$encellocator->setPLMN(validar($_POST["PLMN_"]));
$encellocator->setSN(validar($_POST["SN_"]));
$encellocator->setMessageType(validar($_POST["MessageType_"]));
$encellocator->setMsgProtocol(validar($_POST["MsgProtocol_"]));
$encellocator->setTripId(validar($_POST["TripId_"]));
$encellocator->setManeuverId(validar($_POST["ManeuverId_"]));
$encellocator->setManeuverUsage(validar($_POST["ManeuverUsage_"]));
$encellocator->setAccidentBuffer(validar($_POST["AccidentBuffer_"]));
$encellocator->setItemId(validar($_POST["ItemId_"]));
$rpta=$encellocator->Actualizar_cellocator();
return $rpta;
}

function CEliminar_cellocator(){
$encellocator=new Clase_cellocator();
$encellocator->setidrastreo($_GET["id"]);
$rpta=$encellocator->Eliminar_cellocator();
return $rpta;
}

function CRecuperar_cellocator(){
$encellocator=new Clase_cellocator();
$encellocator->setidrastreo($_GET["id"]);
$rpta=$encellocator->Recuperar_cellocator();
return $rpta;
}

function CListar_cellocator(){
$encellocator=new Clase_cellocator();
$rpta=$encellocator->Listar_cellocator();
return $rpta;
}

function CListadoSimple_cellocator(){
$encellocator=new Clase_cellocator();
$rpta=$encellocator->ListadoSimple_cellocator();
return $rpta;
}

function CBuscar_cellocator($id){
$encellocator=new Clase_cellocator();
$encellocator->setidrastreo($id);
$rpta=$encellocator->Buscar_cellocator();
return $rpta;}
