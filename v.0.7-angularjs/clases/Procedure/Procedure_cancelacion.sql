/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_cancelacion( idcancelacion bigint(20),idnegociacion bigint(20),idsolicitud bigint(20),idoperador int(11),idusuario int(11),tipo varchar(2),fechahora datetime ) 
BEGIN
	INSERT INTO  cancelacion(
		cancelacion.idcancelacion,
		cancelacion.idnegociacion,
		cancelacion.idsolicitud,
		cancelacion.idoperador,
		cancelacion.idusuario,
		cancelacion.tipo,
		cancelacion.fechahora
	)
	VALUES(
		idcancelacion,
		idnegociacion,
		idsolicitud,
		idoperador,
		idusuario,
		tipo,
		fechahora
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_cancelacion( idcancelacion bigint(20),idnegociacion bigint(20),idsolicitud bigint(20),idoperador int(11),idusuario int(11),tipo varchar(2),fechahora datetime ) 
BEGIN
	UPDATE cancelacion SET
		cancelacion.idcancelacion = idcancelacion,
		cancelacion.idnegociacion = idnegociacion,
		cancelacion.idsolicitud = idsolicitud,
		cancelacion.idoperador = idoperador,
		cancelacion.idusuario = idusuario,
		cancelacion.tipo = tipo,
		cancelacion.fechahora = fechahora
	WHERE cancelacion.idcancelacion = idcancelacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_cancelacion_estado(idcancelacion bigint(20),fechahora datetime) 
BEGIN
	UPDATE cancelacion SET
		cancelacion.fechahora = fechahora
	WHERE cancelacion.idcancelacion = idcancelacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_cancelacion_by_idcancelacion(idcancelacion bigint(20)) 
BEGIN
	SELECT 
		cancelacion.idcancelacion,
		cancelacion.idnegociacion,
		cancelacion.idsolicitud,
		cancelacion.idoperador,
		cancelacion.idusuario,
		cancelacion.tipo,
		cancelacion.fechahora
	FROM cancelacion
	WHERE  cancelacion.idcancelacion = idcancelacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_cancelacion() 
BEGIN
	SELECT 
		cancelacion.idcancelacion,
		cancelacion.idnegociacion,
		cancelacion.idsolicitud,
		cancelacion.idoperador,
		cancelacion.idusuario,
		cancelacion.tipo,
		cancelacion.fechahora
	FROM cancelacion;
END;;
DELIMITER ;;

