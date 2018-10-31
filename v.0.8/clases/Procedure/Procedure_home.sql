/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_home( id int(11),titulo text,url varchar(75),imagen varchar(75),titulo_2 text,url_2 varchar(75),imagen_2 varchar(75),titulo_3 text,url_3 varchar(75),imagen_3 varchar(75),convenios text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  home(
		home.id,
		home.titulo,
		home.url,
		home.imagen,
		home.titulo_2,
		home.url_2,
		home.imagen_2,
		home.titulo_3,
		home.url_3,
		home.imagen_3,
		home.convenios,
		home.orden,
		home.estado,
		home.fecha
	)
	VALUES(
		id,
		titulo,
		url,
		imagen,
		titulo_2,
		url_2,
		imagen_2,
		titulo_3,
		url_3,
		imagen_3,
		convenios,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_home( id int(11),titulo text,url varchar(75),imagen varchar(75),titulo_2 text,url_2 varchar(75),imagen_2 varchar(75),titulo_3 text,url_3 varchar(75),imagen_3 varchar(75),convenios text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE home SET
		home.id = id,
		home.titulo = titulo,
		home.url = url,
		home.imagen = imagen,
		home.titulo_2 = titulo_2,
		home.url_2 = url_2,
		home.imagen_2 = imagen_2,
		home.titulo_3 = titulo_3,
		home.url_3 = url_3,
		home.imagen_3 = imagen_3,
		home.convenios = convenios,
		home.orden = orden,
		home.estado = estado,
		home.fecha = fecha
	WHERE home.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_home_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE home SET
		home.fecha = fecha
	WHERE home.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_home_by_id(id int(11)) 
BEGIN
	SELECT 
		home.id,
		home.titulo,
		home.url,
		home.imagen,
		home.titulo_2,
		home.url_2,
		home.imagen_2,
		home.titulo_3,
		home.url_3,
		home.imagen_3,
		home.convenios,
		home.orden,
		home.estado,
		home.fecha
	FROM home
	WHERE  home.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_home() 
BEGIN
	SELECT 
		home.id,
		home.titulo,
		home.url,
		home.imagen,
		home.titulo_2,
		home.url_2,
		home.imagen_2,
		home.titulo_3,
		home.url_3,
		home.imagen_3,
		home.convenios,
		home.orden,
		home.estado,
		home.fecha
	FROM home;
END;;
DELIMITER ;;

