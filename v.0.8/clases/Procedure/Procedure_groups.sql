/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_groups( id mediumint(8) unsigned,name varchar(20),description varchar(100) ) 
BEGIN
	INSERT INTO  groups(
		groups.id,
		groups.name,
		groups.description
	)
	VALUES(
		id,
		name,
		description
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_groups( id mediumint(8) unsigned,name varchar(20),description varchar(100) ) 
BEGIN
	UPDATE groups SET
		groups.id = id,
		groups.name = name,
		groups.description = description
	WHERE groups.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_groups_estado(id mediumint(8) unsigned,description varchar(100)) 
BEGIN
	UPDATE groups SET
		groups.description = description
	WHERE groups.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_groups_by_id(id mediumint(8) unsigned) 
BEGIN
	SELECT 
		groups.id,
		groups.name,
		groups.description
	FROM groups
	WHERE  groups.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_groups() 
BEGIN
	SELECT 
		groups.id,
		groups.name,
		groups.description
	FROM groups;
END;;
DELIMITER ;;

