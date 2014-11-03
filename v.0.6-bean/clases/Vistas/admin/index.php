<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_admin.php"; 
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
  $titulo= "Nuevo admin";
  $rpta=CRegistrar_admin();
  $contenido="Registrar_admin.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_admin();
  $rptamo=CBuscar_admin($_GET["id"]);
  $idadmin=$rptamo["cuerpo"][0]["idadmin"];
  $usertrans=$rptamo["cuerpo"][0]["usertrans"];
  $clavetrans=$rptamo["cuerpo"][0]["clavetrans"];
  $contenido="Actualizar_admin.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_admin();
  header("Location: ../admin");
break;
case "Recuperar":
  $rpta=CRecuperar_admin();
break;
case "Listar":
       $titulo="Listar admin";
       $data=CListar_admin();
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
      $Listar_admin=$cix->ImprimeTableP("tablaadmin",$data,"?","?",10,$page,5);
   // $Listar_admin=$cix->ImprimeTablePOB("tablaadmin",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_admin.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_admin=CListadoSimple_admin();
break;
case "Buscar":
 $rpta=CBuscar_admin();
break;
case "Nuevo":
 $titulo= "Nuevo admin";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_admin.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_admin($_GET["id"]);
 $idadmin=$rptamo["cuerpo"][0]["idadmin"];
 $usertrans=$rptamo["cuerpo"][0]["usertrans"];
 $clavetrans=$rptamo["cuerpo"][0]["clavetrans"];
 $titulo= "Actualizar admin";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_admin.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>