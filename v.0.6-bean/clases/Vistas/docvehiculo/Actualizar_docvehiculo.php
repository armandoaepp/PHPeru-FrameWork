<div id="divActualizar_docvehiculo">
<form id="frmActualizar_docvehiculo" name="frmRegistrar_docvehiculo" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Docvehiculo</legend>
<fieldset><label for="iddocvehiculo_">iddocvehiculo : </label><input type="text" name="iddocvehiculo_" id="iddocvehiculo_" value="<?php echo $iddocvehiculo;?>"/></fieldset>
<fieldset><label for="idvehiculo_">idvehiculo : </label><input type="text" name="idvehiculo_" id="idvehiculo_" value="<?php echo $idvehiculo;?>"/></fieldset>
<fieldset><label for="idtipodocumento_">idtipodocumento : </label><input type="text" name="idtipodocumento_" id="idtipodocumento_" value="<?php echo $idtipodocumento;?>"/></fieldset>
<fieldset><label for="item_">item : </label><input type="text" name="item_" id="item_" value="<?php echo $item;?>"/></fieldset>
<fieldset><label for="fecharegistro_">fecharegistro : </label><input type="text" name="fecharegistro_" id="fecharegistro_" value="<?php echo $fecharegistro;?>"/></fieldset>
<fieldset><label for="fechaemision_">fechaemision : </label><input type="text" name="fechaemision_" id="fechaemision_" value="<?php echo $fechaemision;?>"/></fieldset>
<fieldset><label for="fechacaducidad_">fechacaducidad : </label><input type="text" name="fechacaducidad_" id="fechacaducidad_" value="<?php echo $fechacaducidad;?>"/></fieldset>
<fieldset><label for="archivo_">archivo : </label><input type="text" name="archivo_" id="archivo_" value="<?php echo $archivo;?>"/></fieldset>
<fieldset><label for="glosa_">glosa : </label><input type="text" name="glosa_" id="glosa_" value="<?php echo $glosa;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>