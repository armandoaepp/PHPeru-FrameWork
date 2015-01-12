<div id="divActualizar_parparametro">
<form id="frmActualizar_parparametro" name="frmRegistrar_parparametro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Parparametro</legend>
<fieldset><label for="nParSrcCodigo_">nParSrcCodigo : </label><input type="text" name="nParSrcCodigo_" id="nParSrcCodigo_" value="<?php echo $nParSrcCodigo;?>"/></fieldset>
<fieldset><label for="nParSrcClase_">nParSrcClase : </label><input type="text" name="nParSrcClase_" id="nParSrcClase_" value="<?php echo $nParSrcClase;?>"/></fieldset>
<fieldset><label for="nParDstCodigo_">nParDstCodigo : </label><input type="text" name="nParDstCodigo_" id="nParDstCodigo_" value="<?php echo $nParDstCodigo;?>"/></fieldset>
<fieldset><label for="nParDstClase_">nParDstClase : </label><input type="text" name="nParDstClase_" id="nParDstClase_" value="<?php echo $nParDstClase;?>"/></fieldset>
<fieldset><label for="cValor_">cValor : </label><input type="text" name="cValor_" id="cValor_" value="<?php echo $cValor;?>"/></fieldset>
<fieldset><label for="nParParEstado_">nParParEstado : </label><input type="text" name="nParParEstado_" id="nParParEstado_" value="<?php echo $nParParEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>