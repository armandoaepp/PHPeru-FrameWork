<div id="divRegistrar_amigos">
<form id="frmRegistrar_amigos" name="frmRegistrar_amigos" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Amigos</legend>
<fieldset><label for="id_">id : </label><input type="text" name="id_" id="id_" value=""/></fieldset>
<fieldset><label for="titulo_">titulo : </label><input type="text" name="titulo_" id="titulo_" value=""/></fieldset>
<fieldset><label for="imagen_">imagen : </label><input type="text" name="imagen_" id="imagen_" value=""/></fieldset>
<fieldset><label for="imagen_2_">imagen_2 : </label><input type="text" name="imagen_2_" id="imagen_2_" value=""/></fieldset>
<fieldset><label for="email_">email : </label><input type="text" name="email_" id="email_" value=""/></fieldset>
<fieldset><label for="orden_">orden : </label><input type="text" name="orden_" id="orden_" value=""/></fieldset>
<fieldset><label for="fecha_">fecha : </label><input type="text" name="fecha_" id="fecha_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>