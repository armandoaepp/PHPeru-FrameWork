/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_moneda( idmoneda int(11),nombre varchar(50),estado int(11) ) 
BEGIN
	INSERT INTO  moneda(
		moneda.idmoneda,
		moneda.nombre,
		moneda.estado
	)
	VALUES(
		idmoneda,
		nombre,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_moneda( idmoneda int(11),nombre varchar(50),estado int(11) ) 
BEGIN
	UPDATE moneda SET
		moneda.idmoneda = idmoneda,
		moneda.nombre = nombre,
		moneda.estado = estado
	WHERE moneda.idmoneda = idmoneda;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_moneda_estado(idmoneda int(11),estado int(11)) 
BEGIN
	UPDATE moneda SET
		moneda.estado = estado
	WHERE moneda.idmoneda = idmoneda;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_moneda_by_idmoneda(idmoneda int(11)) 
BEGIN
	SELECT 
		moneda.idmoneda,
		moneda.nombre,
		moneda.estado
	FROM moneda
	WHERE  moneda.idmoneda = idmoneda;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_moneda() 
BEGIN
	SELECT 
		moneda.idmoneda,
		moneda.nombre,
		moneda.estado
	FROM moneda;
END;;
DELIMITER ;;

