<div id="divRegistrar_docvehiculo">
<form id="frmRegistrar_docvehiculo" name="frmRegistrar_docvehiculo" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Docvehiculo</legend>
<fieldset><label for="iddocvehiculo_">iddocvehiculo : </label><input type="text" name="iddocvehiculo_" id="iddocvehiculo_" value=""/></fieldset>
<fieldset><label for="idvehiculo_">idvehiculo : </label><input type="text" name="idvehiculo_" id="idvehiculo_" value=""/></fieldset>
<fieldset><label for="idtipodocumento_">idtipodocumento : </label><input type="text" name="idtipodocumento_" id="idtipodocumento_" value=""/></fieldset>
<fieldset><label for="item_">item : </label><input type="text" name="item_" id="item_" value=""/></fieldset>
<fieldset><label for="fecharegistro_">fecharegistro : </label><input type="text" name="fecharegistro_" id="fecharegistro_" value=""/></fieldset>
<fieldset><label for="fechaemision_">fechaemision : </label><input type="text" name="fechaemision_" id="fechaemision_" value=""/></fieldset>
<fieldset><label for="fechacaducidad_">fechacaducidad : </label><input type="text" name="fechacaducidad_" id="fechacaducidad_" value=""/></fieldset>
<fieldset><label for="archivo_">archivo : </label><input type="text" name="archivo_" id="archivo_" value=""/></fieldset>
<fieldset><label for="glosa_">glosa : </label><input type="text" name="glosa_" id="glosa_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>