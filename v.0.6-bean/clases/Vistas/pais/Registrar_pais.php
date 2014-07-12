<div id="divRegistrar_pais">
<form id="frmRegistrar_pais" name="frmRegistrar_pais" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Pais</legend>
<fieldset><label for="nPaiCodigo_">nPaiCodigo : </label><input type="text" name="nPaiCodigo_" id="nPaiCodigo_" value=""/></fieldset>
<fieldset><label for="cPaiDescripcion_">cPaiDescripcion : </label><input type="text" name="cPaiDescripcion_" id="cPaiDescripcion_" value=""/></fieldset>
<fieldset><label for="nPaiEstado_">nPaiEstado : </label><input type="text" name="nPaiEstado_" id="nPaiEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>