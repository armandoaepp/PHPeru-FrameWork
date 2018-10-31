/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_traslado_pregunta( id int(11),pregunta varchar(50),respuesta text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  traslado_pregunta(
		traslado_pregunta.id,
		traslado_pregunta.pregunta,
		traslado_pregunta.respuesta,
		traslado_pregunta.orden,
		traslado_pregunta.estado,
		traslado_pregunta.fecha
	)
	VALUES(
		id,
		pregunta,
		respuesta,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_traslado_pregunta( id int(11),pregunta varchar(50),respuesta text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE traslado_pregunta SET
		traslado_pregunta.id = id,
		traslado_pregunta.pregunta = pregunta,
		traslado_pregunta.respuesta = respuesta,
		traslado_pregunta.orden = orden,
		traslado_pregunta.estado = estado,
		traslado_pregunta.fecha = fecha
	WHERE traslado_pregunta.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_traslado_pregunta_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE traslado_pregunta SET
		traslado_pregunta.fecha = fecha
	WHERE traslado_pregunta.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_traslado_pregunta_by_id(id int(11)) 
BEGIN
	SELECT 
		traslado_pregunta.id,
		traslado_pregunta.pregunta,
		traslado_pregunta.respuesta,
		traslado_pregunta.orden,
		traslado_pregunta.estado,
		traslado_pregunta.fecha
	FROM traslado_pregunta
	WHERE  traslado_pregunta.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_traslado_pregunta() 
BEGIN
	SELECT 
		traslado_pregunta.id,
		traslado_pregunta.pregunta,
		traslado_pregunta.respuesta,
		traslado_pregunta.orden,
		traslado_pregunta.estado,
		traslado_pregunta.fecha
	FROM traslado_pregunta;
END;;
DELIMITER ;;

