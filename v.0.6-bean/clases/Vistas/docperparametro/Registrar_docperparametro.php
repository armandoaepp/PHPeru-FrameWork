<div id="divRegistrar_docperparametro">
<form id="frmRegistrar_docperparametro" name="frmRegistrar_docperparametro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Docperparametro</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value=""/></fieldset>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value=""/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value=""/></fieldset>
<fieldset><label for="cDocPerParValor_">cDocPerParValor : </label><input type="text" name="cDocPerParValor_" id="cDocPerParValor_" value=""/></fieldset>
<fieldset><label for="cDocPerParGlosa_">cDocPerParGlosa : </label><input type="text" name="cDocPerParGlosa_" id="cDocPerParGlosa_" value=""/></fieldset>
<fieldset><label for="nDocPerParEstado_">nDocPerParEstado : </label><input type="text" name="nDocPerParEstado_" id="nDocPerParEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>