<div id="divActualizar_solicitud">
<form id="frmActualizar_solicitud" name="frmRegistrar_solicitud" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Solicitud</legend>
<fieldset><label for="idsolicitud_">idsolicitud : </label><input type="text" name="idsolicitud_" id="idsolicitud_" value="<?php echo $idsolicitud;?>"/></fieldset>
<fieldset><label for="fecha_ini_">fecha_ini : </label><input type="text" name="fecha_ini_" id="fecha_ini_" value="<?php echo $fecha_ini;?>"/></fieldset>
<fieldset><label for="fecha_fin_">fecha_fin : </label><input type="text" name="fecha_fin_" id="fecha_fin_" value="<?php echo $fecha_fin;?>"/></fieldset>
<fieldset><label for="peso_">peso : </label><input type="text" name="peso_" id="peso_" value="<?php echo $peso;?>"/></fieldset>
<fieldset><label for="volumen_">volumen : </label><input type="text" name="volumen_" id="volumen_" value="<?php echo $volumen;?>"/></fieldset>
<fieldset><label for="direccion_origen_">direccion_origen : </label><input type="text" name="direccion_origen_" id="direccion_origen_" value="<?php echo $direccion_origen;?>"/></fieldset>
<fieldset><label for="ref_dirorigen_">ref_dirorigen : </label><input type="text" name="ref_dirorigen_" id="ref_dirorigen_" value="<?php echo $ref_dirorigen;?>"/></fieldset>
<fieldset><label for="direccion_destino_">direccion_destino : </label><input type="text" name="direccion_destino_" id="direccion_destino_" value="<?php echo $direccion_destino;?>"/></fieldset>
<fieldset><label for="ref_dirdestino_">ref_dirdestino : </label><input type="text" name="ref_dirdestino_" id="ref_dirdestino_" value="<?php echo $ref_dirdestino;?>"/></fieldset>
<fieldset><label for="puntuacion_">puntuacion : </label><input type="text" name="puntuacion_" id="puntuacion_" value="<?php echo $puntuacion;?>"/></fieldset>
<fieldset><label for="importe_">importe : </label><input type="text" name="importe_" id="importe_" value="<?php echo $importe;?>"/></fieldset>
<fieldset><label for="comision_">comision : </label><input type="text" name="comision_" id="comision_" value="<?php echo $comision;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset><label for="fechareg_">fechareg : </label><input type="text" name="fechareg_" id="fechareg_" value="<?php echo $fechareg;?>"/></fieldset>
<fieldset><label for="idusuario_">idusuario : </label><input type="text" name="idusuario_" id="idusuario_" value="<?php echo $idusuario;?>"/></fieldset>
<fieldset><label for="tipopago_">tipopago : </label><input type="text" name="tipopago_" id="tipopago_" value="<?php echo $tipopago;?>"/></fieldset>
<fieldset><label for="tipotiempo_">tipotiempo : </label><input type="text" name="tipotiempo_" id="tipotiempo_" value="<?php echo $tipotiempo;?>"/></fieldset>
<fieldset><label for="cantiempo_">cantiempo : </label><input type="text" name="cantiempo_" id="cantiempo_" value="<?php echo $cantiempo;?>"/></fieldset>
<fieldset><label for="ubigeo_origen_">ubigeo_origen : </label><input type="text" name="ubigeo_origen_" id="ubigeo_origen_" value="<?php echo $ubigeo_origen;?>"/></fieldset>
<fieldset><label for="ubigeo_destino_">ubigeo_destino : </label><input type="text" name="ubigeo_destino_" id="ubigeo_destino_" value="<?php echo $ubigeo_destino;?>"/></fieldset>
<fieldset><label for="idoperador_">idoperador : </label><input type="text" name="idoperador_" id="idoperador_" value="<?php echo $idoperador;?>"/></fieldset>
<fieldset><label for="descripcion_">descripcion : </label><input type="text" name="descripcion_" id="descripcion_" value="<?php echo $descripcion;?>"/></fieldset>
<fieldset><label for="idproducto_">idproducto : </label><input type="text" name="idproducto_" id="idproducto_" value="<?php echo $idproducto;?>"/></fieldset>
<fieldset><label for="idvehiculo_">idvehiculo : </label><input type="text" name="idvehiculo_" id="idvehiculo_" value="<?php echo $idvehiculo;?>"/></fieldset>
<fieldset><label for="oferta_inicial_">oferta_inicial : </label><input type="text" name="oferta_inicial_" id="oferta_inicial_" value="<?php echo $oferta_inicial;?>"/></fieldset>
<fieldset><label for="urgente_">urgente : </label><input type="text" name="urgente_" id="urgente_" value="<?php echo $urgente;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>