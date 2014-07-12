<div id="divRegistrar_doccontenido">
<form id="frmRegistrar_doccontenido" name="frmRegistrar_doccontenido" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Doccontenido</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value=""/></fieldset>
<fieldset><label for="nDocParCodigo_">nDocParCodigo : </label><input type="text" name="nDocParCodigo_" id="nDocParCodigo_" value=""/></fieldset>
<fieldset><label for="nDocParClase_">nDocParClase : </label><input type="text" name="nDocParClase_" id="nDocParClase_" value=""/></fieldset>
<fieldset><label for="cDocConContenido_">cDocConContenido : </label><input type="text" name="cDocConContenido_" id="cDocConContenido_" value=""/></fieldset>
<fieldset><label for="nDocConEstado_">nDocConEstado : </label><input type="text" name="nDocConEstado_" id="nDocConEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>