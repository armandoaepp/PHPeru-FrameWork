/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_persona( idpersona int(11),nombre varchar(100),nacimiento date,tipo int(11),estado int(11) ) 
BEGIN
	INSERT INTO  persona(
		persona.idpersona,
		persona.nombre,
		persona.nacimiento,
		persona.tipo,
		persona.estado
	)
	VALUES(
		idpersona,
		nombre,
		nacimiento,
		tipo,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_persona( idpersona int(11),nombre varchar(100),nacimiento date,tipo int(11),estado int(11) ) 
BEGIN
	UPDATE persona SET
		persona.idpersona = idpersona,
		persona.nombre = nombre,
		persona.nacimiento = nacimiento,
		persona.tipo = tipo,
		persona.estado = estado
	WHERE persona.idpersona = idpersona;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_persona_estado(idpersona int(11),estado int(11)) 
BEGIN
	UPDATE persona SET
		persona.estado = estado
	WHERE persona.idpersona = idpersona;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_persona_by_idpersona(idpersona int(11)) 
BEGIN
	SELECT 
		persona.idpersona,
		persona.nombre,
		persona.nacimiento,
		persona.tipo,
		persona.estado
	FROM persona
	WHERE  persona.idpersona = idpersona;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_persona() 
BEGIN
	SELECT 
		persona.idpersona,
		persona.nombre,
		persona.nacimiento,
		persona.tipo,
		persona.estado
	FROM persona;
END;;
DELIMITER ;;

