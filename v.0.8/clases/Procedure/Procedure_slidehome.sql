/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_slidehome( id int(11),titulo varchar(20),subtitulo varchar(20),descripcion varchar(40),imagen varchar(200),url varchar(75),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  slidehome(
		slidehome.id,
		slidehome.titulo,
		slidehome.subtitulo,
		slidehome.descripcion,
		slidehome.imagen,
		slidehome.url,
		slidehome.orden,
		slidehome.estado,
		slidehome.fecha
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
CREATE PROCEDURE usp_upd_slidehome( id int(11),titulo varchar(20),subtitulo varchar(20),descripcion varchar(40),imagen varchar(200),url varchar(75),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE slidehome SET
		slidehome.id = id,
		slidehome.titulo = titulo,
		slidehome.subtitulo = subtitulo,
		slidehome.descripcion = descripcion,
		slidehome.imagen = imagen,
		slidehome.url = url,
		slidehome.orden = orden,
		slidehome.estado = estado,
		slidehome.fecha = fecha
	WHERE slidehome.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_slidehome_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE slidehome SET
		slidehome.fecha = fecha
	WHERE slidehome.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_slidehome_by_id(id int(11)) 
BEGIN
	SELECT 
		slidehome.id,
		slidehome.titulo,
		slidehome.subtitulo,
		slidehome.descripcion,
		slidehome.imagen,
		slidehome.url,
		slidehome.orden,
		slidehome.estado,
		slidehome.fecha
	FROM slidehome
	WHERE  slidehome.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_slidehome() 
BEGIN
	SELECT 
		slidehome.id,
		slidehome.titulo,
		slidehome.subtitulo,
		slidehome.descripcion,
		slidehome.imagen,
		slidehome.url,
		slidehome.orden,
		slidehome.estado,
		slidehome.fecha
	FROM slidehome;
END;;
DELIMITER ;;

