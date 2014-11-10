<div id="divActualizar_tipomensaje">
<form id="frmActualizar_tipomensaje" name="frmRegistrar_tipomensaje" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Tipomensaje</legend>
<fieldset><label for="idtipomensaje_">idtipomensaje : </label><input type="text" name="idtipomensaje_" id="idtipomensaje_" value="<?php echo $idtipomensaje;?>"/></fieldset>
<fieldset><label for="tipomensaje_">tipomensaje : </label><input type="text" name="tipomensaje_" id="tipomensaje_" value="<?php echo $tipomensaje;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>