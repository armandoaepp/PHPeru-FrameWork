<div id="divRegistrar_perparametro">
<form id="frmRegistrar_perparametro" name="frmRegistrar_perparametro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Perparametro</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value=""/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value=""/></fieldset>
<fieldset><label for="nPerParValor_">nPerParValor : </label><input type="text" name="nPerParValor_" id="nPerParValor_" value=""/></fieldset>
<fieldset><label for="cPerParGlosa_">cPerParGlosa : </label><input type="text" name="cPerParGlosa_" id="cPerParGlosa_" value=""/></fieldset>
<fieldset><label for="nPerParEstado_">nPerParEstado : </label><input type="text" name="nPerParEstado_" id="nPerParEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>