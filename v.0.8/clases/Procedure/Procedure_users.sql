/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_users( id int(11) unsigned,ip_address varbinary(16),username varchar(100),password varchar(80),salt varchar(40),email varchar(100),activation_code varchar(40),forgotten_password_code varchar(40),forgotten_password_time int(11) unsigned,remember_code varchar(40),created_on int(11) unsigned,last_login int(11) unsigned,active tinyint(1) unsigned,first_name varchar(50),last_name varchar(50),company varchar(100),phone varchar(20),imagen varchar(200) ) 
BEGIN
	INSERT INTO  users(
		users.id,
		users.ip_address,
		users.username,
		users.password,
		users.salt,
		users.email,
		users.activation_code,
		users.forgotten_password_code,
		users.forgotten_password_time,
		users.remember_code,
		users.created_on,
		users.last_login,
		users.active,
		users.first_name,
		users.last_name,
		users.company,
		users.phone,
		users.imagen
	)
	VALUES(
		id,
		ip_address,
		username,
		password,
		salt,
		email,
		activation_code,
		forgotten_password_code,
		forgotten_password_time,
		remember_code,
		created_on,
		last_login,
		active,
		first_name,
		last_name,
		company,
		phone,
		imagen
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_users( id int(11) unsigned,ip_address varbinary(16),username varchar(100),password varchar(80),salt varchar(40),email varchar(100),activation_code varchar(40),forgotten_password_code varchar(40),forgotten_password_time int(11) unsigned,remember_code varchar(40),created_on int(11) unsigned,last_login int(11) unsigned,active tinyint(1) unsigned,first_name varchar(50),last_name varchar(50),company varchar(100),phone varchar(20),imagen varchar(200) ) 
BEGIN
	UPDATE users SET
		users.id = id,
		users.ip_address = ip_address,
		users.username = username,
		users.password = password,
		users.salt = salt,
		users.email = email,
		users.activation_code = activation_code,
		users.forgotten_password_code = forgotten_password_code,
		users.forgotten_password_time = forgotten_password_time,
		users.remember_code = remember_code,
		users.created_on = created_on,
		users.last_login = last_login,
		users.active = active,
		users.first_name = first_name,
		users.last_name = last_name,
		users.company = company,
		users.phone = phone,
		users.imagen = imagen
	WHERE users.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_users_estado(id int(11) unsigned,imagen varchar(200)) 
BEGIN
	UPDATE users SET
		users.imagen = imagen
	WHERE users.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_users_by_id(id int(11) unsigned) 
BEGIN
	SELECT 
		users.id,
		users.ip_address,
		users.username,
		users.password,
		users.salt,
		users.email,
		users.activation_code,
		users.forgotten_password_code,
		users.forgotten_password_time,
		users.remember_code,
		users.created_on,
		users.last_login,
		users.active,
		users.first_name,
		users.last_name,
		users.company,
		users.phone,
		users.imagen
	FROM users
	WHERE  users.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_users() 
BEGIN
	SELECT 
		users.id,
		users.ip_address,
		users.username,
		users.password,
		users.salt,
		users.email,
		users.activation_code,
		users.forgotten_password_code,
		users.forgotten_password_time,
		users.remember_code,
		users.created_on,
		users.last_login,
		users.active,
		users.first_name,
		users.last_name,
		users.company,
		users.phone,
		users.imagen
	FROM users;
END;;
DELIMITER ;;

