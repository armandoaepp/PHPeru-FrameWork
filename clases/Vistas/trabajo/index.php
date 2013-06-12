<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_trabajo.php"; 
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
  $rpta=CRegistrar_trabajo();
  $contenido="Registrar_trabajo.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_trabajo();
  $rptamo=CBuscar_trabajo($_GET["id"]);
  $ID_TRABAJO=$rptamo["cuerpo"][0]["ID_TRABAJO"];
  $TRABAJO_COD=$rptamo["cuerpo"][0]["TRABAJO_COD"];
  $NOMBRE_TRAB=$rptamo["cuerpo"][0]["NOMBRE_TRAB"];
  $SALARIO_MIN=$rptamo["cuerpo"][0]["SALARIO_MIN"];
  $SALARIO_MAX=$rptamo["cuerpo"][0]["SALARIO_MAX"];
  $contenido="Actualizar_trabajo.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_trabajo();
  header("Location: ../trabajo");
break;
case "Recuperar":
  $rpta=CRecuperar_trabajo();
break;
case "Listar":
       $titulo="Listar trabajo";
       $data=CListar_trabajo();
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
      $Listar_trabajo=$cix->ImprimeTableP("tablatrabajo",$data,"?","?",10,$page,5,"tabla");
   // $Listar_trabajo=$cix->ImprimeTablePOB("tablatrabajo",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_trabajo.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_trabajo=CListadoSimple_trabajo();
break;
case "Buscar":
 $rpta=CBuscar_trabajo();
break;
case "Nuevo":
 $titulo= "Nuevo trabajo";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_trabajo.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_trabajo($_GET["id"]);
 $ID_TRABAJO=$rptamo["cuerpo"][0]["ID_TRABAJO"];
 $TRABAJO_COD=$rptamo["cuerpo"][0]["TRABAJO_COD"];
 $NOMBRE_TRAB=$rptamo["cuerpo"][0]["NOMBRE_TRAB"];
 $SALARIO_MIN=$rptamo["cuerpo"][0]["SALARIO_MIN"];
 $SALARIO_MAX=$rptamo["cuerpo"][0]["SALARIO_MAX"];
 $titulo= "Actualizar trabajo";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_trabajo.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>