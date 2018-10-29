<div id="divRegistrar_config">
<form id="frmRegistrar_config" name="frmRegistrar_config" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Config</legend>
<fieldset><label for="idconfig_">idconfig : </label><input type="text" name="idconfig_" id="idconfig_" value=""/></fieldset>
<fieldset><label for="idtipoentidad_">idtipoentidad : </label><input type="text" name="idtipoentidad_" id="idtipoentidad_" value=""/></fieldset>
<fieldset><label for="idvalor_">idvalor : </label><input type="text" name="idvalor_" id="idvalor_" value=""/></fieldset>
<fieldset><label for="valor_">valor : </label><input type="text" name="valor_" id="valor_" value=""/></fieldset>
<fieldset><label for="referencia_">referencia : </label><input type="text" name="referencia_" id="referencia_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>