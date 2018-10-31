/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_buzon_contacto( id int(11),nombre varchar(35),dni varchar(15),email varchar(75),telefono varchar(15),fecha timestamp ) 
BEGIN
	INSERT INTO  buzon_contacto(
		buzon_contacto.id,
		buzon_contacto.nombre,
		buzon_contacto.dni,
		buzon_contacto.email,
		buzon_contacto.telefono,
		buzon_contacto.fecha
	)
	VALUES(
		id,
		nombre,
		dni,
		email,
		telefono,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_buzon_contacto( id int(11),nombre varchar(35),dni varchar(15),email varchar(75),telefono varchar(15),fecha timestamp ) 
BEGIN
	UPDATE buzon_contacto SET
		buzon_contacto.id = id,
		buzon_contacto.nombre = nombre,
		buzon_contacto.dni = dni,
		buzon_contacto.email = email,
		buzon_contacto.telefono = telefono,
		buzon_contacto.fecha = fecha
	WHERE buzon_contacto.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_buzon_contacto_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE buzon_contacto SET
		buzon_contacto.fecha = fecha
	WHERE buzon_contacto.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_buzon_contacto_by_id(id int(11)) 
BEGIN
	SELECT 
		buzon_contacto.id,
		buzon_contacto.nombre,
		buzon_contacto.dni,
		buzon_contacto.email,
		buzon_contacto.telefono,
		buzon_contacto.fecha
	FROM buzon_contacto
	WHERE  buzon_contacto.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_buzon_contacto() 
BEGIN
	SELECT 
		buzon_contacto.id,
		buzon_contacto.nombre,
		buzon_contacto.dni,
		buzon_contacto.email,
		buzon_contacto.telefono,
		buzon_contacto.fecha
	FROM buzon_contacto;
END;;
DELIMITER ;;

