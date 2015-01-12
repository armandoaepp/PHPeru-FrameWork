<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_cellocator.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
  $titulo= "Nuevo cellocator";
  $rpta=CRegistrar_cellocator();
  $contenido="Registrar_cellocator.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_cellocator();
  $rptamo=CBuscar_cellocator($_GET["id"]);
  $idrastreo=$rptamo["cuerpo"][0]["idrastreo"];
  $RMUId=$rptamo["cuerpo"][0]["RMUId"];
  $CellDateTime=$rptamo["cuerpo"][0]["CellDateTime"];
  $GPSX=$rptamo["cuerpo"][0]["GPSX"];
  $GPSY=$rptamo["cuerpo"][0]["GPSY"];
  $GPSDateTime=$rptamo["cuerpo"][0]["GPSDateTime"];
  $Speed=$rptamo["cuerpo"][0]["Speed"];
  $Direction=$rptamo["cuerpo"][0]["Direction"];
  $NumOfSat=$rptamo["cuerpo"][0]["NumOfSat"];
  $LocQuality=$rptamo["cuerpo"][0]["LocQuality"];
  $EngineOn=$rptamo["cuerpo"][0]["EngineOn"];
  $ExtInputA=$rptamo["cuerpo"][0]["ExtInputA"];
  $ExtInputB=$rptamo["cuerpo"][0]["ExtInputB"];
  $ExtInputC=$rptamo["cuerpo"][0]["ExtInputC"];
  $ExtInputD=$rptamo["cuerpo"][0]["ExtInputD"];
  $ExtInputE=$rptamo["cuerpo"][0]["ExtInputE"];
  $ExtInputF=$rptamo["cuerpo"][0]["ExtInputF"];
  $VersionNum=$rptamo["cuerpo"][0]["VersionNum"];
  $IP=$rptamo["cuerpo"][0]["IP"];
  $InputVoltage=$rptamo["cuerpo"][0]["InputVoltage"];
  $BackBatVoltage=$rptamo["cuerpo"][0]["BackBatVoltage"];
  $GPSPDOP=$rptamo["cuerpo"][0]["GPSPDOP"];
  $GPSHEIGHT=$rptamo["cuerpo"][0]["GPSHEIGHT"];
  $NetworkTypeId=$rptamo["cuerpo"][0]["NetworkTypeId"];
  $InsertDate=$rptamo["cuerpo"][0]["InsertDate"];
  $UTCTime=$rptamo["cuerpo"][0]["UTCTime"];
  $DriverId=$rptamo["cuerpo"][0]["DriverId"];
  $TxReasonId=$rptamo["cuerpo"][0]["TxReasonId"];
  $AlertReason=$rptamo["cuerpo"][0]["AlertReason"];
  $Hibernation=$rptamo["cuerpo"][0]["Hibernation"];
  $HRNetwork=$rptamo["cuerpo"][0]["HRNetwork"];
  $MileCounter=$rptamo["cuerpo"][0]["MileCounter"];
  $GPSMode1=$rptamo["cuerpo"][0]["GPSMode1"];
  $GPSMode2=$rptamo["cuerpo"][0]["GPSMode2"];
  $OutputA=$rptamo["cuerpo"][0]["OutputA"];
  $OutputB=$rptamo["cuerpo"][0]["OutputB"];
  $OutputC=$rptamo["cuerpo"][0]["OutputC"];
  $OutputD=$rptamo["cuerpo"][0]["OutputD"];
  $OptionalInput=$rptamo["cuerpo"][0]["OptionalInput"];
  $GPSCommStatus=$rptamo["cuerpo"][0]["GPSCommStatus"];
  $RawData=$rptamo["cuerpo"][0]["RawData"];
  $PLMN=$rptamo["cuerpo"][0]["PLMN"];
  $SN=$rptamo["cuerpo"][0]["SN"];
  $MessageType=$rptamo["cuerpo"][0]["MessageType"];
  $MsgProtocol=$rptamo["cuerpo"][0]["MsgProtocol"];
  $TripId=$rptamo["cuerpo"][0]["TripId"];
  $ManeuverId=$rptamo["cuerpo"][0]["ManeuverId"];
  $ManeuverUsage=$rptamo["cuerpo"][0]["ManeuverUsage"];
  $AccidentBuffer=$rptamo["cuerpo"][0]["AccidentBuffer"];
  $ItemId=$rptamo["cuerpo"][0]["ItemId"];
  $contenido="Actualizar_cellocator.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_cellocator();
  header("Location: ../cellocator");
break;
case "Recuperar":
  $rpta=CRecuperar_cellocator();
break;
case "Listar":
       $titulo="Listar cellocator";
       $data=CListar_cellocator();
       if(isset($_GET["pagina"])){
           $page=$_GET["pagina"];}
         else{$page=1;}
