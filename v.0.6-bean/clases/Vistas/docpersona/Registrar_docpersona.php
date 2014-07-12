<div id="divRegistrar_docpersona">
<form id="frmRegistrar_docpersona" name="frmRegistrar_docpersona" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Docpersona</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value=""/></fieldset>
<fieldset><label for="nDocPerTipo_">nDocPerTipo : </label><input type="text" name="nDocPerTipo_" id="nDocPerTipo_" value=""/></fieldset>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="nPerRelacion_">nPerRelacion : </label><input type="text" name="nPerRelacion_" id="nPerRelacion_" value=""/></fieldset>
<fieldset><label for="nDocTipo_">nDocTipo : </label><input type="text" name="nDocTipo_" id="nDocTipo_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>