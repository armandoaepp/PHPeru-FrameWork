<div id="divRegistrar_tipomensaje">
<form id="frmRegistrar_tipomensaje" name="frmRegistrar_tipomensaje" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Tipomensaje</legend>
<fieldset><label for="idtipomensaje_">idtipomensaje : </label><input type="text" name="idtipomensaje_" id="idtipomensaje_" value=""/></fieldset>
<fieldset><label for="tipomensaje_">tipomensaje : </label><input type="text" name="tipomensaje_" id="tipomensaje_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>