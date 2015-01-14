/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_prueba( id int(11) unsigned,Nombres varchar(255),Apellidos varchar(255) ) 
BEGIN
	INSERT INTO  prueba(
		prueba.id,
		prueba.Nombres,
		prueba.Apellidos
	)
	VALUES(
		id,
		Nombres,
		Apellidos
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_prueba( id int(11) unsigned,Nombres varchar(255),Apellidos varchar(255) ) 
BEGIN
	UPDATE prueba SET
		prueba.id = id,
		prueba.Nombres = Nombres,
		prueba.Apellidos = Apellidos
	WHERE prueba.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_prueba_estado(id int(11) unsigned,Apellidos varchar(255)) 
BEGIN
	UPDATE prueba SET
		prueba.Apellidos = Apellidos
	WHERE prueba.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_prueba_by_id(id int(11) unsigned) 
BEGIN
	SELECT 
		prueba.id,
		prueba.Nombres,
		prueba.Apellidos
	FROM prueba
	WHERE  prueba.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_prueba() 
BEGIN
	SELECT 
		prueba.id,
		prueba.Nombres,
		prueba.Apellidos
	FROM prueba;
END;;
DELIMITER ;;

