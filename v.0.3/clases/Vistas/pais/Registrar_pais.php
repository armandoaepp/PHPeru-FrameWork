<div id="divRegistrar_pais">
<form id="frmRegistrar_pais" name="frmRegistrar_pais" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Pais</legend>
<p><label for="PaisId_">PaisId : </label><input type="text" name="PaisId_" id="PaisId_" value=""/></p>
<p><label for="PaisNombre_">PaisNombre : </label><input type="text" name="PaisNombre_" id="PaisNombre_" value=""/></p>
<div class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></div>
</fieldset>
</form>
</div>