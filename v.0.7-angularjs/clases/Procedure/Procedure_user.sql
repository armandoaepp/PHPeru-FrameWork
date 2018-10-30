/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_user( user_id int(10) unsigned,nombre varchar(255),apellidos varchar(255),email varchar(255),password varchar(50),estado smallint(5) unsigned,created_up timestamp ) 
BEGIN
	INSERT INTO  user(
		user.user_id,
		user.nombre,
		user.apellidos,
		user.email,
		user.password,
		user.estado,
		user.created_up
	)
	VALUES(
		user_id,
		nombre,
		apellidos,
		email,
		password,
		estado,
		created_up
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_user( user_id int(10) unsigned,nombre varchar(255),apellidos varchar(255),email varchar(255),password varchar(50),estado smallint(5) unsigned,created_up timestamp ) 
BEGIN
	UPDATE user SET
		user.user_id = user_id,
		user.nombre = nombre,
		user.apellidos = apellidos,
		user.email = email,
		user.password = password,
		user.estado = estado,
		user.created_up = created_up
	WHERE user.user_id = user_id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_user_estado(user_id int(10) unsigned,created_up timestamp) 
BEGIN
	UPDATE user SET
		user.created_up = created_up
	WHERE user.user_id = user_id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_user_by_user_id(user_id int(10) unsigned) 
BEGIN
	SELECT 
		user.user_id,
		user.nombre,
		user.apellidos,
		user.email,
		user.password,
		user.estado,
		user.created_up
	FROM user
	WHERE  user.user_id = user_id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_user() 
BEGIN
	SELECT 
		user.user_id,
		user.nombre,
		user.apellidos,
		user.email,
		user.password,
		user.estado,
		user.created_up
	FROM user;
END;;
DELIMITER ;;

