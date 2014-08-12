<div id="divActualizar_percosecha">
<form id="frmActualizar_percosecha" name="frmRegistrar_percosecha" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Percosecha</legend>
<fieldset><label for="nPerCosCodigo_">nPerCosCodigo : </label><input type="text" name="nPerCosCodigo_" id="nPerCosCodigo_" value="<?php echo $nPerCosCodigo;?>"/></fieldset>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nParcCodigo_">nParcCodigo : </label><input type="text" name="nParcCodigo_" id="nParcCodigo_" value="<?php echo $nParcCodigo;?>"/></fieldset>
<fieldset><label for="nParcClase_">nParcClase : </label><input type="text" name="nParcClase_" id="nParcClase_" value="<?php echo $nParcClase;?>"/></fieldset>
<fieldset><label for="nProdCodigo_">nProdCodigo : </label><input type="text" name="nProdCodigo_" id="nProdCodigo_" value="<?php echo $nProdCodigo;?>"/></fieldset>
<fieldset><label for="nProdClase_">nProdClase : </label><input type="text" name="nProdClase_" id="nProdClase_" value="<?php echo $nProdClase;?>"/></fieldset>
<fieldset><label for="nPrdCodigo_">nPrdCodigo : </label><input type="text" name="nPrdCodigo_" id="nPrdCodigo_" value="<?php echo $nPrdCodigo;?>"/></fieldset>
<fieldset><label for="cCosCodigo_">cCosCodigo : </label><input type="text" name="cCosCodigo_" id="cCosCodigo_" value="<?php echo $cCosCodigo;?>"/></fieldset>
<fieldset><label for="fHectareas_">fHectareas : </label><input type="text" name="fHectareas_" id="fHectareas_" value="<?php echo $fHectareas;?>"/></fieldset>
<fieldset><label for="fQuintales_">fQuintales : </label><input type="text" name="fQuintales_" id="fQuintales_" value="<?php echo $fQuintales;?>"/></fieldset>
<fieldset><label for="fKilogramos_">fKilogramos : </label><input type="text" name="fKilogramos_" id="fKilogramos_" value="<?php echo $fKilogramos;?>"/></fieldset>
<fieldset><label for="cGlosa_">cGlosa : </label><input type="text" name="cGlosa_" id="cGlosa_" value="<?php echo $cGlosa;?>"/></fieldset>
<fieldset><label for="nPerCosEstado_">nPerCosEstado : </label><input type="text" name="nPerCosEstado_" id="nPerCosEstado_" value="<?php echo $nPerCosEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>