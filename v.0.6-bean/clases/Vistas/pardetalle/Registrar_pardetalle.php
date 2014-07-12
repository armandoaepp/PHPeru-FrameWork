<div id="divRegistrar_pardetalle">
<form id="frmRegistrar_pardetalle" name="frmRegistrar_pardetalle" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Pardetalle</legend>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value=""/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value=""/></fieldset>
<fieldset><label for="nParItem_">nParItem : </label><input type="text" name="nParItem_" id="nParItem_" value=""/></fieldset>
<fieldset><label for="nParItemS_">nParItemS : </label><input type="text" name="nParItemS_" id="nParItemS_" value=""/></fieldset>
<fieldset><label for="cParDetValor_">cParDetValor : </label><input type="text" name="cParDetValor_" id="cParDetValor_" value=""/></fieldset>
<fieldset><label for="cParDetGlosa_">cParDetGlosa : </label><input type="text" name="cParDetGlosa_" id="cParDetGlosa_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>