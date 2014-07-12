<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docparparametro.php"; 
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
  $titulo= "Nuevo docparparametro";
  $rpta=CRegistrar_docparparametro();
  $contenido="Registrar_docparparametro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docparparametro();
  $rptamo=CBuscar_docparparametro($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $nParSrcCodigo=$rptamo["cuerpo"][0]["nParSrcCodigo"];
  $nParSrcClase=$rptamo["cuerpo"][0]["nParSrcClase"];
  $nParDstCodigo=$rptamo["cuerpo"][0]["nParDstCodigo"];
  $nParDstClase=$rptamo["cuerpo"][0]["nParDstClase"];
  $cParParValor=$rptamo["cuerpo"][0]["cParParValor"];
  $cParParGlosa=$rptamo["cuerpo"][0]["cParParGlosa"];
  $contenido="Actualizar_docparparametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docparparametro();
  header("Location: ../docparparametro");
break;
case "Recuperar":
  $rpta=CRecuperar_docparparametro();
break;
case "Listar":
       $titulo="Listar docparparametro";
       $data=CListar_docparparametro();
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
      $Listar_docparparametro=$cix->ImprimeTableP("tabladocparparametro",$data,"?","?",10,$page,5);
   // $Listar_docparparametro=$cix->ImprimeTablePOB("tabladocparparametro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docparparametro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docparparametro=CListadoSimple_docparparametro();
break;
case "Buscar":
 $rpta=CBuscar_docparparametro();
break;
case "Nuevo":
 $titulo= "Nuevo docparparametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docparparametro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docparparametro($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $nParSrcCodigo=$rptamo["cuerpo"][0]["nParSrcCodigo"];
 $nParSrcClase=$rptamo["cuerpo"][0]["nParSrcClase"];
 $nParDstCodigo=$rptamo["cuerpo"][0]["nParDstCodigo"];
 $nParDstClase=$rptamo["cuerpo"][0]["nParDstClase"];
 $cParParValor=$rptamo["cuerpo"][0]["cParParValor"];
 $cParParGlosa=$rptamo["cuerpo"][0]["cParParGlosa"];
 $titulo= "Actualizar docparparametro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docparparametro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>