<div id="divActualizar_departamento">
<form id="frmActualizar_departamento" name="frmRegistrar_departamento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Departamento</legend>
<fieldset><label for="DepartamentoId_">DepartamentoId : </label><input type="text" name="DepartamentoId_" id="DepartamentoId_" value="<?php echo $DepartamentoId;?>"/></fieldset>
<fieldset><label for="DepartamentoNombre_">DepartamentoNombre : </label><input type="text" name="DepartamentoNombre_" id="DepartamentoNombre_" value="<?php echo $DepartamentoNombre;?>"/></fieldset>
<fieldset><label for="PaisId_">PaisId : </label><input type="text" name="PaisId_" id="PaisId_" value="<?php echo $PaisId;?>"/></fieldset>
<fieldset><label for="UbigeoDepa_">UbigeoDepa : </label><input type="text" name="UbigeoDepa_" id="UbigeoDepa_" value="<?php echo $UbigeoDepa;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>