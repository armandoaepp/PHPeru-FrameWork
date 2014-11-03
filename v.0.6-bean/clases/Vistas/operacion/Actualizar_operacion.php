<div id="divActualizar_operacion">
<form id="frmActualizar_operacion" name="frmRegistrar_operacion" class="hform" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Operacion</legend>
<fieldset><label for="idoperacion_">idoperacion : </label><input type="text" name="idoperacion_" id="idoperacion_" value="<?php echo $idoperacion;?>"/></fieldset>
<fieldset><label for="fecha_">fecha : </label><input type="text" name="fecha_" id="fecha_" value="<?php echo $fecha;?>"/></fieldset>
<fieldset><label for="fecha_transcli_">fecha_transcli : </label><input type="text" name="fecha_transcli_" id="fecha_transcli_" value="<?php echo $fecha_transcli;?>"/></fieldset>
<fieldset><label for="tipomov_">tipomov : </label><input type="text" name="tipomov_" id="tipomov_" value="<?php echo $tipomov;?>"/></fieldset>
<fieldset><label for="monto_operacion_">monto_operacion : </label><input type="text" name="monto_operacion_" id="monto_operacion_" value="<?php echo $monto_operacion;?>"/></fieldset>
<fieldset><label for="idcuenta_">idcuenta : </label><input type="text" name="idcuenta_" id="idcuenta_" value="<?php echo $idcuenta;?>"/></fieldset>
<fieldset><label for="idtipo_operacion_">idtipo_operacion : </label><input type="text" name="idtipo_operacion_" id="idtipo_operacion_" value="<?php echo $idtipo_operacion;?>"/></fieldset>
<fieldset><label for="estado_recarga_">estado_recarga : </label><input type="text" name="estado_recarga_" id="estado_recarga_" value="<?php echo $estado_recarga;?>"/></fieldset>
<fieldset><label for="idsolicitud_">idsolicitud : </label><input type="text" name="idsolicitud_" id="idsolicitud_" value="<?php echo $idsolicitud;?>"/></fieldset>
<fieldset><label for="idvehiculo_">idvehiculo : </label><input type="text" name="idvehiculo_" id="idvehiculo_" value="<?php echo $idvehiculo;?>"/></fieldset>
<fieldset><label for="iduser_">iduser : </label><input type="text" name="iduser_" id="iduser_" value="<?php echo $iduser;?>"/></fieldset>
<fieldset><label for="numorden_">numorden : </label><input type="text" name="numorden_" id="numorden_" value="<?php echo $numorden;?>"/></fieldset>
<fieldset><label for="numtransac_sp_">numtransac_sp : </label><input type="text" name="numtransac_sp_" id="numtransac_sp_" value="<?php echo $numtransac_sp;?>"/></fieldset>
<fieldset><label for="moneda_">moneda : </label><input type="text" name="moneda_" id="moneda_" value="<?php echo $moneda;?>"/></fieldset>
<fieldset><label for="resul_transac_">resul_transac : </label><input type="text" name="resul_transac_" id="resul_transac_" value="<?php echo $resul_transac;?>"/></fieldset>
<fieldset><label for="cod_accion_">cod_accion : </label><input type="text" name="cod_accion_" id="cod_accion_" value="<?php echo $cod_accion;?>"/></fieldset>
<fieldset><label for="dato_comercio_">dato_comercio : </label><input type="text" name="dato_comercio_" id="dato_comercio_" value="<?php echo $dato_comercio;?>"/></fieldset>
<fieldset><label for="mediopago_">mediopago : </label><input type="text" name="mediopago_" id="mediopago_" value="<?php echo $mediopago;?>"/></fieldset>
<fieldset><label for="tiporesp_">tiporesp : </label><input type="text" name="tiporesp_" id="tiporesp_" value="<?php echo $tiporesp;?>"/></fieldset>
<fieldset><label for="cod_autoriz_">cod_autoriz : </label><input type="text" name="cod_autoriz_" id="cod_autoriz_" value="<?php echo $cod_autoriz;?>"/></fieldset>
<fieldset><label for="numrefer_">numrefer : </label><input type="text" name="numrefer_" id="numrefer_" value="<?php echo $numrefer;?>"/></fieldset>
<fieldset><label for="hash_">hash : </label><input type="text" name="hash_" id="hash_" value="<?php echo $hash;?>"/></fieldset>
<fieldset><label for="tipoprod_sp_">tipoprod_sp : </label><input type="text" name="tipoprod_sp_" id="tipoprod_sp_" value="<?php echo $tipoprod_sp;?>"/></fieldset>
<fieldset><label for="ntarjeta_">ntarjeta : </label><input type="text" name="ntarjeta_" id="ntarjeta_" value="<?php echo $ntarjeta;?>"/></fieldset>
<fieldset><label for="tarjetahab_visa_">tarjetahab_visa : </label><input type="text" name="tarjetahab_visa_" id="tarjetahab_visa_" value="<?php echo $tarjetahab_visa;?>"/></fieldset>
<fieldset><label for="ipcompra_">ipcompra : </label><input type="text" name="ipcompra_" id="ipcompra_" value="<?php echo $ipcompra;?>"/></fieldset>
<fieldset class="text-right"><button type="submit"  id="btregistrar">Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';">Cancelar </button></fieldset>
</fieldset>
</form>
</div>