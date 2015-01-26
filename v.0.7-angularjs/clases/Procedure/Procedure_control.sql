/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_control( idcontrol int(11),idcontrolpadre int(11),idtipocontrol int(11),jerarquia varchar(50),nombre varchar(50),valor varchar(50),descripcion varchar(50),estado int(11) ) 
BEGIN
	INSERT INTO  control(
		control.idcontrol,
		control.idcontrolpadre,
		control.idtipocontrol,
		control.jerarquia,
		control.nombre,
		control.valor,
		control.descripcion,
		control.estado
	)
	VALUES(
		idcontrol,
		idcontrolpadre,
		idtipocontrol,
		jerarquia,
		nombre,
		valor,
		descripcion,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_control( idcontrol int(11),idcontrolpadre int(11),idtipocontrol int(11),jerarquia varchar(50),nombre varchar(50),valor varchar(50),descripcion varchar(50),estado int(11) ) 
BEGIN
	UPDATE control SET
		control.idcontrol = idcontrol,
		control.idcontrolpadre = idcontrolpadre,
		control.idtipocontrol = idtipocontrol,
		control.jerarquia = jerarquia,
		control.nombre = nombre,
		control.valor = valor,
		control.descripcion = descripcion,
		control.estado = estado
	WHERE control.idcontrol = idcontrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_control_estado(idcontrol int(11),estado int(11)) 
BEGIN
	UPDATE control SET
		control.estado = estado
	WHERE control.idcontrol = idcontrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_control_by_idcontrol(idcontrol int(11)) 
BEGIN
	SELECT 
		control.idcontrol,
		control.idcontrolpadre,
		control.idtipocontrol,
		control.jerarquia,
		control.nombre,
		control.valor,
		control.descripcion,
		control.estado
	FROM control
	WHERE  control.idcontrol = idcontrol;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_control() 
BEGIN
	SELECT 
		control.idcontrol,
		control.idcontrolpadre,
		control.idtipocontrol,
		control.jerarquia,
		control.nombre,
		control.valor,
		control.descripcion,
		control.estado
	FROM control;
END;;
DELIMITER ;;

