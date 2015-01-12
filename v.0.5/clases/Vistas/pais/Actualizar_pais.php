<div id="divActualizar_pais">
<form id="frmActualizar_pais" name="frmRegistrar_pais" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Pais</legend>
<fieldset><label for="nPaiCodigo_">nPaiCodigo : </label><input type="text" name="nPaiCodigo_" id="nPaiCodigo_" value="<?php echo $nPaiCodigo;?>"/></fieldset>
<fieldset><label for="cPaiNombre_">cPaiNombre : </label><input type="text" name="cPaiNombre_" id="cPaiNombre_" value="<?php echo $cPaiNombre;?>"/></fieldset>
<fieldset><label for="nPaiEstado_">nPaiEstado : </label><input type="text" name="nPaiEstado_" id="nPaiEstado_" value="<?php echo $nPaiEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>