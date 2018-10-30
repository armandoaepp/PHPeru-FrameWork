<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_amigos.php"; 
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
  $titulo= "Nuevo amigos";
  $rpta=CRegistrar_amigos();
  $contenido="Registrar_amigos.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_amigos();
  $rptamo=CBuscar_amigos($_GET["id"]);
  $id=$rptamo["cuerpo"][0]["id"];
  $titulo=$rptamo["cuerpo"][0]["titulo"];
  $imagen=$rptamo["cuerpo"][0]["imagen"];
  $imagen_2=$rptamo["cuerpo"][0]["imagen_2"];
  $email=$rptamo["cuerpo"][0]["email"];
  $orden=$rptamo["cuerpo"][0]["orden"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $fecha=$rptamo["cuerpo"][0]["fecha"];
  $contenido="Actualizar_amigos.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_amigos();
  header("Location: ../amigos");
break;
case "Recuperar":
  $rpta=CRecuperar_amigos();
break;
case "Listar":
       $titulo="Listar amigos";
       $data=CListar_amigos();
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
      $Listar_amigos=$cix->ImprimeTableP("tablaamigos",$data,"?","?",10,$page,5);
   // $Listar_amigos=$cix->ImprimeTablePOB("tablaamigos",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_amigos.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_amigos=CListadoSimple_amigos();
break;
case "Buscar":
 $rpta=CBuscar_amigos();
break;
case "Nuevo":
 $titulo= "Nuevo amigos";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_amigos.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_amigos($_GET["id"]);
 $id=$rptamo["cuerpo"][0]["id"];
 $titulo=$rptamo["cuerpo"][0]["titulo"];
 $imagen=$rptamo["cuerpo"][0]["imagen"];
 $imagen_2=$rptamo["cuerpo"][0]["imagen_2"];
 $email=$rptamo["cuerpo"][0]["email"];
 $orden=$rptamo["cuerpo"][0]["orden"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $fecha=$rptamo["cuerpo"][0]["fecha"];
 $titulo= "Actualizar amigos";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_amigos.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>