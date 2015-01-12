<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perparametro.php"; 
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
  $titulo= "Nuevo perparametro";
  $rpta=CRegistrar_perparametro();
  $contenido="Registrar_perparametro.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perparametro();
  $rptamo=CBuscar_perparametro($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
  $nParClase=$rptamo["cuerpo"][0]["nParClase"];
  $nPerParValor=$rptamo["cuerpo"][0]["nPerParValor"];
  $cPerParGlosa=$rptamo["cuerpo"][0]["cPerParGlosa"];
  $nPerParEstado=$rptamo["cuerpo"][0]["nPerParEstado"];
  $contenido="Actualizar_perparametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perparametro();
  header("Location: ../perparametro");
break;
case "Recuperar":
  $rpta=CRecuperar_perparametro();
break;
case "Listar":
       $titulo="Listar perparametro";
       $data=CListar_perparametro();
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
      $Listar_perparametro=$cix->ImprimeTableP("tablaperparametro",$data,"?","?",10,$page,5);
   // $Listar_perparametro=$cix->ImprimeTablePOB("tablaperparametro",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perparametro.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perparametro=CListadoSimple_perparametro();
break;
case "Buscar":
 $rpta=CBuscar_perparametro();
break;
case "Nuevo":
 $titulo= "Nuevo perparametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perparametro.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perparametro($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
 $nParClase=$rptamo["cuerpo"][0]["nParClase"];
 $nPerParValor=$rptamo["cuerpo"][0]["nPerParValor"];
 $cPerParGlosa=$rptamo["cuerpo"][0]["cPerParGlosa"];
 $nPerParEstado=$rptamo["cuerpo"][0]["nPerParEstado"];
 $titulo= "Actualizar perparametro";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perparametro.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>