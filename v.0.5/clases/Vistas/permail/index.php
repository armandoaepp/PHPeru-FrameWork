<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_permail.php"; 
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
  $titulo= "Nuevo permail";
  $rpta=CRegistrar_permail();
  $contenido="Registrar_permail.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_permail();
  $rptamo=CBuscar_permail($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerMailItem=$rptamo["cuerpo"][0]["nPerMailItem"];
  $cPerMail=$rptamo["cuerpo"][0]["cPerMail"];
  $nPerMailEstado=$rptamo["cuerpo"][0]["nPerMailEstado"];
  $contenido="Actualizar_permail.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_permail();
  header("Location: ../permail");
break;
case "Recuperar":
  $rpta=CRecuperar_permail();
break;
case "Listar":
       $titulo="Listar permail";
       $data=CListar_permail();
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
      $Listar_permail=$cix->ImprimeTableP("tablapermail",$data,"?","?",10,$page,5);
   // $Listar_permail=$cix->ImprimeTablePOB("tablapermail",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_permail.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_permail=CListadoSimple_permail();
break;
case "Buscar":
 $rpta=CBuscar_permail();
break;
case "Nuevo":
 $titulo= "Nuevo permail";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_permail.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_permail($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerMailItem=$rptamo["cuerpo"][0]["nPerMailItem"];
 $cPerMail=$rptamo["cuerpo"][0]["cPerMail"];
 $nPerMailEstado=$rptamo["cuerpo"][0]["nPerMailEstado"];
 $titulo= "Actualizar permail";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_permail.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>