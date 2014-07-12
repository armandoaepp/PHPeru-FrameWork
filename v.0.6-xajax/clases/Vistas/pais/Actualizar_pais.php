<div id="divActualizar_pais">
<form id="frmActualizar_pais" name="frmRegistrar_pais" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Pais</legend>
<fieldset><label for="PaisId_">PaisId : </label><input type="text" name="PaisId_" id="PaisId_" value="<?php echo $PaisId;?>"/></fieldset>
<fieldset><label for="PaisNombre_">PaisNombre : </label><input type="text" name="PaisNombre_" id="PaisNombre_" value="<?php echo $PaisNombre;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>