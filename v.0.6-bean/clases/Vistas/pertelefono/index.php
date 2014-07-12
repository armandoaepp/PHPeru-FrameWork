<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_pertelefono.php"; 
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
  $titulo= "Nuevo pertelefono";
  $rpta=CRegistrar_pertelefono();
  $contenido="Registrar_pertelefono.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_pertelefono();
  $rptamo=CBuscar_pertelefono($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerTelTipo=$rptamo["cuerpo"][0]["nPerTelTipo"];
  $nPerTelItem=$rptamo["cuerpo"][0]["nPerTelItem"];
  $cPerTelNumero=$rptamo["cuerpo"][0]["cPerTelNumero"];
  $nPerTelEstado=$rptamo["cuerpo"][0]["nPerTelEstado"];
  $contenido="Actualizar_pertelefono.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_pertelefono();
  header("Location: ../pertelefono");
break;
case "Recuperar":
  $rpta=CRecuperar_pertelefono();
break;
case "Listar":
       $titulo="Listar pertelefono";
       $data=CListar_pertelefono();
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
      $Listar_pertelefono=$cix->ImprimeTableP("tablapertelefono",$data,"?","?",10,$page,5);
   // $Listar_pertelefono=$cix->ImprimeTablePOB("tablapertelefono",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_pertelefono.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_pertelefono=CListadoSimple_pertelefono();
break;
case "Buscar":
 $rpta=CBuscar_pertelefono();
break;
case "Nuevo":
 $titulo= "Nuevo pertelefono";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_pertelefono.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_pertelefono($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerTelTipo=$rptamo["cuerpo"][0]["nPerTelTipo"];
 $nPerTelItem=$rptamo["cuerpo"][0]["nPerTelItem"];
 $cPerTelNumero=$rptamo["cuerpo"][0]["cPerTelNumero"];
 $nPerTelEstado=$rptamo["cuerpo"][0]["nPerTelEstado"];
 $titulo= "Actualizar pertelefono";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_pertelefono.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>