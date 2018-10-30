/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_users_groups( id int(11) unsigned,user_id int(11) unsigned,group_id mediumint(8) unsigned ) 
BEGIN
	INSERT INTO  users_groups(
		users_groups.id,
		users_groups.user_id,
		users_groups.group_id
	)
	VALUES(
		id,
		user_id,
		group_id
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_users_groups( id int(11) unsigned,user_id int(11) unsigned,group_id mediumint(8) unsigned ) 
BEGIN
	UPDATE users_groups SET
		users_groups.id = id,
		users_groups.user_id = user_id,
		users_groups.group_id = group_id
	WHERE users_groups.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_users_groups_estado(id int(11) unsigned,group_id mediumint(8) unsigned) 
BEGIN
	UPDATE users_groups SET
		users_groups.group_id = group_id
	WHERE users_groups.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_users_groups_by_id(id int(11) unsigned) 
BEGIN
	SELECT 
		users_groups.id,
		users_groups.user_id,
		users_groups.group_id
	FROM users_groups
	WHERE  users_groups.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_users_groups() 
BEGIN
	SELECT 
		users_groups.id,
		users_groups.user_id,
		users_groups.group_id
	FROM users_groups;
END;;
DELIMITER ;;

