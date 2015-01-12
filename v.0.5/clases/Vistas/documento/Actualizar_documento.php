<div id="divActualizar_documento">
<form id="frmActualizar_documento" name="frmRegistrar_documento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Documento</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="dDocFecha_">dDocFecha : </label><input type="text" name="dDocFecha_" id="dDocFecha_" value="<?php echo $dDocFecha;?>"/></fieldset>
<fieldset><label for="cDocObservacion_">cDocObservacion : </label><input type="text" name="cDocObservacion_" id="cDocObservacion_" value="<?php echo $cDocObservacion;?>"/></fieldset>
<fieldset><label for="nDocTipo_">nDocTipo : </label><input type="text" name="nDocTipo_" id="nDocTipo_" value="<?php echo $nDocTipo;?>"/></fieldset>
<fieldset><label for="nDocEstado_">nDocEstado : </label><input type="text" name="nDocEstado_" id="nDocEstado_" value="<?php echo $nDocEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>