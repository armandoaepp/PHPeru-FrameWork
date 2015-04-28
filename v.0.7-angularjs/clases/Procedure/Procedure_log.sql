/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_log( idlog bigint(20),fecha datetime,idusuario bigint(20),ocurrencia text ) 
BEGIN
	INSERT INTO  log(
		log.idlog,
		log.fecha,
		log.idusuario,
		log.ocurrencia
	)
	VALUES(
		idlog,
		fecha,
		idusuario,
		ocurrencia
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_log( idlog bigint(20),fecha datetime,idusuario bigint(20),ocurrencia text ) 
BEGIN
	UPDATE log SET
		log.idlog = idlog,
		log.fecha = fecha,
		log.idusuario = idusuario,
		log.ocurrencia = ocurrencia
	WHERE log.idlog = idlog;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_log_estado(idlog bigint(20),ocurrencia text) 
BEGIN
	UPDATE log SET
		log.ocurrencia = ocurrencia
	WHERE log.idlog = idlog;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_log_by_idlog(idlog bigint(20)) 
BEGIN
	SELECT 
		log.idlog,
		log.fecha,
		log.idusuario,
		log.ocurrencia
	FROM log
	WHERE  log.idlog = idlog;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_log() 
BEGIN
	SELECT 
		log.idlog,
		log.fecha,
		log.idusuario,
		log.ocurrencia
	FROM log;
END;;
DELIMITER ;;

