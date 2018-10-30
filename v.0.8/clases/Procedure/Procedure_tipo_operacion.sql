/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_tipo_operacion( idtipo_operacion int(11),descripcion varchar(45),estado tinyint(1) unsigned ) 
BEGIN
	INSERT INTO  tipo_operacion(
		tipo_operacion.idtipo_operacion,
		tipo_operacion.descripcion,
		tipo_operacion.estado
	)
	VALUES(
		idtipo_operacion,
		descripcion,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipo_operacion( idtipo_operacion int(11),descripcion varchar(45),estado tinyint(1) unsigned ) 
BEGIN
	UPDATE tipo_operacion SET
		tipo_operacion.idtipo_operacion = idtipo_operacion,
		tipo_operacion.descripcion = descripcion,
		tipo_operacion.estado = estado
	WHERE tipo_operacion.idtipo_operacion = idtipo_operacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipo_operacion_estado(idtipo_operacion int(11),estado tinyint(1) unsigned) 
BEGIN
	UPDATE tipo_operacion SET
		tipo_operacion.estado = estado
	WHERE tipo_operacion.idtipo_operacion = idtipo_operacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipo_operacion_by_idtipo_operacion(idtipo_operacion int(11)) 
BEGIN
	SELECT 
		tipo_operacion.idtipo_operacion,
		tipo_operacion.descripcion,
		tipo_operacion.estado
	FROM tipo_operacion
	WHERE  tipo_operacion.idtipo_operacion = idtipo_operacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipo_operacion() 
BEGIN
	SELECT 
		tipo_operacion.idtipo_operacion,
		tipo_operacion.descripcion,
		tipo_operacion.estado
	FROM tipo_operacion;
END;;
DELIMITER ;;

