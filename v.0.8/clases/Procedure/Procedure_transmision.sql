/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_transmision( idtransmision bigint(20) unsigned,idpersonajuridica int(11) unsigned,placa varchar(20),longitud decimal(20,10),latitud decimal(20,10),direccion int(11),velocidad int(11),gpstime timestamp,panico varchar(11),estado int(2) ) 
BEGIN
	INSERT INTO  transmision(
		transmision.idtransmision,
		transmision.idpersonajuridica,
		transmision.placa,
		transmision.longitud,
		transmision.latitud,
		transmision.direccion,
		transmision.velocidad,
		transmision.gpstime,
		transmision.panico,
		transmision.estado
	)
	VALUES(
		idtransmision,
		idpersonajuridica,
		placa,
		longitud,
		latitud,
		direccion,
		velocidad,
		gpstime,
		panico,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_transmision( idtransmision bigint(20) unsigned,idpersonajuridica int(11) unsigned,placa varchar(20),longitud decimal(20,10),latitud decimal(20,10),direccion int(11),velocidad int(11),gpstime timestamp,panico varchar(11),estado int(2) ) 
BEGIN
	UPDATE transmision SET
		transmision.idtransmision = idtransmision,
		transmision.idpersonajuridica = idpersonajuridica,
		transmision.placa = placa,
		transmision.longitud = longitud,
		transmision.latitud = latitud,
		transmision.direccion = direccion,
		transmision.velocidad = velocidad,
		transmision.gpstime = gpstime,
		transmision.panico = panico,
		transmision.estado = estado
	WHERE transmision.idtransmision = idtransmision;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_transmision_estado(idtransmision bigint(20) unsigned,estado int(2)) 
BEGIN
	UPDATE transmision SET
		transmision.estado = estado
	WHERE transmision.idtransmision = idtransmision;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_transmision_by_idtransmision(idtransmision bigint(20) unsigned) 
BEGIN
	SELECT 
		transmision.idtransmision,
		transmision.idpersonajuridica,
		transmision.placa,
		transmision.longitud,
		transmision.latitud,
		transmision.direccion,
		transmision.velocidad,
		transmision.gpstime,
		transmision.panico,
		transmision.estado
	FROM transmision
	WHERE  transmision.idtransmision = idtransmision;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_transmision() 
BEGIN
	SELECT 
		transmision.idtransmision,
		transmision.idpersonajuridica,
		transmision.placa,
		transmision.longitud,
		transmision.latitud,
		transmision.direccion,
		transmision.velocidad,
		transmision.gpstime,
		transmision.panico,
		transmision.estado
	FROM transmision;
END;;
DELIMITER ;;

