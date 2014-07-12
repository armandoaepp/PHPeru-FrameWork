<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docperparametro.php"; 
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
  $titulo= "Nuevo docperparametro";
  $rpta=CRegistrar_docperparametro();
  $contenido="Registrar_docperparametro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docperparametro();
  $rptamo=CBuscar_docperparametro($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
  $nParClase=$rptamo["cuerpo"][0]["nParClase"];
  $cDocPerParValor=$rptamo["cuerpo"][0]["cDocPerParValor"];
  $cDocPerParGlosa=$rptamo["cuerpo"][0]["cDocPerParGlosa"];
  $nDocPerParEstado=$rptamo["cuerpo"][0]["nDocPerParEstado"];
  $contenido="Actualizar_docperparametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docperparametro();
  header("Location: ../docperparametro");
break;
case "Recuperar":
  $rpta=CRecuperar_docperparametro();
break;
case "Listar":
       $titulo="Listar docperparametro";
       $data=CListar_docperparametro();
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
      $Listar_docperparametro=$cix->ImprimeTableP("tabladocperparametro",$data,"?","?",10,$page,5);
   // $Listar_docperparametro=$cix->ImprimeTablePOB("tabladocperparametro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docperparametro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docperparametro=CListadoSimple_docperparametro();
break;
case "Buscar":
 $rpta=CBuscar_docperparametro();
break;
case "Nuevo":
 $titulo= "Nuevo docperparametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docperparametro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docperparametro($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
 $nParClase=$rptamo["cuerpo"][0]["nParClase"];
 $cDocPerParValor=$rptamo["cuerpo"][0]["cDocPerParValor"];
 $cDocPerParGlosa=$rptamo["cuerpo"][0]["cDocPerParGlosa"];
 $nDocPerParEstado=$rptamo["cuerpo"][0]["nDocPerParEstado"];
 $titulo= "Actualizar docperparametro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docperparametro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>