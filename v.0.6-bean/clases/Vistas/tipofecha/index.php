<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_tipofecha.php"; 
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
  $titulo= "Nuevo tipofecha";
  $rpta=CRegistrar_tipofecha();
  $contenido="Registrar_tipofecha.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_tipofecha();
  $rptamo=CBuscar_tipofecha($_GET["id"]);
  $idtipofecha=$rptamo["cuerpo"][0]["idtipofecha"];
  $tipofecha=$rptamo["cuerpo"][0]["tipofecha"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_tipofecha.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_tipofecha();
  header("Location: ../tipofecha");
break;
case "Recuperar":
  $rpta=CRecuperar_tipofecha();
break;
case "Listar":
       $titulo="Listar tipofecha";
       $data=CListar_tipofecha();
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
      $Listar_tipofecha=$cix->ImprimeTableP("tablatipofecha",$data,"?","?",10,$page,5);
   // $Listar_tipofecha=$cix->ImprimeTablePOB("tablatipofecha",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_tipofecha.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_tipofecha=CListadoSimple_tipofecha();
break;
case "Buscar":
 $rpta=CBuscar_tipofecha();
break;
case "Nuevo":
 $titulo= "Nuevo tipofecha";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_tipofecha.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_tipofecha($_GET["id"]);
 $idtipofecha=$rptamo["cuerpo"][0]["idtipofecha"];
 $tipofecha=$rptamo["cuerpo"][0]["tipofecha"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar tipofecha";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_tipofecha.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>