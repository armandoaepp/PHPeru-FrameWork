/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_acceso_vehiculo( idaccesovehiculo int(11),idusuario int(11),idvehiculo int(11),observacion varchar(50),estado int(11) ) 
BEGIN
	INSERT INTO  acceso_vehiculo(
		acceso_vehiculo.idaccesovehiculo,
		acceso_vehiculo.idusuario,
		acceso_vehiculo.idvehiculo,
		acceso_vehiculo.observacion,
		acceso_vehiculo.estado
	)
	VALUES(
		idaccesovehiculo,
		idusuario,
		idvehiculo,
		observacion,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_acceso_vehiculo( idaccesovehiculo int(11),idusuario int(11),idvehiculo int(11),observacion varchar(50),estado int(11) ) 
BEGIN
	UPDATE acceso_vehiculo SET
		acceso_vehiculo.idaccesovehiculo = idaccesovehiculo,
		acceso_vehiculo.idusuario = idusuario,
		acceso_vehiculo.idvehiculo = idvehiculo,
		acceso_vehiculo.observacion = observacion,
		acceso_vehiculo.estado = estado
	WHERE acceso_vehiculo.idaccesovehiculo = idaccesovehiculo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_acceso_vehiculo_estado(idaccesovehiculo int(11),estado int(11)) 
BEGIN
	UPDATE acceso_vehiculo SET
		acceso_vehiculo.estado = estado
	WHERE acceso_vehiculo.idaccesovehiculo = idaccesovehiculo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_acceso_vehiculo_by_idaccesovehiculo(idaccesovehiculo int(11)) 
BEGIN
	SELECT 
		acceso_vehiculo.idaccesovehiculo,
		acceso_vehiculo.idusuario,
		acceso_vehiculo.idvehiculo,
		acceso_vehiculo.observacion,
		acceso_vehiculo.estado
	FROM acceso_vehiculo
	WHERE  acceso_vehiculo.idaccesovehiculo = idaccesovehiculo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_acceso_vehiculo() 
BEGIN
	SELECT 
		acceso_vehiculo.idaccesovehiculo,
		acceso_vehiculo.idusuario,
		acceso_vehiculo.idvehiculo,
		acceso_vehiculo.observacion,
		acceso_vehiculo.estado
	FROM acceso_vehiculo;
END;;
DELIMITER ;;

