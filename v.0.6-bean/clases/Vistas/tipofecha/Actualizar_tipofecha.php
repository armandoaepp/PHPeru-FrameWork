<div id="divActualizar_tipofecha">
<form id="frmActualizar_tipofecha" name="frmRegistrar_tipofecha" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Tipofecha</legend>
<fieldset><label for="idtipofecha_">idtipofecha : </label><input type="text" name="idtipofecha_" id="idtipofecha_" value="<?php echo $idtipofecha;?>"/></fieldset>
<fieldset><label for="tipofecha_">tipofecha : </label><input type="text" name="tipofecha_" id="tipofecha_" value="<?php echo $tipofecha;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>