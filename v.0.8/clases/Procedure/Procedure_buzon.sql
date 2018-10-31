/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_buzon( id int(11),nombres varchar(200),telefono varchar(200),email varchar(200),mensaje text,estado int(11),fecha timestamp ) 
BEGIN
	INSERT INTO  buzon(
		buzon.id,
		buzon.nombres,
		buzon.telefono,
		buzon.email,
		buzon.mensaje,
		buzon.estado,
		buzon.fecha
	)
	VALUES(
		id,
		nombres,
		telefono,
		email,
		mensaje,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_buzon( id int(11),nombres varchar(200),telefono varchar(200),email varchar(200),mensaje text,estado int(11),fecha timestamp ) 
BEGIN
	UPDATE buzon SET
		buzon.id = id,
		buzon.nombres = nombres,
		buzon.telefono = telefono,
		buzon.email = email,
		buzon.mensaje = mensaje,
		buzon.estado = estado,
		buzon.fecha = fecha
	WHERE buzon.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_buzon_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE buzon SET
		buzon.fecha = fecha
	WHERE buzon.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_buzon_by_id(id int(11)) 
BEGIN
	SELECT 
		buzon.id,
		buzon.nombres,
		buzon.telefono,
		buzon.email,
		buzon.mensaje,
		buzon.estado,
		buzon.fecha
	FROM buzon
	WHERE  buzon.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_buzon() 
BEGIN
	SELECT 
		buzon.id,
		buzon.nombres,
		buzon.telefono,
		buzon.email,
		buzon.mensaje,
		buzon.estado,
		buzon.fecha
	FROM buzon;
END;;
DELIMITER ;;

