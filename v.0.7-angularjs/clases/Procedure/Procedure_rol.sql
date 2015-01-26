/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_rol( idrol int(11),nombre varchar(45),estado int(11) ) 
BEGIN
	INSERT INTO  rol(
		rol.idrol,
		rol.nombre,
		rol.estado
	)
	VALUES(
		idrol,
		nombre,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_rol( idrol int(11),nombre varchar(45),estado int(11) ) 
BEGIN
	UPDATE rol SET
		rol.idrol = idrol,
		rol.nombre = nombre,
		rol.estado = estado
	WHERE rol.idrol = idrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_rol_estado(idrol int(11),estado int(11)) 
BEGIN
	UPDATE rol SET
		rol.estado = estado
	WHERE rol.idrol = idrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_rol_by_idrol(idrol int(11)) 
BEGIN
	SELECT 
		rol.idrol,
		rol.nombre,
		rol.estado
	FROM rol
	WHERE  rol.idrol = idrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_rol() 
BEGIN
	SELECT 
		rol.idrol,
		rol.nombre,
		rol.estado
	FROM rol;
END;;
DELIMITER ;;

