<div id="divRegistrar_perusuacceso">
<form id="frmRegistrar_perusuacceso" name="frmRegistrar_perusuacceso" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Perusuacceso</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value=""/></fieldset>
<fieldset><label for="nPerUsuAccGrupo_">nPerUsuAccGrupo : </label><input type="text" name="nPerUsuAccGrupo_" id="nPerUsuAccGrupo_" value=""/></fieldset>
<fieldset><label for="nPerUsuAccTipo_">nPerUsuAccTipo : </label><input type="text" name="nPerUsuAccTipo_" id="nPerUsuAccTipo_" value=""/></fieldset>
<fieldset><label for="nPerUsuAccObjCodigo_">nPerUsuAccObjCodigo : </label><input type="text" name="nPerUsuAccObjCodigo_" id="nPerUsuAccObjCodigo_" value=""/></fieldset>
<fieldset><label for="nPerUsuAccCodigo_">nPerUsuAccCodigo : </label><input type="text" name="nPerUsuAccCodigo_" id="nPerUsuAccCodigo_" value=""/></fieldset>
<fieldset><label for="nPerUsuAccPrdCodigo_">nPerUsuAccPrdCodigo : </label><input type="text" name="nPerUsuAccPrdCodigo_" id="nPerUsuAccPrdCodigo_" value=""/></fieldset>
<fieldset><label for="nPerUsuAccEstado_">nPerUsuAccEstado : </label><input type="text" name="nPerUsuAccEstado_" id="nPerUsuAccEstado_" value=""/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>