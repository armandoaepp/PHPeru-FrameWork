/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_campus( id int(11),titulo varchar(100),subtitulo varchar(20),descripcion varchar(40),imagen varchar(200),url varchar(75),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  campus(
		campus.id,
		campus.titulo,
		campus.subtitulo,
		campus.descripcion,
		campus.imagen,
		campus.url,
		campus.orden,
		campus.estado,
		campus.fecha
	)
	VALUES(
		id,
		titulo,
		subtitulo,
		descripcion,
		imagen,
		url,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_campus( id int(11),titulo varchar(100),subtitulo varchar(20),descripcion varchar(40),imagen varchar(200),url varchar(75),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE campus SET
		campus.id = id,
		campus.titulo = titulo,
		campus.subtitulo = subtitulo,
		campus.descripcion = descripcion,
		campus.imagen = imagen,
		campus.url = url,
		campus.orden = orden,
		campus.estado = estado,
		campus.fecha = fecha
	WHERE campus.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_campus_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE campus SET
		campus.fecha = fecha
	WHERE campus.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_campus_by_id(id int(11)) 
BEGIN
	SELECT 
		campus.id,
		campus.titulo,
		campus.subtitulo,
		campus.descripcion,
		campus.imagen,
		campus.url,
		campus.orden,
		campus.estado,
		campus.fecha
	FROM campus
	WHERE  campus.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_campus() 
BEGIN
	SELECT 
		campus.id,
		campus.titulo,
		campus.subtitulo,
		campus.descripcion,
		campus.imagen,
		campus.url,
		campus.orden,
		campus.estado,
		campus.fecha
	FROM campus;
END;;
DELIMITER ;;

