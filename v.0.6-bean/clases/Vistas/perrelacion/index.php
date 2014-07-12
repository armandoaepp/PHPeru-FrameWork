<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perrelacion.php"; 
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
  $titulo= "Nuevo perrelacion";
  $rpta=CRegistrar_perrelacion();
  $contenido="Registrar_perrelacion.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perrelacion();
  $rptamo=CBuscar_perrelacion($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerRelTipo=$rptamo["cuerpo"][0]["nPerRelTipo"];
  $cPerJuridica=$rptamo["cuerpo"][0]["cPerJuridica"];
  $dPerRelacion=$rptamo["cuerpo"][0]["dPerRelacion"];
  $cPerObservacion=$rptamo["cuerpo"][0]["cPerObservacion"];
  $nPerRelEstado=$rptamo["cuerpo"][0]["nPerRelEstado"];
  $contenido="Actualizar_perrelacion.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perrelacion();
  header("Location: ../perrelacion");
break;
case "Recuperar":
  $rpta=CRecuperar_perrelacion();
break;
case "Listar":
       $titulo="Listar perrelacion";
       $data=CListar_perrelacion();
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
      $Listar_perrelacion=$cix->ImprimeTableP("tablaperrelacion",$data,"?","?",10,$page,5);
   // $Listar_perrelacion=$cix->ImprimeTablePOB("tablaperrelacion",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perrelacion.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perrelacion=CListadoSimple_perrelacion();
break;
case "Buscar":
 $rpta=CBuscar_perrelacion();
break;
case "Nuevo":
 $titulo= "Nuevo perrelacion";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perrelacion.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perrelacion($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerRelTipo=$rptamo["cuerpo"][0]["nPerRelTipo"];
 $cPerJuridica=$rptamo["cuerpo"][0]["cPerJuridica"];
 $dPerRelacion=$rptamo["cuerpo"][0]["dPerRelacion"];
 $cPerObservacion=$rptamo["cuerpo"][0]["cPerObservacion"];
 $nPerRelEstado=$rptamo["cuerpo"][0]["nPerRelEstado"];
 $titulo= "Actualizar perrelacion";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perrelacion.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>