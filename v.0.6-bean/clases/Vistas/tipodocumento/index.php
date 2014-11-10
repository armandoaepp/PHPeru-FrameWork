<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_tipodocumento.php"; 
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
  $titulo= "Nuevo tipodocumento";
  $rpta=CRegistrar_tipodocumento();
  $contenido="Registrar_tipodocumento.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_tipodocumento();
  $rptamo=CBuscar_tipodocumento($_GET["id"]);
  $idtipodocumento=$rptamo["cuerpo"][0]["idtipodocumento"];
  $tipodocumento=$rptamo["cuerpo"][0]["tipodocumento"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_tipodocumento.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_tipodocumento();
  header("Location: ../tipodocumento");
break;
case "Recuperar":
  $rpta=CRecuperar_tipodocumento();
break;
case "Listar":
       $titulo="Listar tipodocumento";
       $data=CListar_tipodocumento();
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
      $Listar_tipodocumento=$cix->ImprimeTableP("tablatipodocumento",$data,"?","?",10,$page,5);
   // $Listar_tipodocumento=$cix->ImprimeTablePOB("tablatipodocumento",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_tipodocumento.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_tipodocumento=CListadoSimple_tipodocumento();
break;
case "Buscar":
 $rpta=CBuscar_tipodocumento();
break;
case "Nuevo":
 $titulo= "Nuevo tipodocumento";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_tipodocumento.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_tipodocumento($_GET["id"]);
 $idtipodocumento=$rptamo["cuerpo"][0]["idtipodocumento"];
 $tipodocumento=$rptamo["cuerpo"][0]["tipodocumento"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar tipodocumento";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_tipodocumento.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>