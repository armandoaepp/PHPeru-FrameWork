<div id="divActualizar_pardetalle">
<form id="frmActualizar_pardetalle" name="frmRegistrar_pardetalle" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Pardetalle</legend>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value="<?php echo $nParCodigo;?>"/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value="<?php echo $nParClase;?>"/></fieldset>
<fieldset><label for="nParItem_">nParItem : </label><input type="text" name="nParItem_" id="nParItem_" value="<?php echo $nParItem;?>"/></fieldset>
<fieldset><label for="nParItemS_">nParItemS : </label><input type="text" name="nParItemS_" id="nParItemS_" value="<?php echo $nParItemS;?>"/></fieldset>
<fieldset><label for="cParDetValor_">cParDetValor : </label><input type="text" name="cParDetValor_" id="cParDetValor_" value="<?php echo $cParDetValor;?>"/></fieldset>
<fieldset><label for="cParDetGlosa_">cParDetGlosa : </label><input type="text" name="cParDetGlosa_" id="cParDetGlosa_" value="<?php echo $cParDetGlosa;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>