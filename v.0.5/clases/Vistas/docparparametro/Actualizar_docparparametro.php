<div id="divActualizar_docparparametro">
<form id="frmActualizar_docparparametro" name="frmRegistrar_docparparametro" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Docparparametro</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="nParSrcCodigo_">nParSrcCodigo : </label><input type="text" name="nParSrcCodigo_" id="nParSrcCodigo_" value="<?php echo $nParSrcCodigo;?>"/></fieldset>
<fieldset><label for="nParSrcClase_">nParSrcClase : </label><input type="text" name="nParSrcClase_" id="nParSrcClase_" value="<?php echo $nParSrcClase;?>"/></fieldset>
<fieldset><label for="nParDstCodigo_">nParDstCodigo : </label><input type="text" name="nParDstCodigo_" id="nParDstCodigo_" value="<?php echo $nParDstCodigo;?>"/></fieldset>
<fieldset><label for="nParDstClase_">nParDstClase : </label><input type="text" name="nParDstClase_" id="nParDstClase_" value="<?php echo $nParDstClase;?>"/></fieldset>
<fieldset><label for="cParParValor_">cParParValor : </label><input type="text" name="cParParValor_" id="cParParValor_" value="<?php echo $cParParValor;?>"/></fieldset>
<fieldset><label for="cParParGlosa_">cParParGlosa : </label><input type="text" name="cParParGlosa_" id="cParParGlosa_" value="<?php echo $cParParGlosa;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>