<div id="divActualizar_docref">
<form id="frmActualizar_docref" name="frmRegistrar_docref" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Docref</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="cDocRefCodigo_">cDocRefCodigo : </label><input type="text" name="cDocRefCodigo_" id="cDocRefCodigo_" value="<?php echo $cDocRefCodigo;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>