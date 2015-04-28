/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_operacion( idoperacion bigint(20),fecha datetime,fecha_transcli datetime,tipomov varchar(2),monto_operacion decimal(12,2),idcuenta bigint(20),idtipo_operacion int(11),estado_recarga char(3),idsolicitud bigint(20),idvehiculo bigint(20),iduser bigint(20),numorden varchar(12),numtransac_sp varchar(9),moneda char(3),resul_transac char(1),cod_accion char(3),dato_comercio varchar(100),mediopago char(3),tiporesp char(1),cod_autoriz varchar(6),numrefer varchar(15),hash varchar(32),tipoprod_sp char(1),ntarjeta varchar(16),tarjetahab_visa varchar(45),ipcompra varchar(32) ) 
BEGIN
	INSERT INTO  operacion(
		operacion.idoperacion,
		operacion.fecha,
		operacion.fecha_transcli,
		operacion.tipomov,
		operacion.monto_operacion,
		operacion.idcuenta,
		operacion.idtipo_operacion,
		operacion.estado_recarga,
		operacion.idsolicitud,
		operacion.idvehiculo,
		operacion.iduser,
		operacion.numorden,
		operacion.numtransac_sp,
		operacion.moneda,
		operacion.resul_transac,
		operacion.cod_accion,
		operacion.dato_comercio,
		operacion.mediopago,
		operacion.tiporesp,
		operacion.cod_autoriz,
		operacion.numrefer,
		operacion.hash,
		operacion.tipoprod_sp,
		operacion.ntarjeta,
		operacion.tarjetahab_visa,
		operacion.ipcompra
	)
	VALUES(
		idoperacion,
		fecha,
		fecha_transcli,
		tipomov,
		monto_operacion,
		idcuenta,
		idtipo_operacion,
		estado_recarga,
		idsolicitud,
		idvehiculo,
		iduser,
		numorden,
		numtransac_sp,
		moneda,
		resul_transac,
		cod_accion,
		dato_comercio,
		mediopago,
		tiporesp,
		cod_autoriz,
		numrefer,
		hash,
		tipoprod_sp,
		ntarjeta,
		tarjetahab_visa,
		ipcompra
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_operacion( idoperacion bigint(20),fecha datetime,fecha_transcli datetime,tipomov varchar(2),monto_operacion decimal(12,2),idcuenta bigint(20),idtipo_operacion int(11),estado_recarga char(3),idsolicitud bigint(20),idvehiculo bigint(20),iduser bigint(20),numorden varchar(12),numtransac_sp varchar(9),moneda char(3),resul_transac char(1),cod_accion char(3),dato_comercio varchar(100),mediopago char(3),tiporesp char(1),cod_autoriz varchar(6),numrefer varchar(15),hash varchar(32),tipoprod_sp char(1),ntarjeta varchar(16),tarjetahab_visa varchar(45),ipcompra varchar(32) ) 
BEGIN
	UPDATE operacion SET
		operacion.idoperacion = idoperacion,
		operacion.fecha = fecha,
		operacion.fecha_transcli = fecha_transcli,
		operacion.tipomov = tipomov,
		operacion.monto_operacion = monto_operacion,
		operacion.idcuenta = idcuenta,
		operacion.idtipo_operacion = idtipo_operacion,
		operacion.estado_recarga = estado_recarga,
		operacion.idsolicitud = idsolicitud,
		operacion.idvehiculo = idvehiculo,
		operacion.iduser = iduser,
		operacion.numorden = numorden,
		operacion.numtransac_sp = numtransac_sp,
		operacion.moneda = moneda,
		operacion.resul_transac = resul_transac,
		operacion.cod_accion = cod_accion,
		operacion.dato_comercio = dato_comercio,
		operacion.mediopago = mediopago,
		operacion.tiporesp = tiporesp,
		operacion.cod_autoriz = cod_autoriz,
		operacion.numrefer = numrefer,
		operacion.hash = hash,
		operacion.tipoprod_sp = tipoprod_sp,
		operacion.ntarjeta = ntarjeta,
		operacion.tarjetahab_visa = tarjetahab_visa,
		operacion.ipcompra = ipcompra
	WHERE operacion.idoperacion = idoperacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_operacion_estado(idoperacion bigint(20),ipcompra varchar(32)) 
BEGIN
	UPDATE operacion SET
		operacion.ipcompra = ipcompra
	WHERE operacion.idoperacion = idoperacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_operacion_by_idoperacion(idoperacion bigint(20)) 
BEGIN
	SELECT 
		operacion.idoperacion,
		operacion.fecha,
		operacion.fecha_transcli,
		operacion.tipomov,
		operacion.monto_operacion,
		operacion.idcuenta,
		operacion.idtipo_operacion,
		operacion.estado_recarga,
		operacion.idsolicitud,
		operacion.idvehiculo,
		operacion.iduser,
		operacion.numorden,
		operacion.numtransac_sp,
		operacion.moneda,
		operacion.resul_transac,
		operacion.cod_accion,
		operacion.dato_comercio,
		operacion.mediopago,
		operacion.tiporesp,
		operacion.cod_autoriz,
		operacion.numrefer,
		operacion.hash,
		operacion.tipoprod_sp,
		operacion.ntarjeta,
		operacion.tarjetahab_visa,
		operacion.ipcompra
	FROM operacion
	WHERE  operacion.idoperacion = idoperacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_operacion() 
BEGIN
	SELECT 
		operacion.idoperacion,
		operacion.fecha,
		operacion.fecha_transcli,
		operacion.tipomov,
		operacion.monto_operacion,
		operacion.idcuenta,
		operacion.idtipo_operacion,
		operacion.estado_recarga,
		operacion.idsolicitud,
		operacion.idvehiculo,
		operacion.iduser,
		operacion.numorden,
		operacion.numtransac_sp,
		operacion.moneda,
		operacion.resul_transac,
		operacion.cod_accion,
		operacion.dato_comercio,
		operacion.mediopago,
		operacion.tiporesp,
		operacion.cod_autoriz,
		operacion.numrefer,
		operacion.hash,
		operacion.tipoprod_sp,
		operacion.ntarjeta,
		operacion.tarjetahab_visa,
		operacion.ipcompra
	FROM operacion;
END;;
DELIMITER ;;

