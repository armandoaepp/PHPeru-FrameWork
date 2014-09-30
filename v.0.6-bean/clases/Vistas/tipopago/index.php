<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_tipopago.php"; 
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
  $titulo= "Nuevo tipopago";
  $rpta=CRegistrar_tipopago();
  $contenido="Registrar_tipopago.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_tipopago();
  $rptamo=CBuscar_tipopago($_GET["id"]);
  $id_tipo_pago=$rptamo["cuerpo"][0]["id_tipo_pago"];
  $tipo_pago=$rptamo["cuerpo"][0]["tipo_pago"];
  $estado=$rptamo["cuerpo"][0]["estado"];
  $contenido="Actualizar_tipopago.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_tipopago();
  header("Location: ../tipopago");
break;
case "Recuperar":
  $rpta=CRecuperar_tipopago();
break;
case "Listar":
       $titulo="Listar tipopago";
       $data=CListar_tipopago();
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
      $Listar_tipopago=$cix->ImprimeTableP("tablatipopago",$data,"?","?",10,$page,5);
   // $Listar_tipopago=$cix->ImprimeTablePOB("tablatipopago",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_tipopago.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_tipopago=CListadoSimple_tipopago();
break;
case "Buscar":
 $rpta=CBuscar_tipopago();
break;
case "Nuevo":
 $titulo= "Nuevo tipopago";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_tipopago.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_tipopago($_GET["id"]);
 $id_tipo_pago=$rptamo["cuerpo"][0]["id_tipo_pago"];
 $tipo_pago=$rptamo["cuerpo"][0]["tipo_pago"];
 $estado=$rptamo["cuerpo"][0]["estado"];
 $titulo= "Actualizar tipopago";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_tipopago.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>