<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_perusuacceso.php"; 
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
  $titulo= "Nuevo perusuacceso";
  $rpta=CRegistrar_perusuacceso();
  $contenido="Registrar_perusuacceso.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_perusuacceso();
  $rptamo=CBuscar_perusuacceso($_GET["id"]);
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerUsuAccGrupo=$rptamo["cuerpo"][0]["nPerUsuAccGrupo"];
  $nPerUsuAccTipo=$rptamo["cuerpo"][0]["nPerUsuAccTipo"];
  $nPerUsuAccObjCodigo=$rptamo["cuerpo"][0]["nPerUsuAccObjCodigo"];
  $nPerUsuAccCodigo=$rptamo["cuerpo"][0]["nPerUsuAccCodigo"];
  $nPerUsuAccPrdCodigo=$rptamo["cuerpo"][0]["nPerUsuAccPrdCodigo"];
  $nPerUsuAccEstado=$rptamo["cuerpo"][0]["nPerUsuAccEstado"];
  $contenido="Actualizar_perusuacceso.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_perusuacceso();
  header("Location: ../perusuacceso");
break;
case "Recuperar":
  $rpta=CRecuperar_perusuacceso();
break;
case "Listar":
       $titulo="Listar perusuacceso";
       $data=CListar_perusuacceso();
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
      $Listar_perusuacceso=$cix->ImprimeTableP("tablaperusuacceso",$data,"?","?",10,$page,5);
   // $Listar_perusuacceso=$cix->ImprimeTablePOB("tablaperusuacceso",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_perusuacceso.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_perusuacceso=CListadoSimple_perusuacceso();
break;
case "Buscar":
 $rpta=CBuscar_perusuacceso();
break;
case "Nuevo":
 $titulo= "Nuevo perusuacceso";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_perusuacceso.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_perusuacceso($_GET["id"]);
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerUsuAccGrupo=$rptamo["cuerpo"][0]["nPerUsuAccGrupo"];
 $nPerUsuAccTipo=$rptamo["cuerpo"][0]["nPerUsuAccTipo"];
 $nPerUsuAccObjCodigo=$rptamo["cuerpo"][0]["nPerUsuAccObjCodigo"];
 $nPerUsuAccCodigo=$rptamo["cuerpo"][0]["nPerUsuAccCodigo"];
 $nPerUsuAccPrdCodigo=$rptamo["cuerpo"][0]["nPerUsuAccPrdCodigo"];
 $nPerUsuAccEstado=$rptamo["cuerpo"][0]["nPerUsuAccEstado"];
 $titulo= "Actualizar perusuacceso";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_perusuacceso.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>