<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docvehiculo.php"; 
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
  $titulo= "Nuevo docvehiculo";
  $rpta=CRegistrar_docvehiculo();
  $contenido="Registrar_docvehiculo.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docvehiculo();
  $rptamo=CBuscar_docvehiculo($_GET["id"]);
  $iddocvehiculo=$rptamo["cuerpo"][0]["iddocvehiculo"];
  $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
  $idtipodocumento=$rptamo["cuerpo"][0]["idtipodocumento"];
  $item=$rptamo["cuerpo"][0]["item"];
  $fecharegistro=$rptamo["cuerpo"][0]["fecharegistro"];
  $fechaemision=$rptamo["cuerpo"][0]["fechaemision"];
  $fechacaducidad=$rptamo["cuerpo"][0]["fechacaducidad"];
  $archivo=$rptamo["cuerpo"][0]["archivo"];
  $glosa=$rptamo["cuerpo"][0]["glosa"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_docvehiculo.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docvehiculo();
  header("Location: ../docvehiculo");
break;
case "Recuperar":
  $rpta=CRecuperar_docvehiculo();
break;
case "Listar":
       $titulo="Listar docvehiculo";
       $data=CListar_docvehiculo();
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
      $Listar_docvehiculo=$cix->ImprimeTableP("tabladocvehiculo",$data,"?","?",10,$page,5);
   // $Listar_docvehiculo=$cix->ImprimeTablePOB("tabladocvehiculo",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docvehiculo.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docvehiculo=CListadoSimple_docvehiculo();
break;
case "Buscar":
 $rpta=CBuscar_docvehiculo();
break;
case "Nuevo":
 $titulo= "Nuevo docvehiculo";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docvehiculo.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docvehiculo($_GET["id"]);
 $iddocvehiculo=$rptamo["cuerpo"][0]["iddocvehiculo"];
 $idvehiculo=$rptamo["cuerpo"][0]["idvehiculo"];
 $idtipodocumento=$rptamo["cuerpo"][0]["idtipodocumento"];
 $item=$rptamo["cuerpo"][0]["item"];
 $fecharegistro=$rptamo["cuerpo"][0]["fecharegistro"];
 $fechaemision=$rptamo["cuerpo"][0]["fechaemision"];
 $fechacaducidad=$rptamo["cuerpo"][0]["fechacaducidad"];
 $archivo=$rptamo["cuerpo"][0]["archivo"];
 $glosa=$rptamo["cuerpo"][0]["glosa"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar docvehiculo";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docvehiculo.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>