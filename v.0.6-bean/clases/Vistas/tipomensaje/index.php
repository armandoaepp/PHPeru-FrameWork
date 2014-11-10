<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_tipomensaje.php"; 
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
  $titulo= "Nuevo tipomensaje";
  $rpta=CRegistrar_tipomensaje();
  $contenido="Registrar_tipomensaje.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_tipomensaje();
  $rptamo=CBuscar_tipomensaje($_GET["id"]);
  $idtipomensaje=$rptamo["cuerpo"][0]["idtipomensaje"];
  $tipomensaje=$rptamo["cuerpo"][0]["tipomensaje"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_tipomensaje.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_tipomensaje();
  header("Location: ../tipomensaje");
break;
case "Recuperar":
  $rpta=CRecuperar_tipomensaje();
break;
case "Listar":
       $titulo="Listar tipomensaje";
       $data=CListar_tipomensaje();
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
      $Listar_tipomensaje=$cix->ImprimeTableP("tablatipomensaje",$data,"?","?",10,$page,5);
   // $Listar_tipomensaje=$cix->ImprimeTablePOB("tablatipomensaje",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_tipomensaje.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_tipomensaje=CListadoSimple_tipomensaje();
break;
case "Buscar":
 $rpta=CBuscar_tipomensaje();
break;
case "Nuevo":
 $titulo= "Nuevo tipomensaje";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_tipomensaje.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_tipomensaje($_GET["id"]);
 $idtipomensaje=$rptamo["cuerpo"][0]["idtipomensaje"];
 $tipomensaje=$rptamo["cuerpo"][0]["tipomensaje"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar tipomensaje";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_tipomensaje.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>