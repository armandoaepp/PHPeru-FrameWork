<div id="divRegistrar_pernatural">
<form id="frmRegistrar_pernatural" name="frmRegistrar_pernatural" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Pernatural</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="cPerNatApePaterno_">cPerNatApePaterno : </label><input type="text" name="cPerNatApePaterno_" id="cPerNatApePaterno_" value=""/></fieldset>
<fieldset><label for="cPerNatApeMaterno_">cPerNatApeMaterno : </label><input type="text" name="cPerNatApeMaterno_" id="cPerNatApeMaterno_" value=""/></fieldset>
<fieldset><label for="nPerNatSexo_">nPerNatSexo : </label><input type="text" name="nPerNatSexo_" id="nPerNatSexo_" value=""/></fieldset>
<fieldset><label for="nPerNatEstCivil_">nPerNatEstCivil : </label><input type="text" name="nPerNatEstCivil_" id="nPerNatEstCivil_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>