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
        return $rpta ;
    }

    function c_set_cellocator()
    {
        try
        {
            
            $inputs = json_decode(file_get_contents("php://input"));

            $idrastreo = $inputs->IdRastreo;
            $rmuid = $inputs->RMUId;
            $celldatetime = $inputs->CellDateTime;
            $gpsx = $inputs->GPSX;
            $gpsy = $inputs->GPSY;
            $gpsdatetime = $inputs->GPSDateTime;
            $speed = $inputs->Speed;
            $direction = $inputs->Direction;
            $numofsat = $inputs->NumOfSat;
            $locquality = $inputs->LocQuality;
            $engineon = $inputs->EngineOn;
            $extinputa = $inputs->ExtInputA;
            $extinputb = $inputs->ExtInputB;
            $extinputc = $inputs->ExtInputC;
            $extinputd = $inputs->ExtInputD;
            $extinpute = $inputs->ExtInputE;
            $extinputf = $inputs->ExtInputF;
            $versionnum = $inputs->VersionNum;
            $ip = $inputs->IP;
            $inputvoltage = $inputs->InputVoltage;
            $backbatvoltage = $inputs->BackBatVoltage;
            $gpspdop = $inputs->GPSPDOP;
            $gpsheight = $inputs->GPSHEIGHT;
            $networktypeid = $inputs->NetworkTypeId;
            $insertdate = $inputs->InsertDate;
            $utctime = $inputs->UTCTime;
            $driverid = $inputs->DriverId;
            $txreasonid = $inputs->TxReasonId;
            $alertreason = $inputs->AlertReason;
            $hibernation = $inputs->Hibernation;
            $hrnetwork = $inputs->HRNetwork;
            $milecounter = $inputs->MileCounter;
            $gpsmode1 = $inputs->GPSMode1;
            $gpsmode2 = $inputs->GPSMode2;
            $outputa = $inputs->OutputA;
            $outputb = $inputs->OutputB;
            $outputc = $inputs->OutputC;
            $outputd = $inputs->OutputD;
            $optionalinput = $inputs->OptionalInput;
            $gpscommstatus = $inputs->GPSCommStatus;
            $rawdata = $inputs->RawData;
            $plmn = $inputs->PLMN;
            $sn = $inputs->SN;
            $messagetype = $inputs->MessageType;
            $msgprotocol = $inputs->MsgProtocol;
            $tripid = $inputs->TripId;
            $maneuverid = $inputs->ManeuverId;
            $maneuverusage = $inputs->ManeuverUsage;
            $accidentbuffer = $inputs->AccidentBuffer;
            $itemid = $inputs->ItemId;
        
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
        return $rpta ;
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
        return $rpta ;
    }

    function c_upd_cellocator()
    {
        try
        {
            
            $inputs = json_decode(file_get_contents("php://input"));

            $idrastreo = $inputs->IdRastreo;
            $rmuid = $inputs->RMUId;
            $celldatetime = $inputs->CellDateTime;
            $gpsx = $inputs->GPSX;
            $gpsy = $inputs->GPSY;
            $gpsdatetime = $inputs->GPSDateTime;
            $speed = $inputs->Speed;
            $direction = $inputs->Direction;
            $numofsat = $inputs->NumOfSat;
            $locquality = $inputs->LocQuality;
            $engineon = $inputs->EngineOn;
            $extinputa = $inputs->ExtInputA;
            $extinputb = $inputs->ExtInputB;
            $extinputc = $inputs->ExtInputC;
            $extinputd = $inputs->ExtInputD;
            $extinpute = $inputs->ExtInputE;
            $extinputf = $inputs->ExtInputF;
            $versionnum = $inputs->VersionNum;
            $ip = $inputs->IP;
            $inputvoltage = $inputs->InputVoltage;
            $backbatvoltage = $inputs->BackBatVoltage;
            $gpspdop = $inputs->GPSPDOP;
            $gpsheight = $inputs->GPSHEIGHT;
            $networktypeid = $inputs->NetworkTypeId;
            $insertdate = $inputs->InsertDate;
            $utctime = $inputs->UTCTime;
            $driverid = $inputs->DriverId;
            $txreasonid = $inputs->TxReasonId;
            $alertreason = $inputs->AlertReason;
            $hibernation = $inputs->Hibernation;
            $hrnetwork = $inputs->HRNetwork;
            $milecounter = $inputs->MileCounter;
            $gpsmode1 = $inputs->GPSMode1;
            $gpsmode2 = $inputs->GPSMode2;
            $outputa = $inputs->OutputA;
            $outputb = $inputs->OutputB;
            $outputc = $inputs->OutputC;
            $outputd = $inputs->OutputD;
            $optionalinput = $inputs->OptionalInput;
            $gpscommstatus = $inputs->GPSCommStatus;
            $rawdata = $inputs->RawData;
            $plmn = $inputs->PLMN;
            $sn = $inputs->SN;
            $messagetype = $inputs->MessageType;
            $msgprotocol = $inputs->MsgProtocol;
            $tripid = $inputs->TripId;
            $maneuverid = $inputs->ManeuverId;
            $maneuverusage = $inputs->ManeuverUsage;
            $accidentbuffer = $inputs->AccidentBuffer;
            $itemid = $inputs->ItemId;
        
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
        return $rpta ;
    }

}
