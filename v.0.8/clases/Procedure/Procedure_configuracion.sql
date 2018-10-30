/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_configuracion( id int(11),titulo varchar(200),horario text,direccion text,email varchar(200),telefono varchar(20),facebook varchar(75),youtube varchar(75),instagram varchar(75),mapa text,popup varchar(75),show_popup int(1) ) 
BEGIN
	INSERT INTO  configuracion(
		configuracion.id,
		configuracion.titulo,
		configuracion.horario,
		configuracion.direccion,
		configuracion.email,
		configuracion.telefono,
		configuracion.facebook,
		configuracion.youtube,
		configuracion.instagram,
		configuracion.mapa,
		configuracion.popup,
		configuracion.show_popup
	)
	VALUES(
		id,
		titulo,
		horario,
		direccion,
		email,
		telefono,
		facebook,
		youtube,
		instagram,
		mapa,
		popup,
		show_popup
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_configuracion( id int(11),titulo varchar(200),horario text,direccion text,email varchar(200),telefono varchar(20),facebook varchar(75),youtube varchar(75),instagram varchar(75),mapa text,popup varchar(75),show_popup int(1) ) 
BEGIN
	UPDATE configuracion SET
		configuracion.id = id,
		configuracion.titulo = titulo,
		configuracion.horario = horario,
		configuracion.direccion = direccion,
		configuracion.email = email,
		configuracion.telefono = telefono,
		configuracion.facebook = facebook,
		configuracion.youtube = youtube,
		configuracion.instagram = instagram,
		configuracion.mapa = mapa,
		configuracion.popup = popup,
		configuracion.show_popup = show_popup
	WHERE configuracion.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_configuracion_estado(id int(11),show_popup int(1)) 
BEGIN
	UPDATE configuracion SET
		configuracion.show_popup = show_popup
	WHERE configuracion.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_configuracion_by_id(id int(11)) 
BEGIN
	SELECT 
		configuracion.id,
		configuracion.titulo,
		configuracion.horario,
		configuracion.direccion,
		configuracion.email,
		configuracion.telefono,
		configuracion.facebook,
		configuracion.youtube,
		configuracion.instagram,
		configuracion.mapa,
		configuracion.popup,
		configuracion.show_popup
	FROM configuracion
	WHERE  configuracion.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_configuracion() 
BEGIN
	SELECT 
		configuracion.id,
		configuracion.titulo,
		configuracion.horario,
		configuracion.direccion,
		configuracion.email,
		configuracion.telefono,
		configuracion.facebook,
		configuracion.youtube,
		configuracion.instagram,
		configuracion.mapa,
		configuracion.popup,
		configuracion.show_popup
	FROM configuracion;
END;;
DELIMITER ;;

