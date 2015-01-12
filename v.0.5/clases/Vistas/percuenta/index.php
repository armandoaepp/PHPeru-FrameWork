<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_percuenta.php"; 
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
  $titulo= "Nuevo percuenta";
  $rpta=CRegistrar_percuenta();
  $contenido="Registrar_percuenta.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_percuenta();
  $rptamo=CBuscar_percuenta($_GET["id"]);
  $nPerCtaCodigo=$rptamo["cuerpo"][0]["nPerCtaCodigo"];
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $cNroCuenta=$rptamo["cuerpo"][0]["cNroCuenta"];
  $nPerCtaTipo=$rptamo["cuerpo"][0]["nPerCtaTipo"];
  $cPerJurCodigo=$rptamo["cuerpo"][0]["cPerJurCodigo"];
  $nMonCodigo=$rptamo["cuerpo"][0]["nMonCodigo"];
  $nPerCtaEstado=$rptamo["cuerpo"][0]["nPerCtaEstado"];
  $contenido="Actualizar_percuenta.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_percuenta();
  header("Location: ../percuenta");
break;
case "Recuperar":
  $rpta=CRecuperar_percuenta();
break;
case "Listar":
       $titulo="Listar percuenta";
       $data=CListar_percuenta();
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
      $Listar_percuenta=$cix->ImprimeTableP("tablapercuenta",$data,"?","?",10,$page,5);
   // $Listar_percuenta=$cix->ImprimeTablePOB("tablapercuenta",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_percuenta.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_percuenta=CListadoSimple_percuenta();
break;
case "Buscar":
 $rpta=CBuscar_percuenta();
break;
case "Nuevo":
 $titulo= "Nuevo percuenta";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_percuenta.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_percuenta($_GET["id"]);
 $nPerCtaCodigo=$rptamo["cuerpo"][0]["nPerCtaCodigo"];
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $cNroCuenta=$rptamo["cuerpo"][0]["cNroCuenta"];
 $nPerCtaTipo=$rptamo["cuerpo"][0]["nPerCtaTipo"];
 $cPerJurCodigo=$rptamo["cuerpo"][0]["cPerJurCodigo"];
 $nMonCodigo=$rptamo["cuerpo"][0]["nMonCodigo"];
 $nPerCtaEstado=$rptamo["cuerpo"][0]["nPerCtaEstado"];
 $titulo= "Actualizar percuenta";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_percuenta.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>