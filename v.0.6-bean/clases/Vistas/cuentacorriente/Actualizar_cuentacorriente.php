<div id="divActualizar_cuentacorriente">
<form id="frmActualizar_cuentacorriente" name="frmRegistrar_cuentacorriente" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Cuentacorriente</legend>
<fieldset><label for="cCtaCteRecibo_">cCtaCteRecibo : </label><input type="text" name="cCtaCteRecibo_" id="cCtaCteRecibo_" value="<?php echo $cCtaCteRecibo;?>"/></fieldset>
<fieldset><label for="nPerCtaCodigo_">nPerCtaCodigo : </label><input type="text" name="nPerCtaCodigo_" id="nPerCtaCodigo_" value="<?php echo $nPerCtaCodigo;?>"/></fieldset>
<fieldset><label for="nCtaCteTipo_">nCtaCteTipo : </label><input type="text" name="nCtaCteTipo_" id="nCtaCteTipo_" value="<?php echo $nCtaCteTipo;?>"/></fieldset>
<fieldset><label for="nCtaCteItem_">nCtaCteItem : </label><input type="text" name="nCtaCteItem_" id="nCtaCteItem_" value="<?php echo $nCtaCteItem;?>"/></fieldset>
<fieldset><label for="fCtaCteImporte_">fCtaCteImporte : </label><input type="text" name="fCtaCteImporte_" id="fCtaCteImporte_" value="<?php echo $fCtaCteImporte;?>"/></fieldset>
<fieldset><label for="nCtaCteCuota_">nCtaCteCuota : </label><input type="text" name="nCtaCteCuota_" id="nCtaCteCuota_" value="<?php echo $nCtaCteCuota;?>"/></fieldset>
<fieldset><label for="nCtaCteEstado_">nCtaCteEstado : </label><input type="text" name="nCtaCteEstado_" id="nCtaCteEstado_" value="<?php echo $nCtaCteEstado;?>"/></fieldset>
<fieldset><label for="dCtaCteFecVence_">dCtaCteFecVence : </label><input type="text" name="dCtaCteFecVence_" id="dCtaCteFecVence_" value="<?php echo $dCtaCteFecVence;?>"/></fieldset>
<fieldset><label for="dCtaCteFecPago_">dCtaCteFecPago : </label><input type="text" name="dCtaCteFecPago_" id="dCtaCteFecPago_" value="<?php echo $dCtaCteFecPago;?>"/></fieldset>
<fieldset><label for="dCtaCteFecEmis_">dCtaCteFecEmis : </label><input type="text" name="dCtaCteFecEmis_" id="dCtaCteFecEmis_" value="<?php echo $dCtaCteFecEmis;?>"/></fieldset>
<fieldset><label for="dCtaCteFecRegistro_">dCtaCteFecRegistro : </label><input type="text" name="dCtaCteFecRegistro_" id="dCtaCteFecRegistro_" value="<?php echo $dCtaCteFecRegistro;?>"/></fieldset>
<fieldset><label for="cCtaCteGlosa_">cCtaCteGlosa : </label><input type="text" name="cCtaCteGlosa_" id="cCtaCteGlosa_" value="<?php echo $cCtaCteGlosa;?>"/></fieldset>
<fieldset><label for="nPrdCodigo_">nPrdCodigo : </label><input type="text" name="nPrdCodigo_" id="nPrdCodigo_" value="<?php echo $nPrdCodigo;?>"/></fieldset>
<fieldset><label for="nMonCodigo_">nMonCodigo : </label><input type="text" name="nMonCodigo_" id="nMonCodigo_" value="<?php echo $nMonCodigo;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>