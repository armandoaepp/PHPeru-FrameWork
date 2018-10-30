/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_admision( id int(11),titulo text,imagen varchar(200),requisitos text,horarios text,inversion text,email varchar(75) ) 
BEGIN
	INSERT INTO  admision(
		admision.id,
		admision.titulo,
		admision.imagen,
		admision.requisitos,
		admision.horarios,
		admision.inversion,
		admision.email
	)
	VALUES(
		id,
		titulo,
		imagen,
		requisitos,
		horarios,
		inversion,
		email
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_admision( id int(11),titulo text,imagen varchar(200),requisitos text,horarios text,inversion text,email varchar(75) ) 
BEGIN
	UPDATE admision SET
		admision.id = id,
		admision.titulo = titulo,
		admision.imagen = imagen,
		admision.requisitos = requisitos,
		admision.horarios = horarios,
		admision.inversion = inversion,
		admision.email = email
	WHERE admision.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_admision_estado(id int(11),email varchar(75)) 
BEGIN
	UPDATE admision SET
		admision.email = email
	WHERE admision.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_admision_by_id(id int(11)) 
BEGIN
	SELECT 
		admision.id,
		admision.titulo,
		admision.imagen,
		admision.requisitos,
		admision.horarios,
		admision.inversion,
		admision.email
	FROM admision
	WHERE  admision.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_admision() 
BEGIN
	SELECT 
		admision.id,
		admision.titulo,
		admision.imagen,
		admision.requisitos,
		admision.horarios,
		admision.inversion,
		admision.email
	FROM admision;
END;;
DELIMITER ;;

