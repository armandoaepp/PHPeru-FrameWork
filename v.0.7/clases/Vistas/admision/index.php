<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_admision.php"; 
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
  $titulo= "Nuevo admision";
  $rpta=CRegistrar_admision();
  $contenido="Registrar_admision.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_admision();
  $rptamo=CBuscar_admision($_GET["id"]);
  $id=$rptamo["cuerpo"][0]["id"];
  $titulo=$rptamo["cuerpo"][0]["titulo"];
  $imagen=$rptamo["cuerpo"][0]["imagen"];
  $requisitos=$rptamo["cuerpo"][0]["requisitos"];
  $horarios=$rptamo["cuerpo"][0]["horarios"];
  $inversion=$rptamo["cuerpo"][0]["inversion"];
  $email=$rptamo["cuerpo"][0]["email"];
  $contenido="Actualizar_admision.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_admision();
  header("Location: ../admision");
break;
case "Recuperar":
  $rpta=CRecuperar_admision();
break;
case "Listar":
       $titulo="Listar admision";
       $data=CListar_admision();
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
      $Listar_admision=$cix->ImprimeTableP("tablaadmision",$data,"?","?",10,$page,5);
   // $Listar_admision=$cix->ImprimeTablePOB("tablaadmision",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_admision.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_admision=CListadoSimple_admision();
break;
case "Buscar":
 $rpta=CBuscar_admision();
break;
case "Nuevo":
 $titulo= "Nuevo admision";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_admision.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_admision($_GET["id"]);
 $id=$rptamo["cuerpo"][0]["id"];
 $titulo=$rptamo["cuerpo"][0]["titulo"];
 $imagen=$rptamo["cuerpo"][0]["imagen"];
 $requisitos=$rptamo["cuerpo"][0]["requisitos"];
 $horarios=$rptamo["cuerpo"][0]["horarios"];
 $inversion=$rptamo["cuerpo"][0]["inversion"];
 $email=$rptamo["cuerpo"][0]["email"];
 $titulo= "Actualizar admision";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_admision.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>