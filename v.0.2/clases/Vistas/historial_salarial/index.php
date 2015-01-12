<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_historial_salarial.php"; 
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
  $rpta=CRegistrar_historial_salarial();
  $contenido="Registrar_historial_salarial.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_historial_salarial();
  $rptamo=CBuscar_historial_salarial($_GET["id"]);
  $ID_HISTORIAL_SALARIAL=$rptamo["cuerpo"][0]["ID_HISTORIAL_SALARIAL"];
  $EMPLEADO_DNI=$rptamo["cuerpo"][0]["EMPLEADO_DNI"];
  $SALARIO=$rptamo["cuerpo"][0]["SALARIO"];
  $FECHA_COMIENZO=$rptamo["cuerpo"][0]["FECHA_COMIENZO"];
  $FECHA_FIN=$rptamo["cuerpo"][0]["FECHA_FIN"];
  $contenido="Actualizar_historial_salarial.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_historial_salarial();
  header("Location: ../historial_salarial");
break;
case "Recuperar":
  $rpta=CRecuperar_historial_salarial();
break;
case "Listar":
       $titulo="Listar historial_salarial";
       $data=CListar_historial_salarial();
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
      $Listar_historial_salarial=$cix->ImprimeTableP("tablahistorial_salarial",$data,"?","?",10,$page,5,"tabla");
   // $Listar_historial_salarial=$cix->ImprimeTablePOB("tablahistorial_salarial",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_historial_salarial.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_historial_salarial=CListadoSimple_historial_salarial();
break;
case "Buscar":
 $rpta=CBuscar_historial_salarial();
break;
case "Nuevo":
 $titulo= "Nuevo historial_salarial";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_historial_salarial.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_historial_salarial($_GET["id"]);
 $ID_HISTORIAL_SALARIAL=$rptamo["cuerpo"][0]["ID_HISTORIAL_SALARIAL"];
 $EMPLEADO_DNI=$rptamo["cuerpo"][0]["EMPLEADO_DNI"];
 $SALARIO=$rptamo["cuerpo"][0]["SALARIO"];
 $FECHA_COMIENZO=$rptamo["cuerpo"][0]["FECHA_COMIENZO"];
 $FECHA_FIN=$rptamo["cuerpo"][0]["FECHA_FIN"];
 $titulo= "Actualizar historial_salarial";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_historial_salarial.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>