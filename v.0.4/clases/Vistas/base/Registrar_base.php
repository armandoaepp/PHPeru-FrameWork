<div id="divRegistrar_base">
<form id="frmRegistrar_base" name="frmRegistrar_base" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Base</legend>
<p><label for="BaseId_">BaseId : </label><input type="text" name="BaseId_" id="BaseId_" value=""/></p>
<p><label for="BaseNombre_">BaseNombre : </label><input type="text" name="BaseNombre_" id="BaseNombre_" value=""/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>