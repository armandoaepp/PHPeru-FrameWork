/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_tipo_operacion( idtipo_operacion int(11),descripcion varchar(45) ) 
BEGIN
	INSERT INTO  tipo_operacion(
		tipo_operacion.idtipo_operacion,
		tipo_operacion.descripcion
	)
	VALUES(
		idtipo_operacion,
		descripcion
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipo_operacion( idtipo_operacion int(11),descripcion varchar(45) ) 
BEGIN
	UPDATE tipo_operacion SET
		tipo_operacion.idtipo_operacion = idtipo_operacion,
		tipo_operacion.descripcion = descripcion
	WHERE tipo_operacion.idtipo_operacion = idtipo_operacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipo_operacion_estado(idtipo_operacion int(11),descripcion varchar(45)) 
BEGIN
	UPDATE tipo_operacion SET
		tipo_operacion.descripcion = descripcion
	WHERE tipo_operacion.idtipo_operacion = idtipo_operacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipo_operacion_by_idtipo_operacion(idtipo_operacion int(11)) 
BEGIN
	SELECT 
		tipo_operacion.idtipo_operacion,
		tipo_operacion.descripcion
	FROM tipo_operacion
	WHERE  tipo_operacion.idtipo_operacion = idtipo_operacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipo_operacion() 
BEGIN
	SELECT 
		tipo_operacion.idtipo_operacion,
		tipo_operacion.descripcion
	FROM tipo_operacion;
END;;
DELIMITER ;;

