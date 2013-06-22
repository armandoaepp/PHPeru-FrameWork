<div id="divRegistrar_acopio">
<form id="frmRegistrar_acopio" name="frmRegistrar_acopio" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Acopio</legend>
<p><label for="AcopioId_">AcopioId : </label><input type="text" name="AcopioId_" id="AcopioId_" value=""/></p>
<p><label for="AcopioFecha_">AcopioFecha : </label><input type="text" name="AcopioFecha_" id="AcopioFecha_" value=""/></p>
<p><label for="AcopioNSacos_">AcopioNSacos : </label><input type="text" name="AcopioNSacos_" id="AcopioNSacos_" value=""/></p>
<p><label for="AcopioPesoBruto_">AcopioPesoBruto : </label><input type="text" name="AcopioPesoBruto_" id="AcopioPesoBruto_" value=""/></p>
<p><label for="AcopioHumedadEntregada_">AcopioHumedadEntregada : </label><input type="text" name="AcopioHumedadEntregada_" id="AcopioHumedadEntregada_" value=""/></p>
<p><label for="AcopioHumedadRequerida_">AcopioHumedadRequerida : </label><input type="text" name="AcopioHumedadRequerida_" id="AcopioHumedadRequerida_" value=""/></p>
<p><label for="AcopioPrecioQuintal_">AcopioPrecioQuintal : </label><input type="text" name="AcopioPrecioQuintal_" id="AcopioPrecioQuintal_" value=""/></p>
<p><label for="AcopioTara_">AcopioTara : </label><input type="text" name="AcopioTara_" id="AcopioTara_" value=""/></p>
<p><label for="BaseId_">BaseId : </label><input type="text" name="BaseId_" id="BaseId_" value=""/></p>
<p><label for="TipoCertificacionId_">TipoCertificacionId : </label><input type="text" name="TipoCertificacionId_" id="TipoCertificacionId_" value=""/></p>
<p><label for="AcopioQuintalesNetos_">AcopioQuintalesNetos : </label><input type="text" name="AcopioQuintalesNetos_" id="AcopioQuintalesNetos_" value=""/></p>
<p><label for="AcopioStatus_">AcopioStatus : </label><input type="text" name="AcopioStatus_" id="AcopioStatus_" value=""/></p>
<p><label for="AcopioEstado_">AcopioEstado : </label><input type="text" name="AcopioEstado_" id="AcopioEstado_" value=""/></p>
<p><label for="UnidadProductivaId_">UnidadProductivaId : </label><input type="text" name="UnidadProductivaId_" id="UnidadProductivaId_" value=""/></p>
<p><label for="GuiaAcopioId_">GuiaAcopioId : </label><input type="text" name="GuiaAcopioId_" id="GuiaAcopioId_" value=""/></p>
<p><label for="EstadoAcopioId_">EstadoAcopioId : </label><input type="text" name="EstadoAcopioId_" id="EstadoAcopioId_" value=""/></p>
<p><label for="PeriodoId_">PeriodoId : </label><input type="text" name="PeriodoId_" id="PeriodoId_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>