<div id="divRegistrar_docref">
<form id="frmRegistrar_docref" name="frmRegistrar_docref" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Docref</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value=""/></fieldset>
<fieldset><label for="cDocRefCodigo_">cDocRefCodigo : </label><input type="text" name="cDocRefCodigo_" id="cDocRefCodigo_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>