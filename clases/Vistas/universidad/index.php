<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_universidad.php"; 
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
  $rpta=CRegistrar_universidad();
  $contenido="Registrar_universidad.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_universidad();
  $rptamo=CBuscar_universidad($_GET["id"]);
  $ID_UNIVERSIDAD=$rptamo["cuerpo"][0]["ID_UNIVERSIDAD"];
  $UNIV_COD=$rptamo["cuerpo"][0]["UNIV_COD"];
  $NOMBRE_UNIV=$rptamo["cuerpo"][0]["NOMBRE_UNIV"];
  $CIUDAD=$rptamo["cuerpo"][0]["CIUDAD"];
  $MUNICIPIO=$rptamo["cuerpo"][0]["MUNICIPIO"];
  $COD_POSTAL=$rptamo["cuerpo"][0]["COD_POSTAL"];
  $contenido="Actualizar_universidad.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_universidad();
  header("Location: ../universidad");
break;
case "Recuperar":
  $rpta=CRecuperar_universidad();
break;
case "Listar":
       $titulo="Listar universidad";
       $data=CListar_universidad();
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
      $Listar_universidad=$cix->ImprimeTableP("tablauniversidad",$data,"?","?",10,$page,5,"tabla");
   // $Listar_universidad=$cix->ImprimeTablePOB("tablauniversidad",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_universidad.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_universidad=CListadoSimple_universidad();
break;
case "Buscar":
 $rpta=CBuscar_universidad();
break;
case "Nuevo":
 $titulo= "Nuevo universidad";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_universidad.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_universidad($_GET["id"]);
 $ID_UNIVERSIDAD=$rptamo["cuerpo"][0]["ID_UNIVERSIDAD"];
 $UNIV_COD=$rptamo["cuerpo"][0]["UNIV_COD"];
 $NOMBRE_UNIV=$rptamo["cuerpo"][0]["NOMBRE_UNIV"];
 $CIUDAD=$rptamo["cuerpo"][0]["CIUDAD"];
 $MUNICIPIO=$rptamo["cuerpo"][0]["MUNICIPIO"];
 $COD_POSTAL=$rptamo["cuerpo"][0]["COD_POSTAL"];
 $titulo= "Actualizar universidad";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_universidad.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>