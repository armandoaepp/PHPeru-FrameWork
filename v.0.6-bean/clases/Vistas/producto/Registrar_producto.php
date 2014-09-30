<div id="divRegistrar_producto">
<form id="frmRegistrar_producto" name="frmRegistrar_producto" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Producto</legend>
<fieldset><label for="idproducto_">idproducto : </label><input type="text" name="idproducto_" id="idproducto_" value=""/></fieldset>
<fieldset><label for="producto_">producto : </label><input type="text" name="producto_" id="producto_" value=""/></fieldset>
<fieldset><label for="idcategoria_">idcategoria : </label><input type="text" name="idcategoria_" id="idcategoria_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>