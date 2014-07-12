<div id="divActualizar_perparametro">
<form id="frmActualizar_perparametro" name="frmRegistrar_perparametro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perparametro</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value="<?php echo $nParCodigo;?>"/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value="<?php echo $nParClase;?>"/></fieldset>
<fieldset><label for="nPerParValor_">nPerParValor : </label><input type="text" name="nPerParValor_" id="nPerParValor_" value="<?php echo $nPerParValor;?>"/></fieldset>
<fieldset><label for="cPerParGlosa_">cPerParGlosa : </label><input type="text" name="cPerParGlosa_" id="cPerParGlosa_" value="<?php echo $cPerParGlosa;?>"/></fieldset>
<fieldset><label for="nPerParEstado_">nPerParEstado : </label><input type="text" name="nPerParEstado_" id="nPerParEstado_" value="<?php echo $nPerParEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>