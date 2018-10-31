/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_buzon_retiro( id int(11),nombres varchar(200),titulo_retiro text,email varchar(200),mensaje text,estado int(11),fecha timestamp ) 
BEGIN
	INSERT INTO  buzon_retiro(
		buzon_retiro.id,
		buzon_retiro.nombres,
		buzon_retiro.titulo_retiro,
		buzon_retiro.email,
		buzon_retiro.mensaje,
		buzon_retiro.estado,
		buzon_retiro.fecha
	)
	VALUES(
		id,
		nombres,
		titulo_retiro,
		email,
		mensaje,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_buzon_retiro( id int(11),nombres varchar(200),titulo_retiro text,email varchar(200),mensaje text,estado int(11),fecha timestamp ) 
BEGIN
	UPDATE buzon_retiro SET
		buzon_retiro.id = id,
		buzon_retiro.nombres = nombres,
		buzon_retiro.titulo_retiro = titulo_retiro,
		buzon_retiro.email = email,
		buzon_retiro.mensaje = mensaje,
		buzon_retiro.estado = estado,
		buzon_retiro.fecha = fecha
	WHERE buzon_retiro.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_buzon_retiro_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE buzon_retiro SET
		buzon_retiro.fecha = fecha
	WHERE buzon_retiro.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_buzon_retiro_by_id(id int(11)) 
BEGIN
	SELECT 
		buzon_retiro.id,
		buzon_retiro.nombres,
		buzon_retiro.titulo_retiro,
		buzon_retiro.email,
		buzon_retiro.mensaje,
		buzon_retiro.estado,
		buzon_retiro.fecha
	FROM buzon_retiro
	WHERE  buzon_retiro.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_buzon_retiro() 
BEGIN
	SELECT 
		buzon_retiro.id,
		buzon_retiro.nombres,
		buzon_retiro.titulo_retiro,
		buzon_retiro.email,
		buzon_retiro.mensaje,
		buzon_retiro.estado,
		buzon_retiro.fecha
	FROM buzon_retiro;
END;;
DELIMITER ;;

