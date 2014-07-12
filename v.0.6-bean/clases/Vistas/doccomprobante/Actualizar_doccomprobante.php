<div id="divActualizar_doccomprobante">
<form id="frmActualizar_doccomprobante" name="frmRegistrar_doccomprobante" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Doccomprobante</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="nTipo_">nTipo : </label><input type="text" name="nTipo_" id="nTipo_" value="<?php echo $nTipo;?>"/></fieldset>
<fieldset><label for="nMoneda_">nMoneda : </label><input type="text" name="nMoneda_" id="nMoneda_" value="<?php echo $nMoneda;?>"/></fieldset>
<fieldset><label for="fmonto_">fmonto : </label><input type="text" name="fmonto_" id="fmonto_" value="<?php echo $fmonto;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>