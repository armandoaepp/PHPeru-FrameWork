/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_vehiculo_alerta( idvehiculoalerta int(10) unsigned,idvehiculo int(11),idcellocator int(11),RMUId varchar(10),GPSX decimal(16,12),GPSY decimal(16,12),Speed int(11),Direction int(11),UTCTime datetime,fecharegistro datetime,InputVoltage int(11),idtipoalerta int(11),referencia varchar(100),estado int(2) ) 
BEGIN
	INSERT INTO  vehiculo_alerta(
		vehiculo_alerta.idvehiculoalerta,
		vehiculo_alerta.idvehiculo,
		vehiculo_alerta.idcellocator,
		vehiculo_alerta.RMUId,
		vehiculo_alerta.GPSX,
		vehiculo_alerta.GPSY,
		vehiculo_alerta.Speed,
		vehiculo_alerta.Direction,
		vehiculo_alerta.UTCTime,
		vehiculo_alerta.fecharegistro,
		vehiculo_alerta.InputVoltage,
		vehiculo_alerta.idtipoalerta,
		vehiculo_alerta.referencia,
		vehiculo_alerta.estado
	)
	VALUES(
		idvehiculoalerta,
		idvehiculo,
		idcellocator,
		RMUId,
		GPSX,
		GPSY,
		Speed,
		Direction,
		UTCTime,
		fecharegistro,
		InputVoltage,
		idtipoalerta,
		referencia,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_vehiculo_alerta( idvehiculoalerta int(10) unsigned,idvehiculo int(11),idcellocator int(11),RMUId varchar(10),GPSX decimal(16,12),GPSY decimal(16,12),Speed int(11),Direction int(11),UTCTime datetime,fecharegistro datetime,InputVoltage int(11),idtipoalerta int(11),referencia varchar(100),estado int(2) ) 
BEGIN
	UPDATE vehiculo_alerta SET
		vehiculo_alerta.idvehiculoalerta = idvehiculoalerta,
		vehiculo_alerta.idvehiculo = idvehiculo,
		vehiculo_alerta.idcellocator = idcellocator,
		vehiculo_alerta.RMUId = RMUId,
		vehiculo_alerta.GPSX = GPSX,
		vehiculo_alerta.GPSY = GPSY,
		vehiculo_alerta.Speed = Speed,
		vehiculo_alerta.Direction = Direction,
		vehiculo_alerta.UTCTime = UTCTime,
		vehiculo_alerta.fecharegistro = fecharegistro,
		vehiculo_alerta.InputVoltage = InputVoltage,
		vehiculo_alerta.idtipoalerta = idtipoalerta,
		vehiculo_alerta.referencia = referencia,
		vehiculo_alerta.estado = estado
	WHERE vehiculo_alerta.idvehiculoalerta = idvehiculoalerta;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_vehiculo_alerta_estado(idvehiculoalerta int(10) unsigned,estado int(2)) 
BEGIN
	UPDATE vehiculo_alerta SET
		vehiculo_alerta.estado = estado
	WHERE vehiculo_alerta.idvehiculoalerta = idvehiculoalerta;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_vehiculo_alerta_by_idvehiculoalerta(idvehiculoalerta int(10) unsigned) 
BEGIN
	SELECT 
		vehiculo_alerta.idvehiculoalerta,
		vehiculo_alerta.idvehiculo,
		vehiculo_alerta.idcellocator,
		vehiculo_alerta.RMUId,
		vehiculo_alerta.GPSX,
		vehiculo_alerta.GPSY,
		vehiculo_alerta.Speed,
		vehiculo_alerta.Direction,
		vehiculo_alerta.UTCTime,
		vehiculo_alerta.fecharegistro,
		vehiculo_alerta.InputVoltage,
		vehiculo_alerta.idtipoalerta,
		vehiculo_alerta.referencia,
		vehiculo_alerta.estado
	FROM vehiculo_alerta
	WHERE  vehiculo_alerta.idvehiculoalerta = idvehiculoalerta;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_vehiculo_alerta() 
BEGIN
	SELECT 
		vehiculo_alerta.idvehiculoalerta,
		vehiculo_alerta.idvehiculo,
		vehiculo_alerta.idcellocator,
		vehiculo_alerta.RMUId,
		vehiculo_alerta.GPSX,
		vehiculo_alerta.GPSY,
		vehiculo_alerta.Speed,
		vehiculo_alerta.Direction,
		vehiculo_alerta.UTCTime,
		vehiculo_alerta.fecharegistro,
		vehiculo_alerta.InputVoltage,
		vehiculo_alerta.idtipoalerta,
		vehiculo_alerta.referencia,
		vehiculo_alerta.estado
	FROM vehiculo_alerta;
END;;
DELIMITER ;;

