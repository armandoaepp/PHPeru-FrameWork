<div id="divActualizar_admin">
<form id="frmActualizar_admin" name="frmRegistrar_admin" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Admin</legend>
<fieldset><label for="idadmin_">idadmin : </label><input type="text" name="idadmin_" id="idadmin_" value="<?php echo $idadmin;?>"/></fieldset>
<fieldset><label for="usertrans_">usertrans : </label><input type="text" name="usertrans_" id="usertrans_" value="<?php echo $usertrans;?>"/></fieldset>
<fieldset><label for="clavetrans_">clavetrans : </label><input type="text" name="clavetrans_" id="clavetrans_" value="<?php echo $clavetrans;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>