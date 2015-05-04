/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_bitacora( idbitacora int(11),idusuario int(11),idtipooperacion int(11),registro datetime,referencia varchar(50) ) 
BEGIN
	INSERT INTO  bitacora(
		bitacora.idbitacora,
		bitacora.idusuario,
		bitacora.idtipooperacion,
		bitacora.registro,
		bitacora.referencia
	)
	VALUES(
		idbitacora,
		idusuario,
		idtipooperacion,
		registro,
		referencia
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_bitacora( idbitacora int(11),idusuario int(11),idtipooperacion int(11),registro datetime,referencia varchar(50) ) 
BEGIN
	UPDATE bitacora SET
		bitacora.idbitacora = idbitacora,
		bitacora.idusuario = idusuario,
		bitacora.idtipooperacion = idtipooperacion,
		bitacora.registro = registro,
		bitacora.referencia = referencia
	WHERE bitacora.idbitacora = idbitacora;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_bitacora_estado(idbitacora int(11),referencia varchar(50)) 
BEGIN
	UPDATE bitacora SET
		bitacora.referencia = referencia
	WHERE bitacora.idbitacora = idbitacora;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_bitacora_by_idbitacora(idbitacora int(11)) 
BEGIN
	SELECT 
		bitacora.idbitacora,
		bitacora.idusuario,
		bitacora.idtipooperacion,
		bitacora.registro,
		bitacora.referencia
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
		bitacora.idtipooperacion,
		bitacora.registro,
		bitacora.referencia
	FROM bitacora;
END;;
DELIMITER ;;

