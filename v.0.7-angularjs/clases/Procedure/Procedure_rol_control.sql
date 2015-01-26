/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_rol_control( idrolcontrol int(11),idrol int(11),idcontrol int(11),referencia varchar(50),estado int(11) ) 
BEGIN
	INSERT INTO  rol_control(
		rol_control.idrolcontrol,
		rol_control.idrol,
		rol_control.idcontrol,
		rol_control.referencia,
		rol_control.estado
	)
	VALUES(
		idrolcontrol,
		idrol,
		idcontrol,
		referencia,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_rol_control( idrolcontrol int(11),idrol int(11),idcontrol int(11),referencia varchar(50),estado int(11) ) 
BEGIN
	UPDATE rol_control SET
		rol_control.idrolcontrol = idrolcontrol,
		rol_control.idrol = idrol,
		rol_control.idcontrol = idcontrol,
		rol_control.referencia = referencia,
		rol_control.estado = estado
	WHERE rol_control.idrolcontrol = idrolcontrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_rol_control_estado(idrolcontrol int(11),estado int(11)) 
BEGIN
	UPDATE rol_control SET
		rol_control.estado = estado
	WHERE rol_control.idrolcontrol = idrolcontrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_rol_control_by_idrolcontrol(idrolcontrol int(11)) 
BEGIN
	SELECT 
		rol_control.idrolcontrol,
		rol_control.idrol,
		rol_control.idcontrol,
		rol_control.referencia,
		rol_control.estado
	FROM rol_control
	WHERE  rol_control.idrolcontrol = idrolcontrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_rol_control() 
BEGIN
	SELECT 
		rol_control.idrolcontrol,
		rol_control.idrol,
		rol_control.idcontrol,
		rol_control.referencia,
		rol_control.estado
	FROM rol_control;
END;;
DELIMITER ;;

