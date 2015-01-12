<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perdocumento.php"; 
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
  $titulo= "Nuevo perdocumento";
  $rpta=CRegistrar_perdocumento();
  $contenido="Registrar_perdocumento.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perdocumento();
  $rptamo=CBuscar_perdocumento($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerDocTipo=$rptamo["cuerpo"][0]["nPerDocTipo"];
  $cPerDocNumero=$rptamo["cuerpo"][0]["cPerDocNumero"];
  $dPerDocCaducidad=$rptamo["cuerpo"][0]["dPerDocCaducidad"];
  $nPerDocCategoria=$rptamo["cuerpo"][0]["nPerDocCategoria"];
  $nPerDocEstado=$rptamo["cuerpo"][0]["nPerDocEstado"];
  $contenido="Actualizar_perdocumento.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perdocumento();
  header("Location: ../perdocumento");
break;
case "Recuperar":
  $rpta=CRecuperar_perdocumento();
break;
case "Listar":
       $titulo="Listar perdocumento";
       $data=CListar_perdocumento();
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
      $Listar_perdocumento=$cix->ImprimeTableP("tablaperdocumento",$data,"?","?",10,$page,5);
   // $Listar_perdocumento=$cix->ImprimeTablePOB("tablaperdocumento",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perdocumento.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perdocumento=CListadoSimple_perdocumento();
break;
case "Buscar":
 $rpta=CBuscar_perdocumento();
break;
case "Nuevo":
 $titulo= "Nuevo perdocumento";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perdocumento.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perdocumento($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerDocTipo=$rptamo["cuerpo"][0]["nPerDocTipo"];
 $cPerDocNumero=$rptamo["cuerpo"][0]["cPerDocNumero"];
 $dPerDocCaducidad=$rptamo["cuerpo"][0]["dPerDocCaducidad"];
 $nPerDocCategoria=$rptamo["cuerpo"][0]["nPerDocCategoria"];
 $nPerDocEstado=$rptamo["cuerpo"][0]["nPerDocEstado"];
 $titulo= "Actualizar perdocumento";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perdocumento.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>