/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_chef( id int(11),titulo varchar(120),subtitulo varchar(120),resumen varchar(150),descripcion longtext,imagen varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  chef(
		chef.id,
		chef.titulo,
		chef.subtitulo,
		chef.resumen,
		chef.descripcion,
		chef.imagen,
		chef.orden,
		chef.estado,
		chef.fecha
	)
	VALUES(
		id,
		titulo,
		subtitulo,
		resumen,
		descripcion,
		imagen,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_chef( id int(11),titulo varchar(120),subtitulo varchar(120),resumen varchar(150),descripcion longtext,imagen varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE chef SET
		chef.id = id,
		chef.titulo = titulo,
		chef.subtitulo = subtitulo,
		chef.resumen = resumen,
		chef.descripcion = descripcion,
		chef.imagen = imagen,
		chef.orden = orden,
		chef.estado = estado,
		chef.fecha = fecha
	WHERE chef.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_chef_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE chef SET
		chef.fecha = fecha
	WHERE chef.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_chef_by_id(id int(11)) 
BEGIN
	SELECT 
		chef.id,
		chef.titulo,
		chef.subtitulo,
		chef.resumen,
		chef.descripcion,
		chef.imagen,
		chef.orden,
		chef.estado,
		chef.fecha
	FROM chef
	WHERE  chef.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_chef() 
BEGIN
	SELECT 
		chef.id,
		chef.titulo,
		chef.subtitulo,
		chef.resumen,
		chef.descripcion,
		chef.imagen,
		chef.orden,
		chef.estado,
		chef.fecha
	FROM chef;
END;;
DELIMITER ;;

