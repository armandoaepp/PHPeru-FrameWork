/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_noticias( id int(11),titulo text,descripcion text,imagen varchar(200),banner varchar(75),nombreseo varchar(75),orden int(11),estado int(1),fecha timestamp,activo int(1) ) 
BEGIN
	INSERT INTO  noticias(
		noticias.id,
		noticias.titulo,
		noticias.descripcion,
		noticias.imagen,
		noticias.banner,
		noticias.nombreseo,
		noticias.orden,
		noticias.estado,
		noticias.fecha,
		noticias.activo
	)
	VALUES(
		id,
		titulo,
		descripcion,
		imagen,
		banner,
		nombreseo,
		orden,
		estado,
		fecha,
		activo
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_noticias( id int(11),titulo text,descripcion text,imagen varchar(200),banner varchar(75),nombreseo varchar(75),orden int(11),estado int(1),fecha timestamp,activo int(1) ) 
BEGIN
	UPDATE noticias SET
		noticias.id = id,
		noticias.titulo = titulo,
		noticias.descripcion = descripcion,
		noticias.imagen = imagen,
		noticias.banner = banner,
		noticias.nombreseo = nombreseo,
		noticias.orden = orden,
		noticias.estado = estado,
		noticias.fecha = fecha,
		noticias.activo = activo
	WHERE noticias.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_noticias_estado(id int(11),activo int(1)) 
BEGIN
	UPDATE noticias SET
		noticias.activo = activo
	WHERE noticias.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_noticias_by_id(id int(11)) 
BEGIN
	SELECT 
		noticias.id,
		noticias.titulo,
		noticias.descripcion,
		noticias.imagen,
		noticias.banner,
		noticias.nombreseo,
		noticias.orden,
		noticias.estado,
		noticias.fecha,
		noticias.activo
	FROM noticias
	WHERE  noticias.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_noticias() 
BEGIN
	SELECT 
		noticias.id,
		noticias.titulo,
		noticias.descripcion,
		noticias.imagen,
		noticias.banner,
		noticias.nombreseo,
		noticias.orden,
		noticias.estado,
		noticias.fecha,
		noticias.activo
	FROM noticias;
END;;
DELIMITER ;;

