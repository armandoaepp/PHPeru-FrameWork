<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_pardetalle.php"; 
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
  $titulo= "Nuevo pardetalle";
  $rpta=CRegistrar_pardetalle();
  $contenido="Registrar_pardetalle.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_pardetalle();
  $rptamo=CBuscar_pardetalle($_GET["id"]);
  $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
  $nParClase=$rptamo["cuerpo"][0]["nParClase"];
  $nParItem=$rptamo["cuerpo"][0]["nParItem"];
  $nParItemS=$rptamo["cuerpo"][0]["nParItemS"];
  $cParDetValor=$rptamo["cuerpo"][0]["cParDetValor"];
  $cParDetGlosa=$rptamo["cuerpo"][0]["cParDetGlosa"];
  $contenido="Actualizar_pardetalle.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_pardetalle();
  header("Location: ../pardetalle");
break;
case "Recuperar":
  $rpta=CRecuperar_pardetalle();
break;
case "Listar":
       $titulo="Listar pardetalle";
       $data=CListar_pardetalle();
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
      $Listar_pardetalle=$cix->ImprimeTableP("tablapardetalle",$data,"?","?",10,$page,5);
   // $Listar_pardetalle=$cix->ImprimeTablePOB("tablapardetalle",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_pardetalle.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_pardetalle=CListadoSimple_pardetalle();
break;
case "Buscar":
 $rpta=CBuscar_pardetalle();
break;
case "Nuevo":
 $titulo= "Nuevo pardetalle";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_pardetalle.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_pardetalle($_GET["id"]);
 $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
 $nParClase=$rptamo["cuerpo"][0]["nParClase"];
 $nParItem=$rptamo["cuerpo"][0]["nParItem"];
 $nParItemS=$rptamo["cuerpo"][0]["nParItemS"];
 $cParDetValor=$rptamo["cuerpo"][0]["cParDetValor"];
 $cParDetGlosa=$rptamo["cuerpo"][0]["cParDetGlosa"];
 $titulo= "Actualizar pardetalle";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_pardetalle.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>