/*
      //para Ordenar Datos 
       if(isset($_GET["orden"])) {
          $orden=$_GET["orden"];
          }else{  $orden=-1;}// no ordenar po defecto
     //para Buscar Datos 
        if(isset($_POST["busca"])){ //viene del frm 
              $busca=$_POST["busca"];
         }else if(isset($_GET["busca"])){// viene de la pagina o del ordenar
              $busca=$_GET["busca"];
         }else{
         $busca=""; }
*/
      $Listar_cellocator=$cix->ImprimeTableP("tablacellocator",$data,"?","?",10,$page,5);
   // $Listar_cellocator=$cix->ImprimeTablePOB("tablacellocator",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_cellocator.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_cellocator=CListadoSimple_cellocator();
break;
case "Buscar":
 $rpta=CBuscar_cellocator();
break;
case "Nuevo":
 $titulo= "Nuevo cellocator";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_cellocator.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_cellocator($_GET["id"]);
 $idrastreo=$rptamo["cuerpo"][0]["idrastreo"];
 $RMUId=$rptamo["cuerpo"][0]["RMUId"];
 $CellDateTime=$rptamo["cuerpo"][0]["CellDateTime"];
 $GPSX=$rptamo["cuerpo"][0]["GPSX"];
 $GPSY=$rptamo["cuerpo"][0]["GPSY"];
 $GPSDateTime=$rptamo["cuerpo"][0]["GPSDateTime"];
 $Speed=$rptamo["cuerpo"][0]["Speed"];
 $Direction=$rptamo["cuerpo"][0]["Direction"];
 $NumOfSat=$rptamo["cuerpo"][0]["NumOfSat"];
 $LocQuality=$rptamo["cuerpo"][0]["LocQuality"];
 $EngineOn=$rptamo["cuerpo"][0]["EngineOn"];
 $ExtInputA=$rptamo["cuerpo"][0]["ExtInputA"];
 $ExtInputB=$rptamo["cuerpo"][0]["ExtInputB"];
 $ExtInputC=$rptamo["cuerpo"][0]["ExtInputC"];
 $ExtInputD=$rptamo["cuerpo"][0]["ExtInputD"];
 $ExtInputE=$rptamo["cuerpo"][0]["ExtInputE"];
 $ExtInputF=$rptamo["cuerpo"][0]["ExtInputF"];
 $VersionNum=$rptamo["cuerpo"][0]["VersionNum"];
 $IP=$rptamo["cuerpo"][0]["IP"];
 $InputVoltage=$rptamo["cuerpo"][0]["InputVoltage"];
 $BackBatVoltage=$rptamo["cuerpo"][0]["BackBatVoltage"];
 $GPSPDOP=$rptamo["cuerpo"][0]["GPSPDOP"];
 $GPSHEIGHT=$rptamo["cuerpo"][0]["GPSHEIGHT"];
 $NetworkTypeId=$rptamo["cuerpo"][0]["NetworkTypeId"];
 $InsertDate=$rptamo["cuerpo"][0]["InsertDate"];
 $UTCTime=$rptamo["cuerpo"][0]["UTCTime"];
 $DriverId=$rptamo["cuerpo"][0]["DriverId"];
 $TxReasonId=$rptamo["cuerpo"][0]["TxReasonId"];
 $AlertReason=$rptamo["cuerpo"][0]["AlertReason"];
 $Hibernation=$rptamo["cuerpo"][0]["Hibernation"];
 $HRNetwork=$rptamo["cuerpo"][0]["HRNetwork"];
 $MileCounter=$rptamo["cuerpo"][0]["MileCounter"];
 $GPSMode1=$rptamo["cuerpo"][0]["GPSMode1"];
 $GPSMode2=$rptamo["cuerpo"][0]["GPSMode2"];
 $OutputA=$rptamo["cuerpo"][0]["OutputA"];
 $OutputB=$rptamo["cuerpo"][0]["OutputB"];
 $OutputC=$rptamo["cuerpo"][0]["OutputC"];
 $OutputD=$rptamo["cuerpo"][0]["OutputD"];
 $OptionalInput=$rptamo["cuerpo"][0]["OptionalInput"];
 $GPSCommStatus=$rptamo["cuerpo"][0]["GPSCommStatus"];
 $RawData=$rptamo["cuerpo"][0]["RawData"];
 $PLMN=$rptamo["cuerpo"][0]["PLMN"];
 $SN=$rptamo["cuerpo"][0]["SN"];
 $MessageType=$rptamo["cuerpo"][0]["MessageType"];
 $MsgProtocol=$rptamo["cuerpo"][0]["MsgProtocol"];
 $TripId=$rptamo["cuerpo"][0]["TripId"];
 $ManeuverId=$rptamo["cuerpo"][0]["ManeuverId"];
 $ManeuverUsage=$rptamo["cuerpo"][0]["ManeuverUsage"];
 $AccidentBuffer=$rptamo["cuerpo"][0]["AccidentBuffer"];
 $ItemId=$rptamo["cuerpo"][0]["ItemId"];
 $titulo= "Actualizar cellocator";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_cellocator.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>