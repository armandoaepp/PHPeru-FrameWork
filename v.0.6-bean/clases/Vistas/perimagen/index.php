<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perimagen.php"; 
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
  $titulo= "Nuevo perimagen";
  $rpta=CRegistrar_perimagen();
  $contenido="Registrar_perimagen.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perimagen();
  $rptamo=CBuscar_perimagen($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $cPerRuta=$rptamo["cuerpo"][0]["cPerRuta"];
  $nPerTipo=$rptamo["cuerpo"][0]["nPerTipo"];
  $nPerEstado=$rptamo["cuerpo"][0]["nPerEstado"];
  $contenido="Actualizar_perimagen.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perimagen();
  header("Location: ../perimagen");
break;
case "Recuperar":
  $rpta=CRecuperar_perimagen();
break;
case "Listar":
       $titulo="Listar perimagen";
       $data=CListar_perimagen();
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
      $Listar_perimagen=$cix->ImprimeTableP("tablaperimagen",$data,"?","?",10,$page,5);
   // $Listar_perimagen=$cix->ImprimeTablePOB("tablaperimagen",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perimagen.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perimagen=CListadoSimple_perimagen();
break;
case "Buscar":
 $rpta=CBuscar_perimagen();
break;
case "Nuevo":
 $titulo= "Nuevo perimagen";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perimagen.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perimagen($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $cPerRuta=$rptamo["cuerpo"][0]["cPerRuta"];
 $nPerTipo=$rptamo["cuerpo"][0]["nPerTipo"];
 $nPerEstado=$rptamo["cuerpo"][0]["nPerEstado"];
 $titulo= "Actualizar perimagen";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perimagen.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>