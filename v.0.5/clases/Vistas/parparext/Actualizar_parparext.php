<div id="divActualizar_parparext">
<form id="frmActualizar_parparext" name="frmRegistrar_parparext" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Parparext</legend>
<fieldset><label for="nIntSrcCodigo_">nIntSrcCodigo : </label><input type="text" name="nIntSrcCodigo_" id="nIntSrcCodigo_" value="<?php echo $nIntSrcCodigo;?>"/></fieldset>
<fieldset><label for="nIntSrcClase_">nIntSrcClase : </label><input type="text" name="nIntSrcClase_" id="nIntSrcClase_" value="<?php echo $nIntSrcClase;?>"/></fieldset>
<fieldset><label for="nIntDstCodigo_">nIntDstCodigo : </label><input type="text" name="nIntDstCodigo_" id="nIntDstCodigo_" value="<?php echo $nIntDstCodigo;?>"/></fieldset>
<fieldset><label for="nIntDstClase_">nIntDstClase : </label><input type="text" name="nIntDstClase_" id="nIntDstClase_" value="<?php echo $nIntDstClase;?>"/></fieldset>
<fieldset><label for="nObjCodigo_">nObjCodigo : </label><input type="text" name="nObjCodigo_" id="nObjCodigo_" value="<?php echo $nObjCodigo;?>"/></fieldset>
<fieldset><label for="nObjTipo_">nObjTipo : </label><input type="text" name="nObjTipo_" id="nObjTipo_" value="<?php echo $nObjTipo;?>"/></fieldset>
<fieldset><label for="cValor_">cValor : </label><input type="text" name="cValor_" id="cValor_" value="<?php echo $cValor;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>