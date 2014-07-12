<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_parametro.php"; 
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
  $titulo= "Nuevo parametro";
  $rpta=CRegistrar_parametro();
  $contenido="Registrar_parametro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_parametro();
  $rptamo=CBuscar_parametro($_GET["id"]);
  $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
  $nParClase=$rptamo["cuerpo"][0]["nParClase"];
  $cParJerarquia=$rptamo["cuerpo"][0]["cParJerarquia"];
  $cParNombre=$rptamo["cuerpo"][0]["cParNombre"];
  $cParDescripcion=$rptamo["cuerpo"][0]["cParDescripcion"];
  $nParEstado=$rptamo["cuerpo"][0]["nParEstado"];
  $contenido="Actualizar_parametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_parametro();
  header("Location: ../parametro");
break;
case "Recuperar":
  $rpta=CRecuperar_parametro();
break;
case "Listar":
       $titulo="Listar parametro";
       $data=CListar_parametro();
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
      $Listar_parametro=$cix->ImprimeTableP("tablaparametro",$data,"?","?",10,$page,5);
   // $Listar_parametro=$cix->ImprimeTablePOB("tablaparametro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_parametro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_parametro=CListadoSimple_parametro();
break;
case "Buscar":
 $rpta=CBuscar_parametro();
break;
case "Nuevo":
 $titulo= "Nuevo parametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_parametro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_parametro($_GET["id"]);
 $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
 $nParClase=$rptamo["cuerpo"][0]["nParClase"];
 $cParJerarquia=$rptamo["cuerpo"][0]["cParJerarquia"];
 $cParNombre=$rptamo["cuerpo"][0]["cParNombre"];
 $cParDescripcion=$rptamo["cuerpo"][0]["cParDescripcion"];
 $nParEstado=$rptamo["cuerpo"][0]["nParEstado"];
 $titulo= "Actualizar parametro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_parametro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>