<div id="divActualizar_producto">
<form id="frmActualizar_producto" name="frmRegistrar_producto" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Producto</legend>
<fieldset><label for="idproducto_">idproducto : </label><input type="text" name="idproducto_" id="idproducto_" value="<?php echo $idproducto;?>"/></fieldset>
<fieldset><label for="producto_">producto : </label><input type="text" name="producto_" id="producto_" value="<?php echo $producto;?>"/></fieldset>
<fieldset><label for="idcategoria_">idcategoria : </label><input type="text" name="idcategoria_" id="idcategoria_" value="<?php echo $idcategoria;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>