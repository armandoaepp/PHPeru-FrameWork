<div id="divRegistrar_negociacion">
<form id="frmRegistrar_negociacion" name="frmRegistrar_negociacion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Negociacion</legend>
<fieldset><label for="idnegociacion_">idnegociacion : </label><input type="text" name="idnegociacion_" id="idnegociacion_" value=""/></fieldset>
<fieldset><label for="importe_">importe : </label><input type="text" name="importe_" id="importe_" value=""/></fieldset>
<fieldset><label for="fecha_">fecha : </label><input type="text" name="fecha_" id="fecha_" value=""/></fieldset>
<fieldset><label for="okcliente_">okcliente : </label><input type="text" name="okcliente_" id="okcliente_" value=""/></fieldset>
<fieldset><label for="oktransp_">oktransp : </label><input type="text" name="oktransp_" id="oktransp_" value=""/></fieldset>
<fieldset><label for="idsolicitud_">idsolicitud : </label><input type="text" name="idsolicitud_" id="idsolicitud_" value=""/></fieldset>
<fieldset><label for="idoperador_">idoperador : </label><input type="text" name="idoperador_" id="idoperador_" value=""/></fieldset>
<fieldset><label for="idusuario_">idusuario : </label><input type="text" name="idusuario_" id="idusuario_" value=""/></fieldset>
<fieldset><label for="idvehiculo_">idvehiculo : </label><input type="text" name="idvehiculo_" id="idvehiculo_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>