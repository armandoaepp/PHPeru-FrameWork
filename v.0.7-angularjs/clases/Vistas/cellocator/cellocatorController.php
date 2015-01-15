<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class cellocatorController
{
    function c_get_cellocator()
    {
        try
        {
            $objCellocator  = new ClsCellocator();

            $data = $objCellocator->get_cellocator() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_set_cellocator()
    {
        try
        {

            $inputs = json_decode(file_get_contents("php://input"));

            $idrastreo = Helpers::validate($inputs->IdRastreo);
            $rmuid = Helpers::validate($inputs->RMUId);
            $celldatetime = Helpers::validate($inputs->CellDateTime);
            $gpsx = Helpers::validate($inputs->GPSX);
            $gpsy = Helpers::validate($inputs->GPSY);
            $gpsdatetime = Helpers::validate($inputs->GPSDateTime);
            $speed = Helpers::validate($inputs->Speed);
            $direction = Helpers::validate($inputs->Direction);
            $numofsat = Helpers::validate($inputs->NumOfSat);
            $locquality = Helpers::validate($inputs->LocQuality);
            $engineon = Helpers::validate($inputs->EngineOn);
            $extinputa = Helpers::validate($inputs->ExtInputA);
            $extinputb = Helpers::validate($inputs->ExtInputB);
            $extinputc = Helpers::validate($inputs->ExtInputC);
            $extinputd = Helpers::validate($inputs->ExtInputD);
            $extinpute = Helpers::validate($inputs->ExtInputE);
            $extinputf = Helpers::validate($inputs->ExtInputF);
            $versionnum = Helpers::validate($inputs->VersionNum);
            $ip = Helpers::validate($inputs->IP);
            $inputvoltage = Helpers::validate($inputs->InputVoltage);
            $backbatvoltage = Helpers::validate($inputs->BackBatVoltage);
            $gpspdop = Helpers::validate($inputs->GPSPDOP);
            $gpsheight = Helpers::validate($inputs->GPSHEIGHT);
            $networktypeid = Helpers::validate($inputs->NetworkTypeId);
            $insertdate = Helpers::validate($inputs->InsertDate);
            $utctime = Helpers::validate($inputs->UTCTime);
            $driverid = Helpers::validate($inputs->DriverId);
            $txreasonid = Helpers::validate($inputs->TxReasonId);
            $alertreason = Helpers::validate($inputs->AlertReason);
            $hibernation = Helpers::validate($inputs->Hibernation);
            $hrnetwork = Helpers::validate($inputs->HRNetwork);
            $milecounter = Helpers::validate($inputs->MileCounter);
            $gpsmode1 = Helpers::validate($inputs->GPSMode1);
            $gpsmode2 = Helpers::validate($inputs->GPSMode2);
            $outputa = Helpers::validate($inputs->OutputA);
            $outputb = Helpers::validate($inputs->OutputB);
            $outputc = Helpers::validate($inputs->OutputC);
            $outputd = Helpers::validate($inputs->OutputD);
            $optionalinput = Helpers::validate($inputs->OptionalInput);
            $gpscommstatus = Helpers::validate($inputs->GPSCommStatus);
            $rawdata = Helpers::validate($inputs->RawData);
            $plmn = Helpers::validate($inputs->PLMN);
            $sn = Helpers::validate($inputs->SN);
            $messagetype = Helpers::validate($inputs->MessageType);
            $msgprotocol = Helpers::validate($inputs->MsgProtocol);
            $tripid = Helpers::validate($inputs->TripId);
            $maneuverid = Helpers::validate($inputs->ManeuverId);
            $maneuverusage = Helpers::validate($inputs->ManeuverUsage);
            $accidentbuffer = Helpers::validate($inputs->AccidentBuffer);
            $itemid = Helpers::validate($inputs->ItemId);

            $objCellocator  = new ClsCellocator();
            $bean_cellocator = new BeanCellocator();

            $bean_cellocator->setIdRastreo($idrastreo);
            $bean_cellocator->setRMUId($rmuid);
            $bean_cellocator->setCellDateTime($celldatetime);
            $bean_cellocator->setGPSX($gpsx);
            $bean_cellocator->setGPSY($gpsy);
            $bean_cellocator->setGPSDateTime($gpsdatetime);
            $bean_cellocator->setSpeed($speed);
            $bean_cellocator->setDirection($direction);
            $bean_cellocator->setNumOfSat($numofsat);
            $bean_cellocator->setLocQuality($locquality);
            $bean_cellocator->setEngineOn($engineon);
            $bean_cellocator->setExtInputA($extinputa);
            $bean_cellocator->setExtInputB($extinputb);
            $bean_cellocator->setExtInputC($extinputc);
            $bean_cellocator->setExtInputD($extinputd);
            $bean_cellocator->setExtInputE($extinpute);
            $bean_cellocator->setExtInputF($extinputf);
            $bean_cellocator->setVersionNum($versionnum);
            $bean_cellocator->setIP($ip);
            $bean_cellocator->setInputVoltage($inputvoltage);
            $bean_cellocator->setBackBatVoltage($backbatvoltage);
            $bean_cellocator->setGPSPDOP($gpspdop);
            $bean_cellocator->setGPSHEIGHT($gpsheight);
            $bean_cellocator->setNetworkTypeId($networktypeid);
            $bean_cellocator->setInsertDate($insertdate);
            $bean_cellocator->setUTCTime($utctime);
            $bean_cellocator->setDriverId($driverid);
            $bean_cellocator->setTxReasonId($txreasonid);
            $bean_cellocator->setAlertReason($alertreason);
            $bean_cellocator->setHibernation($hibernation);
            $bean_cellocator->setHRNetwork($hrnetwork);
            $bean_cellocator->setMileCounter($milecounter);
            $bean_cellocator->setGPSMode1($gpsmode1);
            $bean_cellocator->setGPSMode2($gpsmode2);
            $bean_cellocator->setOutputA($outputa);
            $bean_cellocator->setOutputB($outputb);
            $bean_cellocator->setOutputC($outputc);
            $bean_cellocator->setOutputD($outputd);
            $bean_cellocator->setOptionalInput($optionalinput);
            $bean_cellocator->setGPSCommStatus($gpscommstatus);
            $bean_cellocator->setRawData($rawdata);
            $bean_cellocator->setPLMN($plmn);
            $bean_cellocator->setSN($sn);
            $bean_cellocator->setMessageType($messagetype);
            $bean_cellocator->setMsgProtocol($msgprotocol);
            $bean_cellocator->setTripId($tripid);
            $bean_cellocator->setManeuverId($maneuverid);
            $bean_cellocator->setManeuverUsage($maneuverusage);
            $bean_cellocator->setAccidentBuffer($accidentbuffer);
            $bean_cellocator->setItemId($itemid);

            $data = $objCellocator->get_cellocator($beanCellocator) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_get_cellocator_by_id($id)
    {
        try
        {
            $objCellocator  = new ClsCellocator();
            $bean_cellocator = new BeanCellocator();

            $bean_cellocator->setId($id);
            $data = $objCellocator->get_cellocator() ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

    function c_upd_cellocator()
    {
        try
        {

            $inputs = json_decode(file_get_contents("php://input"));

            $idrastreo = Helpers::validate($inputs->IdRastreo);
            $rmuid = Helpers::validate($inputs->RMUId);
            $celldatetime = Helpers::validate($inputs->CellDateTime);
            $gpsx = Helpers::validate($inputs->GPSX);
            $gpsy = Helpers::validate($inputs->GPSY);
            $gpsdatetime = Helpers::validate($inputs->GPSDateTime);
            $speed = Helpers::validate($inputs->Speed);
            $direction = Helpers::validate($inputs->Direction);
            $numofsat = Helpers::validate($inputs->NumOfSat);
            $locquality = Helpers::validate($inputs->LocQuality);
            $engineon = Helpers::validate($inputs->EngineOn);
            $extinputa = Helpers::validate($inputs->ExtInputA);
            $extinputb = Helpers::validate($inputs->ExtInputB);
            $extinputc = Helpers::validate($inputs->ExtInputC);
            $extinputd = Helpers::validate($inputs->ExtInputD);
            $extinpute = Helpers::validate($inputs->ExtInputE);
            $extinputf = Helpers::validate($inputs->ExtInputF);
            $versionnum = Helpers::validate($inputs->VersionNum);
            $ip = Helpers::validate($inputs->IP);
            $inputvoltage = Helpers::validate($inputs->InputVoltage);
            $backbatvoltage = Helpers::validate($inputs->BackBatVoltage);
            $gpspdop = Helpers::validate($inputs->GPSPDOP);
            $gpsheight = Helpers::validate($inputs->GPSHEIGHT);
            $networktypeid = Helpers::validate($inputs->NetworkTypeId);
            $insertdate = Helpers::validate($inputs->InsertDate);
            $utctime = Helpers::validate($inputs->UTCTime);
            $driverid = Helpers::validate($inputs->DriverId);
            $txreasonid = Helpers::validate($inputs->TxReasonId);
            $alertreason = Helpers::validate($inputs->AlertReason);
            $hibernation = Helpers::validate($inputs->Hibernation);
            $hrnetwork = Helpers::validate($inputs->HRNetwork);
            $milecounter = Helpers::validate($inputs->MileCounter);
            $gpsmode1 = Helpers::validate($inputs->GPSMode1);
            $gpsmode2 = Helpers::validate($inputs->GPSMode2);
            $outputa = Helpers::validate($inputs->OutputA);
            $outputb = Helpers::validate($inputs->OutputB);
            $outputc = Helpers::validate($inputs->OutputC);
            $outputd = Helpers::validate($inputs->OutputD);
            $optionalinput = Helpers::validate($inputs->OptionalInput);
            $gpscommstatus = Helpers::validate($inputs->GPSCommStatus);
            $rawdata = Helpers::validate($inputs->RawData);
            $plmn = Helpers::validate($inputs->PLMN);
            $sn = Helpers::validate($inputs->SN);
            $messagetype = Helpers::validate($inputs->MessageType);
            $msgprotocol = Helpers::validate($inputs->MsgProtocol);
            $tripid = Helpers::validate($inputs->TripId);
            $maneuverid = Helpers::validate($inputs->ManeuverId);
            $maneuverusage = Helpers::validate($inputs->ManeuverUsage);
            $accidentbuffer = Helpers::validate($inputs->AccidentBuffer);
            $itemid = Helpers::validate($inputs->ItemId);

            $objCellocator  = new ClsCellocator();
            $bean_cellocator = new BeanCellocator();

            $bean_cellocator->setIdRastreo($idrastreo);
            $bean_cellocator->setRMUId($rmuid);
            $bean_cellocator->setCellDateTime($celldatetime);
            $bean_cellocator->setGPSX($gpsx);
            $bean_cellocator->setGPSY($gpsy);
            $bean_cellocator->setGPSDateTime($gpsdatetime);
            $bean_cellocator->setSpeed($speed);
            $bean_cellocator->setDirection($direction);
            $bean_cellocator->setNumOfSat($numofsat);
            $bean_cellocator->setLocQuality($locquality);
            $bean_cellocator->setEngineOn($engineon);
            $bean_cellocator->setExtInputA($extinputa);
            $bean_cellocator->setExtInputB($extinputb);
            $bean_cellocator->setExtInputC($extinputc);
            $bean_cellocator->setExtInputD($extinputd);
            $bean_cellocator->setExtInputE($extinpute);
            $bean_cellocator->setExtInputF($extinputf);
            $bean_cellocator->setVersionNum($versionnum);
            $bean_cellocator->setIP($ip);
            $bean_cellocator->setInputVoltage($inputvoltage);
            $bean_cellocator->setBackBatVoltage($backbatvoltage);
            $bean_cellocator->setGPSPDOP($gpspdop);
            $bean_cellocator->setGPSHEIGHT($gpsheight);
            $bean_cellocator->setNetworkTypeId($networktypeid);
            $bean_cellocator->setInsertDate($insertdate);
            $bean_cellocator->setUTCTime($utctime);
            $bean_cellocator->setDriverId($driverid);
            $bean_cellocator->setTxReasonId($txreasonid);
            $bean_cellocator->setAlertReason($alertreason);
            $bean_cellocator->setHibernation($hibernation);
            $bean_cellocator->setHRNetwork($hrnetwork);
            $bean_cellocator->setMileCounter($milecounter);
            $bean_cellocator->setGPSMode1($gpsmode1);
            $bean_cellocator->setGPSMode2($gpsmode2);
            $bean_cellocator->setOutputA($outputa);
            $bean_cellocator->setOutputB($outputb);
            $bean_cellocator->setOutputC($outputc);
            $bean_cellocator->setOutputD($outputd);
            $bean_cellocator->setOptionalInput($optionalinput);
            $bean_cellocator->setGPSCommStatus($gpscommstatus);
            $bean_cellocator->setRawData($rawdata);
            $bean_cellocator->setPLMN($plmn);
            $bean_cellocator->setSN($sn);
            $bean_cellocator->setMessageType($messagetype);
            $bean_cellocator->setMsgProtocol($msgprotocol);
            $bean_cellocator->setTripId($tripid);
            $bean_cellocator->setManeuverId($maneuverid);
            $bean_cellocator->setManeuverUsage($maneuverusage);
            $bean_cellocator->setAccidentBuffer($accidentbuffer);
            $bean_cellocator->setItemId($itemid);

            $data = $objCellocator->upd_cellocator($beanCellocator) ;
            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);
        }
        catch (Exception $e)
        {
            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());
        }
    }

}
