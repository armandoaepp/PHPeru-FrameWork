<div id="divActualizar_categoria">
<form id="frmActualizar_categoria" name="frmRegistrar_categoria" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Categoria</legend>
<fieldset><label for="idcategoria_">idcategoria : </label><input type="text" name="idcategoria_" id="idcategoria_" value="<?php echo $idcategoria;?>"/></fieldset>
<fieldset><label for="categoria_">categoria : </label><input type="text" name="categoria_" id="categoria_" value="<?php echo $categoria;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>