/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_tipofecha( idtipofecha int(11),tipofecha varchar(250),estado int(11) ) 
BEGIN
	INSERT INTO  tipofecha(
		tipofecha.idtipofecha,
		tipofecha.tipofecha,
		tipofecha.estado
	)
	VALUES(
		idtipofecha,
		tipofecha,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipofecha( idtipofecha int(11),tipofecha varchar(250),estado int(11) ) 
BEGIN
	UPDATE tipofecha SET
		tipofecha.idtipofecha = idtipofecha,
		tipofecha.tipofecha = tipofecha,
		tipofecha.estado = estado
	WHERE tipofecha.idtipofecha = idtipofecha;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipofecha_by_estado(idtipofecha int(11),estado int(11)) 
BEGIN
	UPDATE tipofecha SET
		tipofecha.estado = estado
	WHERE tipofecha.idtipofecha = idtipofecha;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipofecha_by_idtipofecha(idtipofecha int(11)) 
BEGIN
	SELECT 
		tipofecha.idtipofecha,
		tipofecha.tipofecha,
		tipofecha.estado
	FROM tipofecha
	WHERE  tipofecha.idtipofecha = idtipofecha;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipofecha() 
BEGIN
	SELECT 
		tipofecha.idtipofecha,
		tipofecha.tipofecha,
		tipofecha.estado
	FROM tipofecha;
END;;
DELIMITER ;;

