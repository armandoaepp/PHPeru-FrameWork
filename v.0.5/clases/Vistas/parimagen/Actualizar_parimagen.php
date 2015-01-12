<div id="divActualizar_parimagen">
<form id="frmActualizar_parimagen" name="frmRegistrar_parimagen" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Parimagen</legend>
<fieldset><label for="nParCodigo_">nParCodigo : </label><input type="text" name="nParCodigo_" id="nParCodigo_" value="<?php echo $nParCodigo;?>"/></fieldset>
<fieldset><label for="nParClase_">nParClase : </label><input type="text" name="nParClase_" id="nParClase_" value="<?php echo $nParClase;?>"/></fieldset>
<fieldset><label for="nParImgTipo_">nParImgTipo : </label><input type="text" name="nParImgTipo_" id="nParImgTipo_" value="<?php echo $nParImgTipo;?>"/></fieldset>
<fieldset><label for="cParImgRuta_">cParImgRuta : </label><input type="text" name="cParImgRuta_" id="cParImgRuta_" value="<?php echo $cParImgRuta;?>"/></fieldset>
<fieldset><label for="cParImgGlosa_">cParImgGlosa : </label><input type="text" name="cParImgGlosa_" id="cParImgGlosa_" value="<?php echo $cParImgGlosa;?>"/></fieldset>
<fieldset><label for="nParImgEstado_">nParImgEstado : </label><input type="text" name="nParImgEstado_" id="nParImgEstado_" value="<?php echo $nParImgEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>