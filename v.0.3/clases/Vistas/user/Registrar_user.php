<div id="divRegistrar_user">
<form id="frmRegistrar_user" name="frmRegistrar_user" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo User</legend>
<p><label for="UserId_">UserId : </label><input type="text" name="UserId_" id="UserId_" value=""/></p>
<p><label for="UsueNombre_">UsueNombre : </label><input type="text" name="UsueNombre_" id="UsueNombre_" value=""/></p>
<p><label for="UserEmail_">UserEmail : </label><input type="text" name="UserEmail_" id="UserEmail_" value=""/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>