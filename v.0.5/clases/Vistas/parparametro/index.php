<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_parparametro.php"; 
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
  $titulo= "Nuevo parparametro";
  $rpta=CRegistrar_parparametro();
  $contenido="Registrar_parparametro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_parparametro();
  $rptamo=CBuscar_parparametro($_GET["id"]);
  $nParSrcCodigo=$rptamo["cuerpo"][0]["nParSrcCodigo"];
  $nParSrcClase=$rptamo["cuerpo"][0]["nParSrcClase"];
  $nParDstCodigo=$rptamo["cuerpo"][0]["nParDstCodigo"];
  $nParDstClase=$rptamo["cuerpo"][0]["nParDstClase"];
  $cValor=$rptamo["cuerpo"][0]["cValor"];
  $nParParEstado=$rptamo["cuerpo"][0]["nParParEstado"];
  $contenido="Actualizar_parparametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_parparametro();
  header("Location: ../parparametro");
break;
case "Recuperar":
  $rpta=CRecuperar_parparametro();
break;
case "Listar":
       $titulo="Listar parparametro";
       $data=CListar_parparametro();
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
      $Listar_parparametro=$cix->ImprimeTableP("tablaparparametro",$data,"?","?",10,$page,5);
   // $Listar_parparametro=$cix->ImprimeTablePOB("tablaparparametro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_parparametro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_parparametro=CListadoSimple_parparametro();
break;
case "Buscar":
 $rpta=CBuscar_parparametro();
break;
case "Nuevo":
 $titulo= "Nuevo parparametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_parparametro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_parparametro($_GET["id"]);
 $nParSrcCodigo=$rptamo["cuerpo"][0]["nParSrcCodigo"];
 $nParSrcClase=$rptamo["cuerpo"][0]["nParSrcClase"];
 $nParDstCodigo=$rptamo["cuerpo"][0]["nParDstCodigo"];
 $nParDstClase=$rptamo["cuerpo"][0]["nParDstClase"];
 $cValor=$rptamo["cuerpo"][0]["cValor"];
 $nParParEstado=$rptamo["cuerpo"][0]["nParParEstado"];
 $titulo= "Actualizar parparametro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_parparametro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>