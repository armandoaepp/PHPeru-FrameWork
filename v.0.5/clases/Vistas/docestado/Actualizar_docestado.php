<div id="divActualizar_docestado">
<form id="frmActualizar_docestado" name="frmRegistrar_docestado" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Docestado</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="nDocParCodigo_">nDocParCodigo : </label><input type="text" name="nDocParCodigo_" id="nDocParCodigo_" value="<?php echo $nDocParCodigo;?>"/></fieldset>
<fieldset><label for="nDocParClase_">nDocParClase : </label><input type="text" name="nDocParClase_" id="nDocParClase_" value="<?php echo $nDocParClase;?>"/></fieldset>
<fieldset><label for="dDocEstFecha_">dDocEstFecha : </label><input type="text" name="dDocEstFecha_" id="dDocEstFecha_" value="<?php echo $dDocEstFecha;?>"/></fieldset>
<fieldset><label for="cDocEstGlosa_">cDocEstGlosa : </label><input type="text" name="cDocEstGlosa_" id="cDocEstGlosa_" value="<?php echo $cDocEstGlosa;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>