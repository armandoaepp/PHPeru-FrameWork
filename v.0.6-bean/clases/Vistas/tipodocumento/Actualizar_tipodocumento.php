<div id="divActualizar_tipodocumento">
<form id="frmActualizar_tipodocumento" name="frmRegistrar_tipodocumento" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Tipodocumento</legend>
<fieldset><label for="idtipodocumento_">idtipodocumento : </label><input type="text" name="idtipodocumento_" id="idtipodocumento_" value="<?php echo $idtipodocumento;?>"/></fieldset>
<fieldset><label for="tipodocumento_">tipodocumento : </label><input type="text" name="tipodocumento_" id="tipodocumento_" value="<?php echo $tipodocumento;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>