<div id="divActualizar_perusuacceso">
<form id="frmActualizar_perusuacceso" name="frmRegistrar_perusuacceso" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Perusuacceso</legend>
<fieldset><label for="cPerCodigo_">cPerCodigo : </label><input type="text" name="cPerCodigo_" id="cPerCodigo_" value="<?php echo $cPerCodigo;?>"/></fieldset>
<fieldset><label for="nPerUsuAccGrupo_">nPerUsuAccGrupo : </label><input type="text" name="nPerUsuAccGrupo_" id="nPerUsuAccGrupo_" value="<?php echo $nPerUsuAccGrupo;?>"/></fieldset>
<fieldset><label for="nPerUsuAccTipo_">nPerUsuAccTipo : </label><input type="text" name="nPerUsuAccTipo_" id="nPerUsuAccTipo_" value="<?php echo $nPerUsuAccTipo;?>"/></fieldset>
<fieldset><label for="nPerUsuAccObjCodigo_">nPerUsuAccObjCodigo : </label><input type="text" name="nPerUsuAccObjCodigo_" id="nPerUsuAccObjCodigo_" value="<?php echo $nPerUsuAccObjCodigo;?>"/></fieldset>
<fieldset><label for="nPerUsuAccCodigo_">nPerUsuAccCodigo : </label><input type="text" name="nPerUsuAccCodigo_" id="nPerUsuAccCodigo_" value="<?php echo $nPerUsuAccCodigo;?>"/></fieldset>
<fieldset><label for="nPerUsuAccPrdCodigo_">nPerUsuAccPrdCodigo : </label><input type="text" name="nPerUsuAccPrdCodigo_" id="nPerUsuAccPrdCodigo_" value="<?php echo $nPerUsuAccPrdCodigo;?>"/></fieldset>
<fieldset><label for="nPerUsuAccEstado_">nPerUsuAccEstado : </label><input type="text" name="nPerUsuAccEstado_" id="nPerUsuAccEstado_" value="<?php echo $nPerUsuAccEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>