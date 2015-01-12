<div id="divRegistrar_permail">
<form id="frmRegistrar_permail" name="frmRegistrar_permail" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Permail</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="nPerMailItem_">nPerMailItem : </label><input type="text" name="nPerMailItem_" id="nPerMailItem_" value=""/></fieldset>
<fieldset><label for="cPerMail_">cPerMail : </label><input type="text" name="cPerMail_" id="cPerMail_" value=""/></fieldset>
<fieldset><label for="nPerMailEstado_">nPerMailEstado : </label><input type="text" name="nPerMailEstado_" id="nPerMailEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>