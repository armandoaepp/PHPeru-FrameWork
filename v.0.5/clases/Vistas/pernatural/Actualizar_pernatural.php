<div id="divActualizar_pernatural">
<form id="frmActualizar_pernatural" name="frmRegistrar_pernatural" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Pernatural</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="cPerNatApePaterno_">cPerNatApePaterno : </label><input type="text" name="cPerNatApePaterno_" id="cPerNatApePaterno_" value="<?php echo $cPerNatApePaterno;?>"/></fieldset>
<fieldset><label for="cPerNatApeMaterno_">cPerNatApeMaterno : </label><input type="text" name="cPerNatApeMaterno_" id="cPerNatApeMaterno_" value="<?php echo $cPerNatApeMaterno;?>"/></fieldset>
<fieldset><label for="nPerNatSexo_">nPerNatSexo : </label><input type="text" name="nPerNatSexo_" id="nPerNatSexo_" value="<?php echo $nPerNatSexo;?>"/></fieldset>
<fieldset><label for="nPerNatEstCivil_">nPerNatEstCivil : </label><input type="text" name="nPerNatEstCivil_" id="nPerNatEstCivil_" value="<?php echo $nPerNatEstCivil;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>