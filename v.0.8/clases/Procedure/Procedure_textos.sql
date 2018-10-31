/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_textos( id int(11),identificador text,titulo text,descripcion text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  textos(
		textos.id,
		textos.identificador,
		textos.titulo,
		textos.descripcion,
		textos.orden,
		textos.estado,
		textos.fecha
	)
	VALUES(
		id,
		identificador,
		titulo,
		descripcion,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_textos( id int(11),identificador text,titulo text,descripcion text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE textos SET
		textos.id = id,
		textos.identificador = identificador,
		textos.titulo = titulo,
		textos.descripcion = descripcion,
		textos.orden = orden,
		textos.estado = estado,
		textos.fecha = fecha
	WHERE textos.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_textos_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE textos SET
		textos.fecha = fecha
	WHERE textos.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_textos_by_id(id int(11)) 
BEGIN
	SELECT 
		textos.id,
		textos.identificador,
		textos.titulo,
		textos.descripcion,
		textos.orden,
		textos.estado,
		textos.fecha
	FROM textos
	WHERE  textos.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_textos() 
BEGIN
	SELECT 
		textos.id,
		textos.identificador,
		textos.titulo,
		textos.descripcion,
		textos.orden,
		textos.estado,
		textos.fecha
	FROM textos;
END;;
DELIMITER ;;

