<div id="divRegistrar_docparametro">
<form id="frmRegistrar_docparametro" name="frmRegistrar_docparametro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Docparametro</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value=""/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value=""/></fieldset>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value=""/></fieldset>
<fieldset><label for="cDocParObservacion_">cDocParObservacion : </label><input type="text" name="cDocParObservacion_" id="cDocParObservacion_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>