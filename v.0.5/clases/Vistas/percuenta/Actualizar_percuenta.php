<div id="divActualizar_percuenta">
<form id="frmActualizar_percuenta" name="frmRegistrar_percuenta" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Percuenta</legend>
<fieldset><label for="nPerCtaCodigo_">nPerCtaCodigo : </label><input type="text" name="nPerCtaCodigo_" id="nPerCtaCodigo_" value="<?php echo $nPerCtaCodigo;?>"/></fieldset>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="cNroCuenta_">cNroCuenta : </label><input type="text" name="cNroCuenta_" id="cNroCuenta_" value="<?php echo $cNroCuenta;?>"/></fieldset>
<fieldset><label for="nPerCtaTipo_">nPerCtaTipo : </label><input type="text" name="nPerCtaTipo_" id="nPerCtaTipo_" value="<?php echo $nPerCtaTipo;?>"/></fieldset>
<fieldset><label for="cPerJurCodigo_">cPerJurCodigo : </label><input type="text" name="cPerJurCodigo_" id="cPerJurCodigo_" value="<?php echo $cPerJurCodigo;?>"/></fieldset>
<fieldset><label for="nMonCodigo_">nMonCodigo : </label><input type="text" name="nMonCodigo_" id="nMonCodigo_" value="<?php echo $nMonCodigo;?>"/></fieldset>
<fieldset><label for="nPerCtaEstado_">nPerCtaEstado : </label><input type="text" name="nPerCtaEstado_" id="nPerCtaEstado_" value="<?php echo $nPerCtaEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>