/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_tipodocumento( idtipodocumento int(11) unsigned,tipodocumento varchar(255),estado int(11) ) 
BEGIN
	INSERT INTO  tipodocumento(
		tipodocumento.idtipodocumento,
		tipodocumento.tipodocumento,
		tipodocumento.estado
	)
	VALUES(
		idtipodocumento,
		tipodocumento,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipodocumento( idtipodocumento int(11) unsigned,tipodocumento varchar(255),estado int(11) ) 
BEGIN
	UPDATE tipodocumento SET
		tipodocumento.idtipodocumento = idtipodocumento,
		tipodocumento.tipodocumento = tipodocumento,
		tipodocumento.estado = estado
	WHERE tipodocumento.idtipodocumento = idtipodocumento;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipodocumento_by_estado(idtipodocumento int(11) unsigned,estado int(11)) 
BEGIN
	UPDATE tipodocumento SET
		tipodocumento.estado = estado
	WHERE tipodocumento.idtipodocumento = idtipodocumento;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipodocumento_by_idtipodocumento(idtipodocumento int(11) unsigned) 
BEGIN
	SELECT 
		tipodocumento.idtipodocumento,
		tipodocumento.tipodocumento,
		tipodocumento.estado
	FROM tipodocumento
	WHERE  tipodocumento.idtipodocumento = idtipodocumento;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipodocumento() 
BEGIN
	SELECT 
		tipodocumento.idtipodocumento,
		tipodocumento.tipodocumento,
		tipodocumento.estado
	FROM tipodocumento;
END;;
DELIMITER ;;

