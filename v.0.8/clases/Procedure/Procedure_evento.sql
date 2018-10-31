/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_evento( id int(11),titulo varchar(120),descripcion longtext,imagen varchar(200),nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  evento(
		evento.id,
		evento.titulo,
		evento.descripcion,
		evento.imagen,
		evento.nombreseo,
		evento.orden,
		evento.estado,
		evento.fecha
	)
	VALUES(
		id,
		titulo,
		descripcion,
		imagen,
		nombreseo,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_evento( id int(11),titulo varchar(120),descripcion longtext,imagen varchar(200),nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE evento SET
		evento.id = id,
		evento.titulo = titulo,
		evento.descripcion = descripcion,
		evento.imagen = imagen,
		evento.nombreseo = nombreseo,
		evento.orden = orden,
		evento.estado = estado,
		evento.fecha = fecha
	WHERE evento.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_evento_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE evento SET
		evento.fecha = fecha
	WHERE evento.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_evento_by_id(id int(11)) 
BEGIN
	SELECT 
		evento.id,
		evento.titulo,
		evento.descripcion,
		evento.imagen,
		evento.nombreseo,
		evento.orden,
		evento.estado,
		evento.fecha
	FROM evento
	WHERE  evento.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_evento() 
BEGIN
	SELECT 
		evento.id,
		evento.titulo,
		evento.descripcion,
		evento.imagen,
		evento.nombreseo,
		evento.orden,
		evento.estado,
		evento.fecha
	FROM evento;
END;;
DELIMITER ;;

