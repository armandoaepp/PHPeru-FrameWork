<div id="divRegistrar_parimagen">
<form id="frmRegistrar_parimagen" name="frmRegistrar_parimagen" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Parimagen</legend>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value=""/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value=""/></fieldset>
<fieldset><label for="nParImgTipo_">nParImgTipo : </label><input type="text" name="nParImgTipo_" id="nParImgTipo_" value=""/></fieldset>
<fieldset><label for="cParImgRuta_">cParImgRuta : </label><input type="text" name="cParImgRuta_" id="cParImgRuta_" value=""/></fieldset>
<fieldset><label for="cParImgGlosa_">cParImgGlosa : </label><input type="text" name="cParImgGlosa_" id="cParImgGlosa_" value=""/></fieldset>
<fieldset><label for="nParImgEstado_">nParImgEstado : </label><input type="text" name="nParImgEstado_" id="nParImgEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>