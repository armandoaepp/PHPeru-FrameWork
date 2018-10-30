/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_facultad( id int(11),titulo text,descripcion text,imagen varchar(200),orden int(11),estado int(1),fecha timestamp,activo int(1) ) 
BEGIN
	INSERT INTO  facultad(
		facultad.id,
		facultad.titulo,
		facultad.descripcion,
		facultad.imagen,
		facultad.orden,
		facultad.estado,
		facultad.fecha,
		facultad.activo
	)
	VALUES(
		id,
		titulo,
		descripcion,
		imagen,
		orden,
		estado,
		fecha,
		activo
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_facultad( id int(11),titulo text,descripcion text,imagen varchar(200),orden int(11),estado int(1),fecha timestamp,activo int(1) ) 
BEGIN
	UPDATE facultad SET
		facultad.id = id,
		facultad.titulo = titulo,
		facultad.descripcion = descripcion,
		facultad.imagen = imagen,
		facultad.orden = orden,
		facultad.estado = estado,
		facultad.fecha = fecha,
		facultad.activo = activo
	WHERE facultad.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_facultad_estado(id int(11),activo int(1)) 
BEGIN
	UPDATE facultad SET
		facultad.activo = activo
	WHERE facultad.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_facultad_by_id(id int(11)) 
BEGIN
	SELECT 
		facultad.id,
		facultad.titulo,
		facultad.descripcion,
		facultad.imagen,
		facultad.orden,
		facultad.estado,
		facultad.fecha,
		facultad.activo
	FROM facultad
	WHERE  facultad.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_facultad() 
BEGIN
	SELECT 
		facultad.id,
		facultad.titulo,
		facultad.descripcion,
		facultad.imagen,
		facultad.orden,
		facultad.estado,
		facultad.fecha,
		facultad.activo
	FROM facultad;
END;;
DELIMITER ;;

