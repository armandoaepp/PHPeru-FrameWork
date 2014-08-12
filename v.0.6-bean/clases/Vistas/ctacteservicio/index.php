<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_ctacteservicio.php"; 
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
  $titulo= "Nuevo ctacteservicio";
  $rpta=CRegistrar_ctacteservicio();
  $contenido="Registrar_ctacteservicio.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_ctacteservicio();
  $rptamo=CBuscar_ctacteservicio($_GET["id"]);
  $nSerCodigo=$rptamo["cuerpo"][0]["nSerCodigo"];
  $nBieCodigo=$rptamo["cuerpo"][0]["nBieCodigo"];
  $nActCodigo=$rptamo["cuerpo"][0]["nActCodigo"];
  $nSerImporte=$rptamo["cuerpo"][0]["nSerImporte"];
  $nMonCodigo=$rptamo["cuerpo"][0]["nMonCodigo"];
  $nSerAfecto=$rptamo["cuerpo"][0]["nSerAfecto"];
  $nSerTipo=$rptamo["cuerpo"][0]["nSerTipo"];
  $nSerModalidad=$rptamo["cuerpo"][0]["nSerModalidad"];
  $fSerTasa=$rptamo["cuerpo"][0]["fSerTasa"];
  $nSerPeriodicidad=$rptamo["cuerpo"][0]["nSerPeriodicidad"];
  $nUniOrgCodigo=$rptamo["cuerpo"][0]["nUniOrgCodigo"];
  $nPrdCodigo=$rptamo["cuerpo"][0]["nPrdCodigo"];
  $contenido="Actualizar_ctacteservicio.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_ctacteservicio();
  header("Location: ../ctacteservicio");
break;
case "Recuperar":
  $rpta=CRecuperar_ctacteservicio();
break;
case "Listar":
       $titulo="Listar ctacteservicio";
       $data=CListar_ctacteservicio();
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
      $Listar_ctacteservicio=$cix->ImprimeTableP("tablactacteservicio",$data,"?","?",10,$page,5);
   // $Listar_ctacteservicio=$cix->ImprimeTablePOB("tablactacteservicio",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_ctacteservicio.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_ctacteservicio=CListadoSimple_ctacteservicio();
break;
case "Buscar":
 $rpta=CBuscar_ctacteservicio();
break;
case "Nuevo":
 $titulo= "Nuevo ctacteservicio";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_ctacteservicio.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_ctacteservicio($_GET["id"]);
 $nSerCodigo=$rptamo["cuerpo"][0]["nSerCodigo"];
 $nBieCodigo=$rptamo["cuerpo"][0]["nBieCodigo"];
 $nActCodigo=$rptamo["cuerpo"][0]["nActCodigo"];
 $nSerImporte=$rptamo["cuerpo"][0]["nSerImporte"];
 $nMonCodigo=$rptamo["cuerpo"][0]["nMonCodigo"];
 $nSerAfecto=$rptamo["cuerpo"][0]["nSerAfecto"];
 $nSerTipo=$rptamo["cuerpo"][0]["nSerTipo"];
 $nSerModalidad=$rptamo["cuerpo"][0]["nSerModalidad"];
 $fSerTasa=$rptamo["cuerpo"][0]["fSerTasa"];
 $nSerPeriodicidad=$rptamo["cuerpo"][0]["nSerPeriodicidad"];
 $nUniOrgCodigo=$rptamo["cuerpo"][0]["nUniOrgCodigo"];
 $nPrdCodigo=$rptamo["cuerpo"][0]["nPrdCodigo"];
 $titulo= "Actualizar ctacteservicio";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_ctacteservicio.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>