<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_pernatural.php"; 
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
  $titulo= "Nuevo pernatural";
  $rpta=CRegistrar_pernatural();
  $contenido="Registrar_pernatural.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_pernatural();
  $rptamo=CBuscar_pernatural($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $cPerNatApePaterno=$rptamo["cuerpo"][0]["cPerNatApePaterno"];
  $cPerNatApeMaterno=$rptamo["cuerpo"][0]["cPerNatApeMaterno"];
  $nPerNatSexo=$rptamo["cuerpo"][0]["nPerNatSexo"];
  $nPerNatEstCivil=$rptamo["cuerpo"][0]["nPerNatEstCivil"];
  $contenido="Actualizar_pernatural.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_pernatural();
  header("Location: ../pernatural");
break;
case "Recuperar":
  $rpta=CRecuperar_pernatural();
break;
case "Listar":
       $titulo="Listar pernatural";
       $data=CListar_pernatural();
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
      $Listar_pernatural=$cix->ImprimeTableP("tablapernatural",$data,"?","?",10,$page,5);
   // $Listar_pernatural=$cix->ImprimeTablePOB("tablapernatural",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_pernatural.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_pernatural=CListadoSimple_pernatural();
break;
case "Buscar":
 $rpta=CBuscar_pernatural();
break;
case "Nuevo":
 $titulo= "Nuevo pernatural";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_pernatural.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_pernatural($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $cPerNatApePaterno=$rptamo["cuerpo"][0]["cPerNatApePaterno"];
 $cPerNatApeMaterno=$rptamo["cuerpo"][0]["cPerNatApeMaterno"];
 $nPerNatSexo=$rptamo["cuerpo"][0]["nPerNatSexo"];
 $nPerNatEstCivil=$rptamo["cuerpo"][0]["nPerNatEstCivil"];
 $titulo= "Actualizar pernatural";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_pernatural.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>