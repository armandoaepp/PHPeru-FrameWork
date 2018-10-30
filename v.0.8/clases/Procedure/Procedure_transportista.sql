/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_transportista( idtransp bigint(20),razonsocial varchar(100),direccion varchar(200),telefonos varchar(200),telefono2 varchar(15),telefono3 varchar(15),email varchar(100),avatar varchar(200),ruc varchar(11),representante varchar(100),puntuacion decimal(6,2),permisos varchar(200),web varchar(100),facebook varchar(100),twitter varchar(50),fechareg datetime,estado int(11),certificada char(1),ubigeo varchar(6) ) 
BEGIN
	INSERT INTO  transportista(
		transportista.idtransp,
		transportista.razonsocial,
		transportista.direccion,
		transportista.telefonos,
		transportista.telefono2,
		transportista.telefono3,
		transportista.email,
		transportista.avatar,
		transportista.ruc,
		transportista.representante,
		transportista.puntuacion,
		transportista.permisos,
		transportista.web,
		transportista.facebook,
		transportista.twitter,
		transportista.fechareg,
		transportista.estado,
		transportista.certificada,
		transportista.ubigeo
	)
	VALUES(
		idtransp,
		razonsocial,
		direccion,
		telefonos,
		telefono2,
		telefono3,
		email,
		avatar,
		ruc,
		representante,
		puntuacion,
		permisos,
		web,
		facebook,
		twitter,
		fechareg,
		estado,
		certificada,
		ubigeo
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_transportista( idtransp bigint(20),razonsocial varchar(100),direccion varchar(200),telefonos varchar(200),telefono2 varchar(15),telefono3 varchar(15),email varchar(100),avatar varchar(200),ruc varchar(11),representante varchar(100),puntuacion decimal(6,2),permisos varchar(200),web varchar(100),facebook varchar(100),twitter varchar(50),fechareg datetime,estado int(11),certificada char(1),ubigeo varchar(6) ) 
BEGIN
	UPDATE transportista SET
		transportista.idtransp = idtransp,
		transportista.razonsocial = razonsocial,
		transportista.direccion = direccion,
		transportista.telefonos = telefonos,
		transportista.telefono2 = telefono2,
		transportista.telefono3 = telefono3,
		transportista.email = email,
		transportista.avatar = avatar,
		transportista.ruc = ruc,
		transportista.representante = representante,
		transportista.puntuacion = puntuacion,
		transportista.permisos = permisos,
		transportista.web = web,
		transportista.facebook = facebook,
		transportista.twitter = twitter,
		transportista.fechareg = fechareg,
		transportista.estado = estado,
		transportista.certificada = certificada,
		transportista.ubigeo = ubigeo
	WHERE transportista.idtransp = idtransp;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_transportista_estado(idtransp bigint(20),ubigeo varchar(6)) 
BEGIN
	UPDATE transportista SET
		transportista.ubigeo = ubigeo
	WHERE transportista.idtransp = idtransp;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_transportista_by_idtransp(idtransp bigint(20)) 
BEGIN
	SELECT 
		transportista.idtransp,
		transportista.razonsocial,
		transportista.direccion,
		transportista.telefonos,
		transportista.telefono2,
		transportista.telefono3,
		transportista.email,
		transportista.avatar,
		transportista.ruc,
		transportista.representante,
		transportista.puntuacion,
		transportista.permisos,
		transportista.web,
		transportista.facebook,
		transportista.twitter,
		transportista.fechareg,
		transportista.estado,
		transportista.certificada,
		transportista.ubigeo
	FROM transportista
	WHERE  transportista.idtransp = idtransp;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_transportista() 
BEGIN
	SELECT 
		transportista.idtransp,
		transportista.razonsocial,
		transportista.direccion,
		transportista.telefonos,
		transportista.telefono2,
		transportista.telefono3,
		transportista.email,
		transportista.avatar,
		transportista.ruc,
		transportista.representante,
		transportista.puntuacion,
		transportista.permisos,
		transportista.web,
		transportista.facebook,
		transportista.twitter,
		transportista.fechareg,
		transportista.estado,
		transportista.certificada,
		transportista.ubigeo
	FROM transportista;
END;;
DELIMITER ;;

