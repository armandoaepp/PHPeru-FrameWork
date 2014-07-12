<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_doccontenido.php"; 
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
  $titulo= "Nuevo doccontenido";
  $rpta=CRegistrar_doccontenido();
  $contenido="Registrar_doccontenido.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_doccontenido();
  $rptamo=CBuscar_doccontenido($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $nDocParCodigo=$rptamo["cuerpo"][0]["nDocParCodigo"];
  $nDocParClase=$rptamo["cuerpo"][0]["nDocParClase"];
  $cDocConContenido=$rptamo["cuerpo"][0]["cDocConContenido"];
  $nDocConEstado=$rptamo["cuerpo"][0]["nDocConEstado"];
  $contenido="Actualizar_doccontenido.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_doccontenido();
  header("Location: ../doccontenido");
break;
case "Recuperar":
  $rpta=CRecuperar_doccontenido();
break;
case "Listar":
       $titulo="Listar doccontenido";
       $data=CListar_doccontenido();
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
      $Listar_doccontenido=$cix->ImprimeTableP("tabladoccontenido",$data,"?","?",10,$page,5);
   // $Listar_doccontenido=$cix->ImprimeTablePOB("tabladoccontenido",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_doccontenido.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_doccontenido=CListadoSimple_doccontenido();
break;
case "Buscar":
 $rpta=CBuscar_doccontenido();
break;
case "Nuevo":
 $titulo= "Nuevo doccontenido";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_doccontenido.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_doccontenido($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $nDocParCodigo=$rptamo["cuerpo"][0]["nDocParCodigo"];
 $nDocParClase=$rptamo["cuerpo"][0]["nDocParClase"];
 $cDocConContenido=$rptamo["cuerpo"][0]["cDocConContenido"];
 $nDocConEstado=$rptamo["cuerpo"][0]["nDocConEstado"];
 $titulo= "Actualizar doccontenido";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_doccontenido.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>