<div id="divRegistrar_tipodocumento">
<form id="frmRegistrar_tipodocumento" name="frmRegistrar_tipodocumento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Tipodocumento</legend>
<fieldset><label for="idtipodocumento_">idtipodocumento : </label><input type="text" name="idtipodocumento_" id="idtipodocumento_" value=""/></fieldset>
<fieldset><label for="tipodocumento_">tipodocumento : </label><input type="text" name="tipodocumento_" id="tipodocumento_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>