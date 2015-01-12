<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_historial_laboral.php"; 
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
  $rpta=CRegistrar_historial_laboral();
  $contenido="Registrar_historial_laboral.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_historial_laboral();
  $rptamo=CBuscar_historial_laboral($_GET["id"]);
  $ID_HISTORIAL_LABORAL=$rptamo["cuerpo"][0]["ID_HISTORIAL_LABORAL"];
  $EMPLEADO_DNI=$rptamo["cuerpo"][0]["EMPLEADO_DNI"];
  $TRAB_COD=$rptamo["cuerpo"][0]["TRAB_COD"];
  $FECHA_INICIO=$rptamo["cuerpo"][0]["FECHA_INICIO"];
  $FECHA_FIN=$rptamo["cuerpo"][0]["FECHA_FIN"];
  $DPTO_COD=$rptamo["cuerpo"][0]["DPTO_COD"];
  $SUPERVISOR_DNI=$rptamo["cuerpo"][0]["SUPERVISOR_DNI"];
  $contenido="Actualizar_historial_laboral.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_historial_laboral();
  header("Location: ../historial_laboral");
break;
case "Recuperar":
  $rpta=CRecuperar_historial_laboral();
break;
case "Listar":
       $titulo="Listar historial_laboral";
       $data=CListar_historial_laboral();
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
      $Listar_historial_laboral=$cix->ImprimeTableP("tablahistorial_laboral",$data,"?","?",10,$page,5,"tabla");
   // $Listar_historial_laboral=$cix->ImprimeTablePOB("tablahistorial_laboral",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_historial_laboral.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_historial_laboral=CListadoSimple_historial_laboral();
break;
case "Buscar":
 $rpta=CBuscar_historial_laboral();
break;
case "Nuevo":
 $titulo= "Nuevo historial_laboral";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_historial_laboral.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_historial_laboral($_GET["id"]);
 $ID_HISTORIAL_LABORAL=$rptamo["cuerpo"][0]["ID_HISTORIAL_LABORAL"];
 $EMPLEADO_DNI=$rptamo["cuerpo"][0]["EMPLEADO_DNI"];
 $TRAB_COD=$rptamo["cuerpo"][0]["TRAB_COD"];
 $FECHA_INICIO=$rptamo["cuerpo"][0]["FECHA_INICIO"];
 $FECHA_FIN=$rptamo["cuerpo"][0]["FECHA_FIN"];
 $DPTO_COD=$rptamo["cuerpo"][0]["DPTO_COD"];
 $SUPERVISOR_DNI=$rptamo["cuerpo"][0]["SUPERVISOR_DNI"];
 $titulo= "Actualizar historial_laboral";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_historial_laboral.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>