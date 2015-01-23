<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
    header('content-type: application/json; charset=utf-8');
    require_once '../../autoload.php';

if(isset($_GET["accion"]))
{
    $evento = $_GET["accion"];
}
elseif (isset($_POST))
{
    $inputs = json_decode(file_get_contents("php://input"));
    $evento = $inputs->accion;
}

switch($evento)
{
    case "list":
        $cellocatorCtrl = new CellocatorController() ;
        $data = $cellocatorCtrl->get_cellocator() ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "set":

        $idrastreo      = $inputs->IdRastreo;
        $rmuid          = $inputs->RMUId;
        $celldatetime   = $inputs->CellDateTime;
        $gpsx           = $inputs->GPSX;
        $gpsy           = $inputs->GPSY;
        $gpsdatetime    = $inputs->GPSDateTime;
        $speed          = $inputs->Speed;
        $direction      = $inputs->Direction;
        $numofsat       = $inputs->NumOfSat;
        $locquality     = $inputs->LocQuality;
        $engineon       = $inputs->EngineOn;
        $extinputa      = $inputs->ExtInputA;
        $extinputb      = $inputs->ExtInputB;
        $extinputc      = $inputs->ExtInputC;
        $extinputd      = $inputs->ExtInputD;
        $extinpute      = $inputs->ExtInputE;
        $extinputf      = $inputs->ExtInputF;
        $versionnum     = $inputs->VersionNum;
        $ip             = $inputs->IP;
        $inputvoltage   = $inputs->InputVoltage;
        $backbatvoltage = $inputs->BackBatVoltage;
        $gpspdop        = $inputs->GPSPDOP;
        $gpsheight      = $inputs->GPSHEIGHT;
        $networktypeid  = $inputs->NetworkTypeId;
        $insertdate     = $inputs->InsertDate;
        $utctime        = $inputs->UTCTime;
        $driverid       = $inputs->DriverId;
        $txreasonid     = $inputs->TxReasonId;
        $alertreason    = $inputs->AlertReason;
        $hibernation    = $inputs->Hibernation;
        $hrnetwork      = $inputs->HRNetwork;
        $milecounter    = $inputs->MileCounter;
        $gpsmode1       = $inputs->GPSMode1;
        $gpsmode2       = $inputs->GPSMode2;
        $outputa        = $inputs->OutputA;
        $outputb        = $inputs->OutputB;
        $outputc        = $inputs->OutputC;
        $outputd        = $inputs->OutputD;
        $optionalinput  = $inputs->OptionalInput;
        $gpscommstatus  = $inputs->GPSCommStatus;
        $rawdata        = $inputs->RawData;
        $plmn           = $inputs->PLMN;
        $sn             = $inputs->SN;
        $messagetype    = $inputs->MessageType;
        $msgprotocol    = $inputs->MsgProtocol;
        $tripid         = $inputs->TripId;
        $maneuverid     = $inputs->ManeuverId;
        $maneuverusage  = $inputs->ManeuverUsage;
        $accidentbuffer = $inputs->AccidentBuffer;
        $itemid         = $inputs->ItemId;

        $params = array(
           $idrastreo,
           $rmuid,
           $celldatetime,
           $gpsx,
           $gpsy,
           $gpsdatetime,
           $speed,
           $direction,
           $numofsat,
           $locquality,
           $engineon,
           $extinputa,
           $extinputb,
           $extinputc,
           $extinputd,
           $extinpute,
           $extinputf,
           $versionnum,
           $ip,
           $inputvoltage,
           $backbatvoltage,
           $gpspdop,
           $gpsheight,
           $networktypeid,
           $insertdate,
           $utctime,
           $driverid,
           $txreasonid,
           $alertreason,
           $hibernation,
           $hrnetwork,
           $milecounter,
           $gpsmode1,
           $gpsmode2,
           $outputa,
           $outputb,
           $outputc,
           $outputd,
           $optionalinput,
           $gpscommstatus,
           $rawdata,
           $plmn,
           $sn,
           $messagetype,
           $msgprotocol,
           $tripid,
           $maneuverid,
           $maneuverusage,
           $accidentbuffer,
           $itemid,
        ) ;

        $cellocatorCtrl = new CellocatorController() ;
        $data = $cellocatorCtrl->set_cellocator($params) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "getid":
        $id = $_GET["id"] ;
        $cellocatorCtrl = new CellocatorController() ;
        $data = $cellocatorCtrl->get_cellocator_idcellocator( $id) ;
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;



}
