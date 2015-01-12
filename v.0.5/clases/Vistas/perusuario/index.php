<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perusuario.php"; 
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
  $titulo= "Nuevo perusuario";
  $rpta=CRegistrar_perusuario();
  $contenido="Registrar_perusuario.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perusuario();
  $rptamo=CBuscar_perusuario($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $cPerUsuCodigo=$rptamo["cuerpo"][0]["cPerUsuCodigo"];
  $cPerUsuClave=$rptamo["cuerpo"][0]["cPerUsuClave"];
  $nPerUsuEstado=$rptamo["cuerpo"][0]["nPerUsuEstado"];
  $contenido="Actualizar_perusuario.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perusuario();
  header("Location: ../perusuario");
break;
case "Recuperar":
  $rpta=CRecuperar_perusuario();
break;
case "Listar":
       $titulo="Listar perusuario";
       $data=CListar_perusuario();
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
      $Listar_perusuario=$cix->ImprimeTableP("tablaperusuario",$data,"?","?",10,$page,5);
   // $Listar_perusuario=$cix->ImprimeTablePOB("tablaperusuario",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perusuario.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perusuario=CListadoSimple_perusuario();
break;
case "Buscar":
 $rpta=CBuscar_perusuario();
break;
case "Nuevo":
 $titulo= "Nuevo perusuario";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perusuario.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perusuario($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $cPerUsuCodigo=$rptamo["cuerpo"][0]["cPerUsuCodigo"];
 $cPerUsuClave=$rptamo["cuerpo"][0]["cPerUsuClave"];
 $nPerUsuEstado=$rptamo["cuerpo"][0]["nPerUsuEstado"];
 $titulo= "Actualizar perusuario";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perusuario.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>