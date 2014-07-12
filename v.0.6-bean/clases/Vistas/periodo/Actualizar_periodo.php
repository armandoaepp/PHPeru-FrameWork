<div id="divActualizar_periodo">
<form id="frmActualizar_periodo" name="frmRegistrar_periodo" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Periodo</legend>
<fieldset><label for="nPrdCodigo_">nPrdCodigo : </label><input type="text" name="nPrdCodigo_" id="nPrdCodigo_" value="<?php echo $nPrdCodigo;?>"/></fieldset>
<fieldset><label for="cPrdDescripcion_">cPrdDescripcion : </label><input type="text" name="cPrdDescripcion_" id="cPrdDescripcion_" value="<?php echo $cPrdDescripcion;?>"/></fieldset>
<fieldset><label for="dPrdFecInic_">dPrdFecInic : </label><input type="text" name="dPrdFecInic_" id="dPrdFecInic_" value="<?php echo $dPrdFecInic;?>"/></fieldset>
<fieldset><label for="dPrdFecFin_">dPrdFecFin : </label><input type="text" name="dPrdFecFin_" id="dPrdFecFin_" value="<?php echo $dPrdFecFin;?>"/></fieldset>
<fieldset><label for="nPrdTipo_">nPrdTipo : </label><input type="text" name="nPrdTipo_" id="nPrdTipo_" value="<?php echo $nPrdTipo;?>"/></fieldset>
<fieldset><label for="nPrdEstado_">nPrdEstado : </label><input type="text" name="nPrdEstado_" id="nPrdEstado_" value="<?php echo $nPrdEstado;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>