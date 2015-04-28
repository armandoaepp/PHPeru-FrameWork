/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_operador( idoperador bigint(20),nombre varchar(100),nom_operador varchar(100),pass_operador varchar(41),telefono1 varchar(45),telefono2 varchar(45),telefono3 varchar(45),codubigeo varchar(6),fechareg datetime,idtransp bigint(20),estado int(11),superusuario int(11) ) 
BEGIN
	INSERT INTO  operador(
		operador.idoperador,
		operador.nombre,
		operador.nom_operador,
		operador.pass_operador,
		operador.telefono1,
		operador.telefono2,
		operador.telefono3,
		operador.codubigeo,
		operador.fechareg,
		operador.idtransp,
		operador.estado,
		operador.superusuario
	)
	VALUES(
		idoperador,
		nombre,
		nom_operador,
		pass_operador,
		telefono1,
		telefono2,
		telefono3,
		codubigeo,
		fechareg,
		idtransp,
		estado,
		superusuario
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_operador( idoperador bigint(20),nombre varchar(100),nom_operador varchar(100),pass_operador varchar(41),telefono1 varchar(45),telefono2 varchar(45),telefono3 varchar(45),codubigeo varchar(6),fechareg datetime,idtransp bigint(20),estado int(11),superusuario int(11) ) 
BEGIN
	UPDATE operador SET
		operador.idoperador = idoperador,
		operador.nombre = nombre,
		operador.nom_operador = nom_operador,
		operador.pass_operador = pass_operador,
		operador.telefono1 = telefono1,
		operador.telefono2 = telefono2,
		operador.telefono3 = telefono3,
		operador.codubigeo = codubigeo,
		operador.fechareg = fechareg,
		operador.idtransp = idtransp,
		operador.estado = estado,
		operador.superusuario = superusuario
	WHERE operador.idoperador = idoperador;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_operador_estado(idoperador bigint(20),superusuario int(11)) 
BEGIN
	UPDATE operador SET
		operador.superusuario = superusuario
	WHERE operador.idoperador = idoperador;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_operador_by_idoperador(idoperador bigint(20)) 
BEGIN
	SELECT 
		operador.idoperador,
		operador.nombre,
		operador.nom_operador,
		operador.pass_operador,
		operador.telefono1,
		operador.telefono2,
		operador.telefono3,
		operador.codubigeo,
		operador.fechareg,
		operador.idtransp,
		operador.estado,
		operador.superusuario
	FROM operador
	WHERE  operador.idoperador = idoperador;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_operador() 
BEGIN
	SELECT 
		operador.idoperador,
		operador.nombre,
		operador.nom_operador,
		operador.pass_operador,
		operador.telefono1,
		operador.telefono2,
		operador.telefono3,
		operador.codubigeo,
		operador.fechareg,
		operador.idtransp,
		operador.estado,
		operador.superusuario
	FROM operador;
END;;
DELIMITER ;;

