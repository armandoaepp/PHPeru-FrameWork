/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_login_attempts( id int(11) unsigned,ip_address varbinary(16),login varchar(100),time int(11) unsigned ) 
BEGIN
	INSERT INTO  login_attempts(
		login_attempts.id,
		login_attempts.ip_address,
		login_attempts.login,
		login_attempts.time
	)
	VALUES(
		id,
		ip_address,
		login,
		time
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_login_attempts( id int(11) unsigned,ip_address varbinary(16),login varchar(100),time int(11) unsigned ) 
BEGIN
	UPDATE login_attempts SET
		login_attempts.id = id,
		login_attempts.ip_address = ip_address,
		login_attempts.login = login,
		login_attempts.time = time
	WHERE login_attempts.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_login_attempts_estado(id int(11) unsigned,time int(11) unsigned) 
BEGIN
	UPDATE login_attempts SET
		login_attempts.time = time
	WHERE login_attempts.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_login_attempts_by_id(id int(11) unsigned) 
BEGIN
	SELECT 
		login_attempts.id,
		login_attempts.ip_address,
		login_attempts.login,
		login_attempts.time
	FROM login_attempts
	WHERE  login_attempts.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_login_attempts() 
BEGIN
	SELECT 
		login_attempts.id,
		login_attempts.ip_address,
		login_attempts.login,
		login_attempts.time
	FROM login_attempts;
END;;
DELIMITER ;;

