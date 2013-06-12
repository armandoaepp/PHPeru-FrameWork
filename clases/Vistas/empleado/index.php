<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_empleado.php"; 
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
  $rpta=CRegistrar_empleado();
  $contenido="Registrar_empleado.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_empleado();
  $rptamo=CBuscar_empleado($_GET["id"]);
  $ID_EMPLEADOS=$rptamo["cuerpo"][0]["ID_EMPLEADOS"];
  $DNI=$rptamo["cuerpo"][0]["DNI"];
  $NOMBRE=$rptamo["cuerpo"][0]["NOMBRE"];
  $APELLIDO1=$rptamo["cuerpo"][0]["APELLIDO1"];
  $APELLIDO2=$rptamo["cuerpo"][0]["APELLIDO2"];
  $DIRECC1=$rptamo["cuerpo"][0]["DIRECC1"];
  $DIRECC2=$rptamo["cuerpo"][0]["DIRECC2"];
  $CIUDAD=$rptamo["cuerpo"][0]["CIUDAD"];
  $MUNICIPIO=$rptamo["cuerpo"][0]["MUNICIPIO"];
  $COD_POSTAL=$rptamo["cuerpo"][0]["COD_POSTAL"];
  $SEXO=$rptamo["cuerpo"][0]["SEXO"];
  $FECHA_NAC=$rptamo["cuerpo"][0]["FECHA_NAC"];
  $contenido="Actualizar_empleado.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_empleado();
  header("Location: ../empleado");
break;
case "Recuperar":
  $rpta=CRecuperar_empleado();
break;
case "Listar":
       $titulo="Listar empleado";
       $data=CListar_empleado();
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
      $Listar_empleado=$cix->ImprimeTableP("tablaempleado",$data,"?","?",10,$page,5,"tabla");
   // $Listar_empleado=$cix->ImprimeTablePOB("tablaempleado",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_empleado.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_empleado=CListadoSimple_empleado();
break;
case "Buscar":
 $rpta=CBuscar_empleado();
break;
case "Nuevo":
 $titulo= "Nuevo empleado";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_empleado.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_empleado($_GET["id"]);
 $ID_EMPLEADOS=$rptamo["cuerpo"][0]["ID_EMPLEADOS"];
 $DNI=$rptamo["cuerpo"][0]["DNI"];
 $NOMBRE=$rptamo["cuerpo"][0]["NOMBRE"];
 $APELLIDO1=$rptamo["cuerpo"][0]["APELLIDO1"];
 $APELLIDO2=$rptamo["cuerpo"][0]["APELLIDO2"];
 $DIRECC1=$rptamo["cuerpo"][0]["DIRECC1"];
 $DIRECC2=$rptamo["cuerpo"][0]["DIRECC2"];
 $CIUDAD=$rptamo["cuerpo"][0]["CIUDAD"];
 $MUNICIPIO=$rptamo["cuerpo"][0]["MUNICIPIO"];
 $COD_POSTAL=$rptamo["cuerpo"][0]["COD_POSTAL"];
 $SEXO=$rptamo["cuerpo"][0]["SEXO"];
 $FECHA_NAC=$rptamo["cuerpo"][0]["FECHA_NAC"];
 $titulo= "Actualizar empleado";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_empleado.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>