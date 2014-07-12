<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docestado.php"; 
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
  $titulo= "Nuevo docestado";
  $rpta=CRegistrar_docestado();
  $contenido="Registrar_docestado.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docestado();
  $rptamo=CBuscar_docestado($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $nDocParCodigo=$rptamo["cuerpo"][0]["nDocParCodigo"];
  $nDocParClase=$rptamo["cuerpo"][0]["nDocParClase"];
  $dDocEstFecha=$rptamo["cuerpo"][0]["dDocEstFecha"];
  $cDocEstGlosa=$rptamo["cuerpo"][0]["cDocEstGlosa"];
  $contenido="Actualizar_docestado.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docestado();
  header("Location: ../docestado");
break;
case "Recuperar":
  $rpta=CRecuperar_docestado();
break;
case "Listar":
       $titulo="Listar docestado";
       $data=CListar_docestado();
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
      $Listar_docestado=$cix->ImprimeTableP("tabladocestado",$data,"?","?",10,$page,5);
   // $Listar_docestado=$cix->ImprimeTablePOB("tabladocestado",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docestado.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docestado=CListadoSimple_docestado();
break;
case "Buscar":
 $rpta=CBuscar_docestado();
break;
case "Nuevo":
 $titulo= "Nuevo docestado";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docestado.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docestado($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $nDocParCodigo=$rptamo["cuerpo"][0]["nDocParCodigo"];
 $nDocParClase=$rptamo["cuerpo"][0]["nDocParClase"];
 $dDocEstFecha=$rptamo["cuerpo"][0]["dDocEstFecha"];
 $cDocEstGlosa=$rptamo["cuerpo"][0]["cDocEstGlosa"];
 $titulo= "Actualizar docestado";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docestado.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>