<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_user.php"; 
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
  $titulo= "Nuevo user";
  $rpta=CRegistrar_user();
  $contenido="Registrar_user.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_user();
  $rptamo=CBuscar_user($_GET["id"]);
  $UserId=$rptamo["cuerpo"][0]["UserId"];
  $UsueNombre=$rptamo["cuerpo"][0]["UsueNombre"];
  $UserEmail=$rptamo["cuerpo"][0]["UserEmail"];
  $contenido="Actualizar_user.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_user();
  header("Location: ../user");
break;
case "Recuperar":
  $rpta=CRecuperar_user();
break;
case "Listar":
       $titulo="Listar user";
       $data=CListar_user();
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
      $Listar_user=$cix->ImprimeTableP("tablauser",$data,"?","?",10,$page,5);
   // $Listar_user=$cix->ImprimeTablePOB("tablauser",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_user.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_user=CListadoSimple_user();
break;
case "Buscar":
 $rpta=CBuscar_user();
break;
case "Nuevo":
 $titulo= "Nuevo user";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_user.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_user($_GET["id"]);
 $UserId=$rptamo["cuerpo"][0]["UserId"];
 $UsueNombre=$rptamo["cuerpo"][0]["UsueNombre"];
 $UserEmail=$rptamo["cuerpo"][0]["UserEmail"];
 $titulo= "Actualizar user";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_user.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>