<div id="divActualizar_docrefdestino">
<form id="frmActualizar_docrefdestino" name="frmRegistrar_docrefdestino" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Docrefdestino</legend>
<fieldset><label for="cDocCodigo_">cDocCodigo : </label><input type="text" name="cDocCodigo_" id="cDocCodigo_" value="<?php echo $cDocCodigo;?>"/></fieldset>
<fieldset><label for="cLugarOrigen_">cLugarOrigen : </label><input type="text" name="cLugarOrigen_" id="cLugarOrigen_" value="<?php echo $cLugarOrigen;?>"/></fieldset>
<fieldset><label for="nOrigTipo_">nOrigTipo : </label><input type="text" name="nOrigTipo_" id="nOrigTipo_" value="<?php echo $nOrigTipo;?>"/></fieldset>
<fieldset><label for="cOrigDireccion_">cOrigDireccion : </label><input type="text" name="cOrigDireccion_" id="cOrigDireccion_" value="<?php echo $cOrigDireccion;?>"/></fieldset>
<fieldset><label for="cOrigManz_">cOrigManz : </label><input type="text" name="cOrigManz_" id="cOrigManz_" value="<?php echo $cOrigManz;?>"/></fieldset>
<fieldset><label for="cOrigLote_">cOrigLote : </label><input type="text" name="cOrigLote_" id="cOrigLote_" value="<?php echo $cOrigLote;?>"/></fieldset>
<fieldset><label for="nOrigTipoRes_">nOrigTipoRes : </label><input type="text" name="nOrigTipoRes_" id="nOrigTipoRes_" value="<?php echo $nOrigTipoRes;?>"/></fieldset>
<fieldset><label for="cOrigResidencia_">cOrigResidencia : </label><input type="text" name="cOrigResidencia_" id="cOrigResidencia_" value="<?php echo $cOrigResidencia;?>"/></fieldset>
<fieldset><label for="cLugarDestino_">cLugarDestino : </label><input type="text" name="cLugarDestino_" id="cLugarDestino_" value="<?php echo $cLugarDestino;?>"/></fieldset>
<fieldset><label for="nDestTipo_">nDestTipo : </label><input type="text" name="nDestTipo_" id="nDestTipo_" value="<?php echo $nDestTipo;?>"/></fieldset>
<fieldset><label for="cDestDireccion_">cDestDireccion : </label><input type="text" name="cDestDireccion_" id="cDestDireccion_" value="<?php echo $cDestDireccion;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>