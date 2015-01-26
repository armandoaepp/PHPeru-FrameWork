/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_usuario( idusuario int(11) unsigned,idpersona int(11),idrol int(11),idtiporelacion int(11),usuario varchar(45),clave varchar(45),fecha date,estado int(11) ) 
BEGIN
	INSERT INTO  usuario(
		usuario.idusuario,
		usuario.idpersona,
		usuario.idrol,
		usuario.idtiporelacion,
		usuario.usuario,
		usuario.clave,
		usuario.fecha,
		usuario.estado
	)
	VALUES(
		idusuario,
		idpersona,
		idrol,
		idtiporelacion,
		usuario,
		clave,
		fecha,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_usuario( idusuario int(11) unsigned,idpersona int(11),idrol int(11),idtiporelacion int(11),usuario varchar(45),clave varchar(45),fecha date,estado int(11) ) 
BEGIN
	UPDATE usuario SET
		usuario.idusuario = idusuario,
		usuario.idpersona = idpersona,
		usuario.idrol = idrol,
		usuario.idtiporelacion = idtiporelacion,
		usuario.usuario = usuario,
		usuario.clave = clave,
		usuario.fecha = fecha,
		usuario.estado = estado
	WHERE usuario.idusuario = idusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_usuario_estado(idusuario int(11) unsigned,estado int(11)) 
BEGIN
	UPDATE usuario SET
		usuario.estado = estado
	WHERE usuario.idusuario = idusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_usuario_by_idusuario(idusuario int(11) unsigned) 
BEGIN
	SELECT 
		usuario.idusuario,
		usuario.idpersona,
		usuario.idrol,
		usuario.idtiporelacion,
		usuario.usuario,
		usuario.clave,
		usuario.fecha,
		usuario.estado
	FROM usuario
	WHERE  usuario.idusuario = idusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_usuario() 
BEGIN
	SELECT 
		usuario.idusuario,
		usuario.idpersona,
		usuario.idrol,
		usuario.idtiporelacion,
		usuario.usuario,
		usuario.clave,
		usuario.fecha,
		usuario.estado
	FROM usuario;
END;;
DELIMITER ;;

