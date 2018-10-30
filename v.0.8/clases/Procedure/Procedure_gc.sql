/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_gc( idgc bigint(20),razonsocial varchar(100),direccion varchar(200),telefonos varchar(200),telefono2 varchar(15),telefono3 varchar(15),email varchar(100),avatar varchar(200),tipodoc varchar(4),numerodoc varchar(45),representante varchar(100),tipo varchar(2),lugar varchar(6),fechareg datetime,estado int(11),requisitos varchar(200) ) 
BEGIN
	INSERT INTO  gc(
		gc.idgc,
		gc.razonsocial,
		gc.direccion,
		gc.telefonos,
		gc.telefono2,
		gc.telefono3,
		gc.email,
		gc.avatar,
		gc.tipodoc,
		gc.numerodoc,
		gc.representante,
		gc.tipo,
		gc.lugar,
		gc.fechareg,
		gc.estado,
		gc.requisitos
	)
	VALUES(
		idgc,
		razonsocial,
		direccion,
		telefonos,
		telefono2,
		telefono3,
		email,
		avatar,
		tipodoc,
		numerodoc,
		representante,
		tipo,
		lugar,
		fechareg,
		estado,
		requisitos
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_gc( idgc bigint(20),razonsocial varchar(100),direccion varchar(200),telefonos varchar(200),telefono2 varchar(15),telefono3 varchar(15),email varchar(100),avatar varchar(200),tipodoc varchar(4),numerodoc varchar(45),representante varchar(100),tipo varchar(2),lugar varchar(6),fechareg datetime,estado int(11),requisitos varchar(200) ) 
BEGIN
	UPDATE gc SET
		gc.idgc = idgc,
		gc.razonsocial = razonsocial,
		gc.direccion = direccion,
		gc.telefonos = telefonos,
		gc.telefono2 = telefono2,
		gc.telefono3 = telefono3,
		gc.email = email,
		gc.avatar = avatar,
		gc.tipodoc = tipodoc,
		gc.numerodoc = numerodoc,
		gc.representante = representante,
		gc.tipo = tipo,
		gc.lugar = lugar,
		gc.fechareg = fechareg,
		gc.estado = estado,
		gc.requisitos = requisitos
	WHERE gc.idgc = idgc;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_gc_estado(idgc bigint(20),requisitos varchar(200)) 
BEGIN
	UPDATE gc SET
		gc.requisitos = requisitos
	WHERE gc.idgc = idgc;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_gc_by_idgc(idgc bigint(20)) 
BEGIN
	SELECT 
		gc.idgc,
		gc.razonsocial,
		gc.direccion,
		gc.telefonos,
		gc.telefono2,
		gc.telefono3,
		gc.email,
		gc.avatar,
		gc.tipodoc,
		gc.numerodoc,
		gc.representante,
		gc.tipo,
		gc.lugar,
		gc.fechareg,
		gc.estado,
		gc.requisitos
	FROM gc
	WHERE  gc.idgc = idgc;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_gc() 
BEGIN
	SELECT 
		gc.idgc,
		gc.razonsocial,
		gc.direccion,
		gc.telefonos,
		gc.telefono2,
		gc.telefono3,
		gc.email,
		gc.avatar,
		gc.tipodoc,
		gc.numerodoc,
		gc.representante,
		gc.tipo,
		gc.lugar,
		gc.fechareg,
		gc.estado,
		gc.requisitos
	FROM gc;
END;;
DELIMITER ;;

