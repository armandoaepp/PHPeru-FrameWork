/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_mensaje( id int(11),titulo text,imagen varchar(200),descripcion text,descripcion_2 text,slogan text,mision text,vision text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  mensaje(
		mensaje.id,
		mensaje.titulo,
		mensaje.imagen,
		mensaje.descripcion,
		mensaje.descripcion_2,
		mensaje.slogan,
		mensaje.mision,
		mensaje.vision,
		mensaje.orden,
		mensaje.estado,
		mensaje.fecha
	)
	VALUES(
		id,
		titulo,
		imagen,
		descripcion,
		descripcion_2,
		slogan,
		mision,
		vision,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_mensaje( id int(11),titulo text,imagen varchar(200),descripcion text,descripcion_2 text,slogan text,mision text,vision text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE mensaje SET
		mensaje.id = id,
		mensaje.titulo = titulo,
		mensaje.imagen = imagen,
		mensaje.descripcion = descripcion,
		mensaje.descripcion_2 = descripcion_2,
		mensaje.slogan = slogan,
		mensaje.mision = mision,
		mensaje.vision = vision,
		mensaje.orden = orden,
		mensaje.estado = estado,
		mensaje.fecha = fecha
	WHERE mensaje.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_mensaje_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE mensaje SET
		mensaje.fecha = fecha
	WHERE mensaje.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_mensaje_by_id(id int(11)) 
BEGIN
	SELECT 
		mensaje.id,
		mensaje.titulo,
		mensaje.imagen,
		mensaje.descripcion,
		mensaje.descripcion_2,
		mensaje.slogan,
		mensaje.mision,
		mensaje.vision,
		mensaje.orden,
		mensaje.estado,
		mensaje.fecha
	FROM mensaje
	WHERE  mensaje.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_mensaje() 
BEGIN
	SELECT 
		mensaje.id,
		mensaje.titulo,
		mensaje.imagen,
		mensaje.descripcion,
		mensaje.descripcion_2,
		mensaje.slogan,
		mensaje.mision,
		mensaje.vision,
		mensaje.orden,
		mensaje.estado,
		mensaje.fecha
	FROM mensaje;
END;;
DELIMITER ;;

