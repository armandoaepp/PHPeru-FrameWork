<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_operacion.php"; 
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
  $titulo= "Nuevo operacion";
  $rpta=CRegistrar_operacion();
  $contenido="Registrar_operacion.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_operacion();
  $rptamo=CBuscar_operacion($_GET["id"]);
  $idoperacion=$rptamo["cuerpo"][0]["idoperacion"];
  $fecha=$rptamo["cuerpo"][0]["fecha"];
  $fecha_transcli=$rptamo["cuerpo"][0]["fecha_transcli"];
  $tipomov=$rptamo["cuerpo"][0]["tipomov"];
  $monto_operacion=$rptamo["cuerpo"][0]["monto_operacion"];
  $idcuenta=$rptamo["cuerpo"][0]["idcuenta"];
  $idtipo_operacion=$rptamo["cuerpo"][0]["idtipo_operacion"];
  $estado_recarga=$rptamo["cuerpo"][0]["estado_recarga"];
  $idsolicitud=$rptamo["cuerpo"][0]["idsolicitud"];
  $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
  $iduser=$rptamo["cuerpo"][0]["iduser"];
  $numorden=$rptamo["cuerpo"][0]["numorden"];
  $numtransac_sp=$rptamo["cuerpo"][0]["numtransac_sp"];
  $moneda=$rptamo["cuerpo"][0]["moneda"];
  $resul_transac=$rptamo["cuerpo"][0]["resul_transac"];
  $cod_accion=$rptamo["cuerpo"][0]["cod_accion"];
  $dato_comercio=$rptamo["cuerpo"][0]["dato_comercio"];
  $mediopago=$rptamo["cuerpo"][0]["mediopago"];
  $tiporesp=$rptamo["cuerpo"][0]["tiporesp"];
  $cod_autoriz=$rptamo["cuerpo"][0]["cod_autoriz"];
  $numrefer=$rptamo["cuerpo"][0]["numrefer"];
  $hash=$rptamo["cuerpo"][0]["hash"];
  $tipoprod_sp=$rptamo["cuerpo"][0]["tipoprod_sp"];
  $ntarjeta=$rptamo["cuerpo"][0]["ntarjeta"];
  $tarjetahab_visa=$rptamo["cuerpo"][0]["tarjetahab_visa"];
  $ipcompra=$rptamo["cuerpo"][0]["ipcompra"];
  $contenido="Actualizar_operacion.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_operacion();
  header("Location: ../operacion");
break;
case "Recuperar":
  $rpta=CRecuperar_operacion();
break;
case "Listar":
       $titulo="Listar operacion";
       $data=CListar_operacion();
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
      $Listar_operacion=$cix->ImprimeTableP("tablaoperacion",$data,"?","?",10,$page,5);
   // $Listar_operacion=$cix->ImprimeTablePOB("tablaoperacion",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_operacion.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_operacion=CListadoSimple_operacion();
break;
case "Buscar":
 $rpta=CBuscar_operacion();
break;
case "Nuevo":
 $titulo= "Nuevo operacion";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_operacion.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_operacion($_GET["id"]);
 $idoperacion=$rptamo["cuerpo"][0]["idoperacion"];
 $fecha=$rptamo["cuerpo"][0]["fecha"];
 $fecha_transcli=$rptamo["cuerpo"][0]["fecha_transcli"];
 $tipomov=$rptamo["cuerpo"][0]["tipomov"];
 $monto_operacion=$rptamo["cuerpo"][0]["monto_operacion"];
 $idcuenta=$rptamo["cuerpo"][0]["idcuenta"];
 $idtipo_operacion=$rptamo["cuerpo"][0]["idtipo_operacion"];
 $estado_recarga=$rptamo["cuerpo"][0]["estado_recarga"];
 $idsolicitud=$rptamo["cuerpo"][0]["idsolicitud"];
 $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
 $iduser=$rptamo["cuerpo"][0]["iduser"];
 $numorden=$rptamo["cuerpo"][0]["numorden"];
 $numtransac_sp=$rptamo["cuerpo"][0]["numtransac_sp"];
 $moneda=$rptamo["cuerpo"][0]["moneda"];
 $resul_transac=$rptamo["cuerpo"][0]["resul_transac"];
 $cod_accion=$rptamo["cuerpo"][0]["cod_accion"];
 $dato_comercio=$rptamo["cuerpo"][0]["dato_comercio"];
 $mediopago=$rptamo["cuerpo"][0]["mediopago"];
 $tiporesp=$rptamo["cuerpo"][0]["tiporesp"];
 $cod_autoriz=$rptamo["cuerpo"][0]["cod_autoriz"];
 $numrefer=$rptamo["cuerpo"][0]["numrefer"];
 $hash=$rptamo["cuerpo"][0]["hash"];
 $tipoprod_sp=$rptamo["cuerpo"][0]["tipoprod_sp"];
 $ntarjeta=$rptamo["cuerpo"][0]["ntarjeta"];
 $tarjetahab_visa=$rptamo["cuerpo"][0]["tarjetahab_visa"];
 $ipcompra=$rptamo["cuerpo"][0]["ipcompra"];
 $titulo= "Actualizar operacion";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_operacion.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>