<div id="divActualizar_persona">
<form id="frmActualizar_persona" name="frmRegistrar_persona" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Persona</legend>
<fieldset><label for="idpersona_">idpersona : </label><input type="text" name="idpersona_" id="idpersona_" value="<?php echo $idpersona;?>"/></fieldset>
<fieldset><label for="nombre_">nombre : </label><input type="text" name="nombre_" id="nombre_" value="<?php echo $nombre;?>"/></fieldset>
<fieldset><label for="nacimiento_">nacimiento : </label><input type="text" name="nacimiento_" id="nacimiento_" value="<?php echo $nacimiento;?>"/></fieldset>
<fieldset><label for="tipo_">tipo : </label><input type="text" name="tipo_" id="tipo_" value="<?php echo $tipo;?>"/></fieldset>
<?php if($estado=="E"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" name="estado_" id="estado_" value="E" /></p>
<?php }if($estado=="A"){?>
<fieldset><label for="estado_">estado: </label><input type="checkbox" checked="checked" name="estado_" id="estado_" value="A" /></fieldset>
<?php }?>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>