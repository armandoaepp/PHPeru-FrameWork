<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perjuridica.php"; 
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
  $titulo= "Nuevo perjuridica";
  $rpta=CRegistrar_perjuridica();
  $contenido="Registrar_perjuridica.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perjuridica();
  $rptamo=CBuscar_perjuridica($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerJurRubro=$rptamo["cuerpo"][0]["nPerJurRubro"];
  $cPerJurDescripcion=$rptamo["cuerpo"][0]["cPerJurDescripcion"];
  $nPerEmpresa=$rptamo["cuerpo"][0]["nPerEmpresa"];
  $contenido="Actualizar_perjuridica.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perjuridica();
  header("Location: ../perjuridica");
break;
case "Recuperar":
  $rpta=CRecuperar_perjuridica();
break;
case "Listar":
       $titulo="Listar perjuridica";
       $data=CListar_perjuridica();
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
      $Listar_perjuridica=$cix->ImprimeTableP("tablaperjuridica",$data,"?","?",10,$page,5);
   // $Listar_perjuridica=$cix->ImprimeTablePOB("tablaperjuridica",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perjuridica.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perjuridica=CListadoSimple_perjuridica();
break;
case "Buscar":
 $rpta=CBuscar_perjuridica();
break;
case "Nuevo":
 $titulo= "Nuevo perjuridica";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perjuridica.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perjuridica($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerJurRubro=$rptamo["cuerpo"][0]["nPerJurRubro"];
 $cPerJurDescripcion=$rptamo["cuerpo"][0]["cPerJurDescripcion"];
 $nPerEmpresa=$rptamo["cuerpo"][0]["nPerEmpresa"];
 $titulo= "Actualizar perjuridica";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perjuridica.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>