<div id="divActualizar_docidentifica">
<form id="frmActualizar_docidentifica" name="frmRegistrar_docidentifica" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Docidentifica</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="nDocTipoNum_">nDocTipoNum : </label><input type="text" name="nDocTipoNum_" id="nDocTipoNum_" value="<?php echo $nDocTipoNum;?>"/></fieldset>
<fieldset><label for="cDocNDoc_">cDocNDoc : </label><input type="text" name="cDocNDoc_" id="cDocNDoc_" value="<?php echo $cDocNDoc;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>