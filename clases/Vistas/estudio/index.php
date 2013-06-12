<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_estudio.php"; 
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
  $rpta=CRegistrar_estudio();
  $contenido="Registrar_estudio.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_estudio();
  $rptamo=CBuscar_estudio($_GET["id"]);
  $ID_ESTUDIO=$rptamo["cuerpo"][0]["ID_ESTUDIO"];
  $EMPLEADO_DNI=$rptamo["cuerpo"][0]["EMPLEADO_DNI"];
  $UNIVERSIDAD=$rptamo["cuerpo"][0]["UNIVERSIDAD"];
  $AÑO=$rptamo["cuerpo"][0]["AÑO"];
  $GRADO=$rptamo["cuerpo"][0]["GRADO"];
  $ESPECIALIDAD=$rptamo["cuerpo"][0]["ESPECIALIDAD"];
  $contenido="Actualizar_estudio.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_estudio();
  header("Location: ../estudio");
break;
case "Recuperar":
  $rpta=CRecuperar_estudio();
break;
case "Listar":
       $titulo="Listar estudio";
       $data=CListar_estudio();
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
      $Listar_estudio=$cix->ImprimeTableP("tablaestudio",$data,"?","?",10,$page,5,"tabla");
   // $Listar_estudio=$cix->ImprimeTablePOB("tablaestudio",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_estudio.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_estudio=CListadoSimple_estudio();
break;
case "Buscar":
 $rpta=CBuscar_estudio();
break;
case "Nuevo":
 $titulo= "Nuevo estudio";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_estudio.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_estudio($_GET["id"]);
 $ID_ESTUDIO=$rptamo["cuerpo"][0]["ID_ESTUDIO"];
 $EMPLEADO_DNI=$rptamo["cuerpo"][0]["EMPLEADO_DNI"];
 $UNIVERSIDAD=$rptamo["cuerpo"][0]["UNIVERSIDAD"];
 $AÑO=$rptamo["cuerpo"][0]["AÑO"];
 $GRADO=$rptamo["cuerpo"][0]["GRADO"];
 $ESPECIALIDAD=$rptamo["cuerpo"][0]["ESPECIALIDAD"];
 $titulo= "Actualizar estudio";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_estudio.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>