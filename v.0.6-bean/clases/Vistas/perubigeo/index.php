<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perubigeo.php"; 
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
  $titulo= "Nuevo perubigeo";
  $rpta=CRegistrar_perubigeo();
  $contenido="Registrar_perubigeo.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perubigeo();
  $rptamo=CBuscar_perubigeo($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerUbiCodigo=$rptamo["cuerpo"][0]["nPerUbiCodigo"];
  $nPerUbiGlosa=$rptamo["cuerpo"][0]["nPerUbiGlosa"];
  $nPerUbiEstado=$rptamo["cuerpo"][0]["nPerUbiEstado"];
  $contenido="Actualizar_perubigeo.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perubigeo();
  header("Location: ../perubigeo");
break;
case "Recuperar":
  $rpta=CRecuperar_perubigeo();
break;
case "Listar":
       $titulo="Listar perubigeo";
       $data=CListar_perubigeo();
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
      $Listar_perubigeo=$cix->ImprimeTableP("tablaperubigeo",$data,"?","?",10,$page,5);
   // $Listar_perubigeo=$cix->ImprimeTablePOB("tablaperubigeo",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perubigeo.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perubigeo=CListadoSimple_perubigeo();
break;
case "Buscar":
 $rpta=CBuscar_perubigeo();
break;
case "Nuevo":
 $titulo= "Nuevo perubigeo";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perubigeo.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perubigeo($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerUbiCodigo=$rptamo["cuerpo"][0]["nPerUbiCodigo"];
 $nPerUbiGlosa=$rptamo["cuerpo"][0]["nPerUbiGlosa"];
 $nPerUbiEstado=$rptamo["cuerpo"][0]["nPerUbiEstado"];
 $titulo= "Actualizar perubigeo";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perubigeo.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>