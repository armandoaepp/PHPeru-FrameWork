<div id="divActualizar_doccontenido">
<form id="frmActualizar_doccontenido" name="frmRegistrar_doccontenido" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Doccontenido</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="nDocParCodigo_">nDocParCodigo : </label><input type="text" name="nDocParCodigo_" id="nDocParCodigo_" value="<?php echo $nDocParCodigo;?>"/></fieldset>
<fieldset><label for="nDocParClase_">nDocParClase : </label><input type="text" name="nDocParClase_" id="nDocParClase_" value="<?php echo $nDocParClase;?>"/></fieldset>
<fieldset><label for="cDocConContenido_">cDocConContenido : </label><input type="text" name="cDocConContenido_" id="cDocConContenido_" value="<?php echo $cDocConContenido;?>"/></fieldset>
<fieldset><label for="nDocConEstado_">nDocConEstado : </label><input type="text" name="nDocConEstado_" id="nDocConEstado_" value="<?php echo $nDocConEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>