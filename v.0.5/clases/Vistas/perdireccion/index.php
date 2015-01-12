<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perdireccion.php"; 
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
  $titulo= "Nuevo perdireccion";
  $rpta=CRegistrar_perdireccion();
  $contenido="Registrar_perdireccion.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perdireccion();
  $rptamo=CBuscar_perdireccion($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nUbiCodigo=$rptamo["cuerpo"][0]["nUbiCodigo"];
  $nPerDirTipo=$rptamo["cuerpo"][0]["nPerDirTipo"];
  $cPerDirDescripcion=$rptamo["cuerpo"][0]["cPerDirDescripcion"];
  $cPerDirGlosa=$rptamo["cuerpo"][0]["cPerDirGlosa"];
  $nPerDirEstado=$rptamo["cuerpo"][0]["nPerDirEstado"];
  $contenido="Actualizar_perdireccion.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perdireccion();
  header("Location: ../perdireccion");
break;
case "Recuperar":
  $rpta=CRecuperar_perdireccion();
break;
case "Listar":
       $titulo="Listar perdireccion";
       $data=CListar_perdireccion();
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
      $Listar_perdireccion=$cix->ImprimeTableP("tablaperdireccion",$data,"?","?",10,$page,5);
   // $Listar_perdireccion=$cix->ImprimeTablePOB("tablaperdireccion",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perdireccion.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perdireccion=CListadoSimple_perdireccion();
break;
case "Buscar":
 $rpta=CBuscar_perdireccion();
break;
case "Nuevo":
 $titulo= "Nuevo perdireccion";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perdireccion.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perdireccion($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nUbiCodigo=$rptamo["cuerpo"][0]["nUbiCodigo"];
 $nPerDirTipo=$rptamo["cuerpo"][0]["nPerDirTipo"];
 $cPerDirDescripcion=$rptamo["cuerpo"][0]["cPerDirDescripcion"];
 $cPerDirGlosa=$rptamo["cuerpo"][0]["cPerDirGlosa"];
 $nPerDirEstado=$rptamo["cuerpo"][0]["nPerDirEstado"];
 $titulo= "Actualizar perdireccion";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perdireccion.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>