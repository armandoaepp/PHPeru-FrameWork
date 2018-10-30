<div id="divActualizar_carrera">
<form id="frmActualizar_carrera" name="frmRegistrar_carrera" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Carrera</legend>
<fieldset><label for="id_">id : </label><input type="text" name="id_" id="id_" value="<?php echo $id;?>"/></fieldset>
<fieldset><label for="titulo_">titulo : </label><input type="text" name="titulo_" id="titulo_" value="<?php echo $titulo;?>"/></fieldset>
<fieldset><label for="descripcion_">descripcion : </label><input type="text" name="descripcion_" id="descripcion_" value="<?php echo $descripcion;?>"/></fieldset>
<fieldset><label for="slide_">slide : </label><input type="text" name="slide_" id="slide_" value="<?php echo $slide;?>"/></fieldset>
<fieldset><label for="imagen_">imagen : </label><input type="text" name="imagen_" id="imagen_" value="<?php echo $imagen;?>"/></fieldset>
<fieldset><label for="presentacion_">presentacion : </label><input type="text" name="presentacion_" id="presentacion_" value="<?php echo $presentacion;?>"/></fieldset>
<fieldset><label for="porque_">porque : </label><input type="text" name="porque_" id="porque_" value="<?php echo $porque;?>"/></fieldset>
<fieldset><label for="donde_">donde : </label><input type="text" name="donde_" id="donde_" value="<?php echo $donde;?>"/></fieldset>
<fieldset><label for="certificacion_">certificacion : </label><input type="text" name="certificacion_" id="certificacion_" value="<?php echo $certificacion;?>"/></fieldset>
<fieldset><label for="titulos_">titulos : </label><input type="text" name="titulos_" id="titulos_" value="<?php echo $titulos;?>"/></fieldset>
<fieldset><label for="inversion_">inversion : </label><input type="text" name="inversion_" id="inversion_" value="<?php echo $inversion;?>"/></fieldset>
<fieldset><label for="titulacion_">titulacion : </label><input type="text" name="titulacion_" id="titulacion_" value="<?php echo $titulacion;?>"/></fieldset>
<fieldset><label for="detalleduracion_">detalleduracion : </label><input type="text" name="detalleduracion_" id="detalleduracion_" value="<?php echo $detalleduracion;?>"/></fieldset>
<fieldset><label for="detalledia_">detalledia : </label><input type="text" name="detalledia_" id="detalledia_" value="<?php echo $detalledia;?>"/></fieldset>
<fieldset><label for="detallehorario_">detallehorario : </label><input type="text" name="detallehorario_" id="detallehorario_" value="<?php echo $detallehorario;?>"/></fieldset>
<fieldset><label for="detallelugar_">detallelugar : </label><input type="text" name="detallelugar_" id="detallelugar_" value="<?php echo $detallelugar;?>"/></fieldset>
<fieldset><label for="detalleprecio_">detalleprecio : </label><input type="text" name="detalleprecio_" id="detalleprecio_" value="<?php echo $detalleprecio;?>"/></fieldset>
<fieldset><label for="detalleequipos_">detalleequipos : </label><input type="text" name="detalleequipos_" id="detalleequipos_" value="<?php echo $detalleequipos;?>"/></fieldset>
<fieldset><label for="detalleconsultas_">detalleconsultas : </label><input type="text" name="detalleconsultas_" id="detalleconsultas_" value="<?php echo $detalleconsultas;?>"/></fieldset>
<fieldset><label for="detalledirigido_">detalledirigido : </label><input type="text" name="detalledirigido_" id="detalledirigido_" value="<?php echo $detalledirigido;?>"/></fieldset>
<fieldset><label for="aquien_">aquien : </label><input type="text" name="aquien_" id="aquien_" value="<?php echo $aquien;?>"/></fieldset>
<fieldset><label for="temas_">temas : </label><input type="text" name="temas_" id="temas_" value="<?php echo $temas;?>"/></fieldset>
<fieldset><label for="nombreseo_">nombreseo : </label><input type="text" name="nombreseo_" id="nombreseo_" value="<?php echo $nombreseo;?>"/></fieldset>
<fieldset><label for="orden_">orden : </label><input type="text" name="orden_" id="orden_" value="<?php echo $orden;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset><label for="fecha_">fecha : </label><input type="text" name="fecha_" id="fecha_" value="<?php echo $fecha;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>