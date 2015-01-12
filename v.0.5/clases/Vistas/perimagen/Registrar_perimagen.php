<div id="divRegistrar_perimagen">
<form id="frmRegistrar_perimagen" name="frmRegistrar_perimagen" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Perimagen</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="cPerRuta_">cPerRuta : </label><input type="text" name="cPerRuta_" id="cPerRuta_" value=""/></fieldset>
<fieldset><label for="nPerTipo_">nPerTipo : </label><input type="text" name="nPerTipo_" id="nPerTipo_" value=""/></fieldset>
<fieldset><label for="nPerEstado_">nPerEstado : </label><input type="text" name="nPerEstado_" id="nPerEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>