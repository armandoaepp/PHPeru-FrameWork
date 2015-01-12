<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_cliente.php"; 
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
  $titulo= "Nuevo cliente";
  $rpta=CRegistrar_cliente();
  $contenido="Registrar_cliente.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_cliente();
  $rptamo=CBuscar_cliente($_GET["id"]);
  $ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
  $ClienteNombre=$rptamo["cuerpo"][0]["ClienteNombre"];
  $ClienteRepresentante=$rptamo["cuerpo"][0]["ClienteRepresentante"];
  $ClienteEmail=$rptamo["cuerpo"][0]["ClienteEmail"];
  $ClienteFax=$rptamo["cuerpo"][0]["ClienteFax"];
  $ClienteDireccion=$rptamo["cuerpo"][0]["ClienteDireccion"];
  $ClienteCodigoPostal=$rptamo["cuerpo"][0]["ClienteCodigoPostal"];
  $ClienteNota=$rptamo["cuerpo"][0]["ClienteNota"];
  $ClienteTelefono=$rptamo["cuerpo"][0]["ClienteTelefono"];
  $ClienteMovil=$rptamo["cuerpo"][0]["ClienteMovil"];
  $PaisId=$rptamo["cuerpo"][0]["PaisId"];
  $contenido="Actualizar_cliente.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_cliente();
  header("Location: ../cliente");
break;
case "Recuperar":
  $rpta=CRecuperar_cliente();
break;
case "Listar":
       $titulo="Listar cliente";
       $data=CListar_cliente();
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
      $Listar_cliente=$cix->ImprimeTableP("tablacliente",$data,"?","?",10,$page,5);
   // $Listar_cliente=$cix->ImprimeTablePOB("tablacliente",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_cliente.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_cliente=CListadoSimple_cliente();
break;
case "Buscar":
 $rpta=CBuscar_cliente();
break;
case "Nuevo":
 $titulo= "Nuevo cliente";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_cliente.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_cliente($_GET["id"]);
 $ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
 $ClienteNombre=$rptamo["cuerpo"][0]["ClienteNombre"];
 $ClienteRepresentante=$rptamo["cuerpo"][0]["ClienteRepresentante"];
 $ClienteEmail=$rptamo["cuerpo"][0]["ClienteEmail"];
 $ClienteFax=$rptamo["cuerpo"][0]["ClienteFax"];
 $ClienteDireccion=$rptamo["cuerpo"][0]["ClienteDireccion"];
 $ClienteCodigoPostal=$rptamo["cuerpo"][0]["ClienteCodigoPostal"];
 $ClienteNota=$rptamo["cuerpo"][0]["ClienteNota"];
 $ClienteTelefono=$rptamo["cuerpo"][0]["ClienteTelefono"];
 $ClienteMovil=$rptamo["cuerpo"][0]["ClienteMovil"];
 $PaisId=$rptamo["cuerpo"][0]["PaisId"];
 $titulo= "Actualizar cliente";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_cliente.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>