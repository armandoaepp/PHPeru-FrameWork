<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_parimagen.php"; 
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
  $titulo= "Nuevo parimagen";
  $rpta=CRegistrar_parimagen();
  $contenido="Registrar_parimagen.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_parimagen();
  $rptamo=CBuscar_parimagen($_GET["id"]);
  $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
  $nParClase=$rptamo["cuerpo"][0]["nParClase"];
  $nParImgTipo=$rptamo["cuerpo"][0]["nParImgTipo"];
  $cParImgRuta=$rptamo["cuerpo"][0]["cParImgRuta"];
  $cParImgGlosa=$rptamo["cuerpo"][0]["cParImgGlosa"];
  $nParImgEstado=$rptamo["cuerpo"][0]["nParImgEstado"];
  $contenido="Actualizar_parimagen.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_parimagen();
  header("Location: ../parimagen");
break;
case "Recuperar":
  $rpta=CRecuperar_parimagen();
break;
case "Listar":
       $titulo="Listar parimagen";
       $data=CListar_parimagen();
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
      $Listar_parimagen=$cix->ImprimeTableP("tablaparimagen",$data,"?","?",10,$page,5);
   // $Listar_parimagen=$cix->ImprimeTablePOB("tablaparimagen",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_parimagen.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_parimagen=CListadoSimple_parimagen();
break;
case "Buscar":
 $rpta=CBuscar_parimagen();
break;
case "Nuevo":
 $titulo= "Nuevo parimagen";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_parimagen.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_parimagen($_GET["id"]);
 $nParCodigo=$rptamo["cuerpo"][0]["nParCodigo"];
 $nParClase=$rptamo["cuerpo"][0]["nParClase"];
 $nParImgTipo=$rptamo["cuerpo"][0]["nParImgTipo"];
 $cParImgRuta=$rptamo["cuerpo"][0]["cParImgRuta"];
 $cParImgGlosa=$rptamo["cuerpo"][0]["cParImgGlosa"];
 $nParImgEstado=$rptamo["cuerpo"][0]["nParImgEstado"];
 $titulo= "Actualizar parimagen";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_parimagen.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>