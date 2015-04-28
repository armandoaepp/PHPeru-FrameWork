/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_usuario( idusuario bigint(20),nombres varchar(100),nom_usuario varchar(50),pass_usuario varchar(41),telefono1 varchar(15),telefono2 varchar(15),telefono3 varchar(15),email varchar(50),ubigeo varchar(6),fechareg datetime,idcliente bigint(20),estado int(11),superusuario int(11) ) 
BEGIN
	INSERT INTO  usuario(
		usuario.idusuario,
		usuario.nombres,
		usuario.nom_usuario,
		usuario.pass_usuario,
		usuario.telefono1,
		usuario.telefono2,
		usuario.telefono3,
		usuario.email,
		usuario.ubigeo,
		usuario.fechareg,
		usuario.idcliente,
		usuario.estado,
		usuario.superusuario
	)
	VALUES(
		idusuario,
		nombres,
		nom_usuario,
		pass_usuario,
		telefono1,
		telefono2,
		telefono3,
		email,
		ubigeo,
		fechareg,
		idcliente,
		estado,
		superusuario
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_usuario( idusuario bigint(20),nombres varchar(100),nom_usuario varchar(50),pass_usuario varchar(41),telefono1 varchar(15),telefono2 varchar(15),telefono3 varchar(15),email varchar(50),ubigeo varchar(6),fechareg datetime,idcliente bigint(20),estado int(11),superusuario int(11) ) 
BEGIN
	UPDATE usuario SET
		usuario.idusuario = idusuario,
		usuario.nombres = nombres,
		usuario.nom_usuario = nom_usuario,
		usuario.pass_usuario = pass_usuario,
		usuario.telefono1 = telefono1,
		usuario.telefono2 = telefono2,
		usuario.telefono3 = telefono3,
		usuario.email = email,
		usuario.ubigeo = ubigeo,
		usuario.fechareg = fechareg,
		usuario.idcliente = idcliente,
		usuario.estado = estado,
		usuario.superusuario = superusuario
	WHERE usuario.idusuario = idusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_usuario_estado(idusuario bigint(20),superusuario int(11)) 
BEGIN
	UPDATE usuario SET
		usuario.superusuario = superusuario
	WHERE usuario.idusuario = idusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_usuario_by_idusuario(idusuario bigint(20)) 
BEGIN
	SELECT 
		usuario.idusuario,
		usuario.nombres,
		usuario.nom_usuario,
		usuario.pass_usuario,
		usuario.telefono1,
		usuario.telefono2,
		usuario.telefono3,
		usuario.email,
		usuario.ubigeo,
		usuario.fechareg,
		usuario.idcliente,
		usuario.estado,
		usuario.superusuario
	FROM usuario
	WHERE  usuario.idusuario = idusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_usuario() 
BEGIN
	SELECT 
		usuario.idusuario,
		usuario.nombres,
		usuario.nom_usuario,
		usuario.pass_usuario,
		usuario.telefono1,
		usuario.telefono2,
		usuario.telefono3,
		usuario.email,
		usuario.ubigeo,
		usuario.fechareg,
		usuario.idcliente,
		usuario.estado,
		usuario.superusuario
	FROM usuario;
END;;
DELIMITER ;;

