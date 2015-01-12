<div id="divRegistrar_documento">
<form id="frmRegistrar_documento" name="frmRegistrar_documento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Documento</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value=""/></fieldset>
<fieldset><label for="dDocFecha_">dDocFecha : </label><input type="text" name="dDocFecha_" id="dDocFecha_" value=""/></fieldset>
<fieldset><label for="cDocObservacion_">cDocObservacion : </label><input type="text" name="cDocObservacion_" id="cDocObservacion_" value=""/></fieldset>
<fieldset><label for="nDocTipo_">nDocTipo : </label><input type="text" name="nDocTipo_" id="nDocTipo_" value=""/></fieldset>
<fieldset><label for="nDocEstado_">nDocEstado : </label><input type="text" name="nDocEstado_" id="nDocEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>