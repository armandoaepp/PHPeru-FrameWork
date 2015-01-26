/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_acceso_sistema( idaccesosistema int(11),idusuario int(11),idcontrol int(11),referencia varchar(50),estado int(11) ) 
BEGIN
	INSERT INTO  acceso_sistema(
		acceso_sistema.idaccesosistema,
		acceso_sistema.idusuario,
		acceso_sistema.idcontrol,
		acceso_sistema.referencia,
		acceso_sistema.estado
	)
	VALUES(
		idaccesosistema,
		idusuario,
		idcontrol,
		referencia,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_acceso_sistema( idaccesosistema int(11),idusuario int(11),idcontrol int(11),referencia varchar(50),estado int(11) ) 
BEGIN
	UPDATE acceso_sistema SET
		acceso_sistema.idaccesosistema = idaccesosistema,
		acceso_sistema.idusuario = idusuario,
		acceso_sistema.idcontrol = idcontrol,
		acceso_sistema.referencia = referencia,
		acceso_sistema.estado = estado
	WHERE acceso_sistema.idaccesosistema = idaccesosistema;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_acceso_sistema_estado(idaccesosistema int(11),estado int(11)) 
BEGIN
	UPDATE acceso_sistema SET
		acceso_sistema.estado = estado
	WHERE acceso_sistema.idaccesosistema = idaccesosistema;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_acceso_sistema_by_idaccesosistema(idaccesosistema int(11)) 
BEGIN
	SELECT 
		acceso_sistema.idaccesosistema,
		acceso_sistema.idusuario,
		acceso_sistema.idcontrol,
		acceso_sistema.referencia,
		acceso_sistema.estado
	FROM acceso_sistema
	WHERE  acceso_sistema.idaccesosistema = idaccesosistema;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_acceso_sistema() 
BEGIN
	SELECT 
		acceso_sistema.idaccesosistema,
		acceso_sistema.idusuario,
		acceso_sistema.idcontrol,
		acceso_sistema.referencia,
		acceso_sistema.estado
	FROM acceso_sistema;
END;;
DELIMITER ;;

