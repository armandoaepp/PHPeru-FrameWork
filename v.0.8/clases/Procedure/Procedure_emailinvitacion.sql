/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_emailinvitacion( idemailinvitacion bigint(20) unsigned,idcontactuser bigint(20),idusuario bigint(20),idmsjemail bigint(20),idproceso bigint(20),email varchar(100),glosa varchar(250),estado tinyint(4) ) 
BEGIN
	INSERT INTO  emailinvitacion(
		emailinvitacion.idemailinvitacion,
		emailinvitacion.idcontactuser,
		emailinvitacion.idusuario,
		emailinvitacion.idmsjemail,
		emailinvitacion.idproceso,
		emailinvitacion.email,
		emailinvitacion.glosa,
		emailinvitacion.estado
	)
	VALUES(
		idemailinvitacion,
		idcontactuser,
		idusuario,
		idmsjemail,
		idproceso,
		email,
		glosa,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_emailinvitacion( idemailinvitacion bigint(20) unsigned,idcontactuser bigint(20),idusuario bigint(20),idmsjemail bigint(20),idproceso bigint(20),email varchar(100),glosa varchar(250),estado tinyint(4) ) 
BEGIN
	UPDATE emailinvitacion SET
		emailinvitacion.idemailinvitacion = idemailinvitacion,
		emailinvitacion.idcontactuser = idcontactuser,
		emailinvitacion.idusuario = idusuario,
		emailinvitacion.idmsjemail = idmsjemail,
		emailinvitacion.idproceso = idproceso,
		emailinvitacion.email = email,
		emailinvitacion.glosa = glosa,
		emailinvitacion.estado = estado
	WHERE emailinvitacion.idemailinvitacion = idemailinvitacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_emailinvitacion_estado(idemailinvitacion bigint(20) unsigned,estado tinyint(4)) 
BEGIN
	UPDATE emailinvitacion SET
		emailinvitacion.estado = estado
	WHERE emailinvitacion.idemailinvitacion = idemailinvitacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_emailinvitacion_by_idemailinvitacion(idemailinvitacion bigint(20) unsigned) 
BEGIN
	SELECT 
		emailinvitacion.idemailinvitacion,
		emailinvitacion.idcontactuser,
		emailinvitacion.idusuario,
		emailinvitacion.idmsjemail,
		emailinvitacion.idproceso,
		emailinvitacion.email,
		emailinvitacion.glosa,
		emailinvitacion.estado
	FROM emailinvitacion
	WHERE  emailinvitacion.idemailinvitacion = idemailinvitacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_emailinvitacion() 
BEGIN
	SELECT 
		emailinvitacion.idemailinvitacion,
		emailinvitacion.idcontactuser,
		emailinvitacion.idusuario,
		emailinvitacion.idmsjemail,
		emailinvitacion.idproceso,
		emailinvitacion.email,
		emailinvitacion.glosa,
		emailinvitacion.estado
	FROM emailinvitacion;
END;;
DELIMITER ;;

