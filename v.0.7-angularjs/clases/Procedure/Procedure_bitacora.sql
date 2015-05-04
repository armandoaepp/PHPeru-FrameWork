/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_bitacora( idbitacora bigint(20),idusuario bigint(20),tipo varchar(2),ingreso datetime,salida datetime ) 
BEGIN
	INSERT INTO  bitacora(
		bitacora.idbitacora,
		bitacora.idusuario,
		bitacora.tipo,
		bitacora.ingreso,
		bitacora.salida
	)
	VALUES(
		idbitacora,
		idusuario,
		tipo,
		ingreso,
		salida
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_bitacora( idbitacora bigint(20),idusuario bigint(20),tipo varchar(2),ingreso datetime,salida datetime ) 
BEGIN
	UPDATE bitacora SET
		bitacora.idbitacora = idbitacora,
		bitacora.idusuario = idusuario,
		bitacora.tipo = tipo,
		bitacora.ingreso = ingreso,
		bitacora.salida = salida
	WHERE bitacora.idbitacora = idbitacora;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_bitacora_estado(idbitacora bigint(20),salida datetime) 
BEGIN
	UPDATE bitacora SET
		bitacora.salida = salida
	WHERE bitacora.idbitacora = idbitacora;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_bitacora_by_idbitacora(idbitacora bigint(20)) 
BEGIN
	SELECT 
		bitacora.idbitacora,
		bitacora.idusuario,
		bitacora.tipo,
		bitacora.ingreso,
		bitacora.salida
	FROM bitacora
	WHERE  bitacora.idbitacora = idbitacora;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_bitacora() 
BEGIN
	SELECT 
		bitacora.idbitacora,
		bitacora.idusuario,
		bitacora.tipo,
		bitacora.ingreso,
		bitacora.salida
	FROM bitacora;
END;;
DELIMITER ;;

