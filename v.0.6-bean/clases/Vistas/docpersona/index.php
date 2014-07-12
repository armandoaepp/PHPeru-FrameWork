<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docpersona.php"; 
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
  $titulo= "Nuevo docpersona";
  $rpta=CRegistrar_docpersona();
  $contenido="Registrar_docpersona.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docpersona();
  $rptamo=CBuscar_docpersona($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $nDocPerTipo=$rptamo["cuerpo"][0]["nDocPerTipo"];
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerRelacion=$rptamo["cuerpo"][0]["nPerRelacion"];
  $nDocTipo=$rptamo["cuerpo"][0]["nDocTipo"];
  $contenido="Actualizar_docpersona.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docpersona();
  header("Location: ../docpersona");
break;
case "Recuperar":
  $rpta=CRecuperar_docpersona();
break;
case "Listar":
       $titulo="Listar docpersona";
       $data=CListar_docpersona();
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
      $Listar_docpersona=$cix->ImprimeTableP("tabladocpersona",$data,"?","?",10,$page,5);
   // $Listar_docpersona=$cix->ImprimeTablePOB("tabladocpersona",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docpersona.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docpersona=CListadoSimple_docpersona();
break;
case "Buscar":
 $rpta=CBuscar_docpersona();
break;
case "Nuevo":
 $titulo= "Nuevo docpersona";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docpersona.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docpersona($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $nDocPerTipo=$rptamo["cuerpo"][0]["nDocPerTipo"];
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerRelacion=$rptamo["cuerpo"][0]["nPerRelacion"];
 $nDocTipo=$rptamo["cuerpo"][0]["nDocTipo"];
 $titulo= "Actualizar docpersona";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docpersona.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>