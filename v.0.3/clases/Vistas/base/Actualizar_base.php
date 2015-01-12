<div id="divActualizar_base">
<form id="frmActualizar_base" name="frmRegistrar_base" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Base</legend>
<p><label for="BaseId_">BaseId : </label><input type="text" name="BaseId_" id="BaseId_" value="<?php echo $BaseId;?>"/></p>
<p><label for="BaseNombre_">BaseNombre : </label><input type="text" name="BaseNombre_" id="BaseNombre_" value="<?php echo $BaseNombre;?>"/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>