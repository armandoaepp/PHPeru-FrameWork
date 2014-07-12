<div id="divRegistrar_doccomprobante">
<form id="frmRegistrar_doccomprobante" name="frmRegistrar_doccomprobante" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Doccomprobante</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value=""/></fieldset>
<fieldset><label for="nTipo_">nTipo : </label><input type="text" name="nTipo_" id="nTipo_" value=""/></fieldset>
<fieldset><label for="nMoneda_">nMoneda : </label><input type="text" name="nMoneda_" id="nMoneda_" value=""/></fieldset>
<fieldset><label for="fmonto_">fmonto : </label><input type="text" name="fmonto_" id="fmonto_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>