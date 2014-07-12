<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_transaccion.php"; 
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
  $titulo= "Nuevo transaccion";
  $rpta=CRegistrar_transaccion();
  $contenido="Registrar_transaccion.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_transaccion();
  $rptamo=CBuscar_transaccion($_GET["id"]);
  $cTraCodigo=$rptamo["cuerpo"][0]["cTraCodigo"];
  $nOpeCodigo=$rptamo["cuerpo"][0]["nOpeCodigo"];
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $dTraFecha=$rptamo["cuerpo"][0]["dTraFecha"];
  $cComputer=$rptamo["cuerpo"][0]["cComputer"];
  $cTraDescripcion=$rptamo["cuerpo"][0]["cTraDescripcion"];
  $contenido="Actualizar_transaccion.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_transaccion();
  header("Location: ../transaccion");
break;
case "Recuperar":
  $rpta=CRecuperar_transaccion();
break;
case "Listar":
       $titulo="Listar transaccion";
       $data=CListar_transaccion();
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
      $Listar_transaccion=$cix->ImprimeTableP("tablatransaccion",$data,"?","?",10,$page,5);
   // $Listar_transaccion=$cix->ImprimeTablePOB("tablatransaccion",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_transaccion.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_transaccion=CListadoSimple_transaccion();
break;
case "Buscar":
 $rpta=CBuscar_transaccion();
break;
case "Nuevo":
 $titulo= "Nuevo transaccion";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_transaccion.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_transaccion($_GET["id"]);
 $cTraCodigo=$rptamo["cuerpo"][0]["cTraCodigo"];
 $nOpeCodigo=$rptamo["cuerpo"][0]["nOpeCodigo"];
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $dTraFecha=$rptamo["cuerpo"][0]["dTraFecha"];
 $cComputer=$rptamo["cuerpo"][0]["cComputer"];
 $cTraDescripcion=$rptamo["cuerpo"][0]["cTraDescripcion"];
 $titulo= "Actualizar transaccion";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_transaccion.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>