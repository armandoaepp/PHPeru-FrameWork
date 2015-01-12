<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docparametro.php"; 
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
  $titulo= "Nuevo docparametro";
  $rpta=CRegistrar_docparametro();
  $contenido="Registrar_docparametro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docparametro();
  $rptamo=CBuscar_docparametro($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $nParClase=$rptamo["cuerpo"][0]["nParClase"];
  $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
  $cDocParObservacion=$rptamo["cuerpo"][0]["cDocParObservacion"];
  $contenido="Actualizar_docparametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docparametro();
  header("Location: ../docparametro");
break;
case "Recuperar":
  $rpta=CRecuperar_docparametro();
break;
case "Listar":
       $titulo="Listar docparametro";
       $data=CListar_docparametro();
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
      $Listar_docparametro=$cix->ImprimeTableP("tabladocparametro",$data,"?","?",10,$page,5);
   // $Listar_docparametro=$cix->ImprimeTablePOB("tabladocparametro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docparametro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docparametro=CListadoSimple_docparametro();
break;
case "Buscar":
 $rpta=CBuscar_docparametro();
break;
case "Nuevo":
 $titulo= "Nuevo docparametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docparametro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docparametro($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $nParClase=$rptamo["cuerpo"][0]["nParClase"];
 $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
 $cDocParObservacion=$rptamo["cuerpo"][0]["cDocParObservacion"];
 $titulo= "Actualizar docparametro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docparametro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>