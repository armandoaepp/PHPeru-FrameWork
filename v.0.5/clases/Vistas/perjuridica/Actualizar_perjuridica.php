<div id="divActualizar_perjuridica">
<form id="frmActualizar_perjuridica" name="frmRegistrar_perjuridica" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perjuridica</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nPerJurRubro_">nPerJurRubro : </label><input type="text" name="nPerJurRubro_" id="nPerJurRubro_" value="<?php echo $nPerJurRubro;?>"/></fieldset>
<fieldset><label for="cPerJurDescripcion_">cPerJurDescripcion : </label><input type="text" name="cPerJurDescripcion_" id="cPerJurDescripcion_" value="<?php echo $cPerJurDescripcion;?>"/></fieldset>
<fieldset><label for="nPerEmpresa_">nPerEmpresa : </label><input type="text" name="nPerEmpresa_" id="nPerEmpresa_" value="<?php echo $nPerEmpresa;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>