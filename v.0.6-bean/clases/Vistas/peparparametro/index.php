<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_peparparametro.php"; 
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
  $titulo= "Nuevo peparparametro";
  $rpta=CRegistrar_peparparametro();
  $contenido="Registrar_peparparametro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_peparparametro();
  $rptamo=CBuscar_peparparametro($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nParSrcCodigo=$rptamo["cuerpo"][0]["nParSrcCodigo"];
  $nParSrcClase=$rptamo["cuerpo"][0]["nParSrcClase"];
  $nParDstCodigo=$rptamo["cuerpo"][0]["nParDstCodigo"];
  $nParDstClase=$rptamo["cuerpo"][0]["nParDstClase"];
  $cParParValor=$rptamo["cuerpo"][0]["cParParValor"];
  $cParParGlosa=$rptamo["cuerpo"][0]["cParParGlosa"];
  $contenido="Actualizar_peparparametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_peparparametro();
  header("Location: ../peparparametro");
break;
case "Recuperar":
  $rpta=CRecuperar_peparparametro();
break;
case "Listar":
       $titulo="Listar peparparametro";
       $data=CListar_peparparametro();
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
      $Listar_peparparametro=$cix->ImprimeTableP("tablapeparparametro",$data,"?","?",10,$page,5);
   // $Listar_peparparametro=$cix->ImprimeTablePOB("tablapeparparametro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_peparparametro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_peparparametro=CListadoSimple_peparparametro();
break;
case "Buscar":
 $rpta=CBuscar_peparparametro();
break;
case "Nuevo":
 $titulo= "Nuevo peparparametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_peparparametro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_peparparametro($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nParSrcCodigo=$rptamo["cuerpo"][0]["nParSrcCodigo"];
 $nParSrcClase=$rptamo["cuerpo"][0]["nParSrcClase"];
 $nParDstCodigo=$rptamo["cuerpo"][0]["nParDstCodigo"];
 $nParDstClase=$rptamo["cuerpo"][0]["nParDstClase"];
 $cParParValor=$rptamo["cuerpo"][0]["cParParValor"];
 $cParParGlosa=$rptamo["cuerpo"][0]["cParParGlosa"];
 $titulo= "Actualizar peparparametro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_peparparametro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>