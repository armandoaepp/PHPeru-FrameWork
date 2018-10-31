/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_red( id int(11),titulo varchar(125),subtitulo varchar(125),tipo varchar(125),vacantes varchar(125),requisitos text,conocimientos text,salario varchar(125),nombrecontacto varchar(125),telefonocontacto varchar(125),emailcontacto varchar(125),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  red(
		red.id,
		red.titulo,
		red.subtitulo,
		red.tipo,
		red.vacantes,
		red.requisitos,
		red.conocimientos,
		red.salario,
		red.nombrecontacto,
		red.telefonocontacto,
		red.emailcontacto,
		red.orden,
		red.estado,
		red.fecha
	)
	VALUES(
		id,
		titulo,
		subtitulo,
		tipo,
		vacantes,
		requisitos,
		conocimientos,
		salario,
		nombrecontacto,
		telefonocontacto,
		emailcontacto,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_red( id int(11),titulo varchar(125),subtitulo varchar(125),tipo varchar(125),vacantes varchar(125),requisitos text,conocimientos text,salario varchar(125),nombrecontacto varchar(125),telefonocontacto varchar(125),emailcontacto varchar(125),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE red SET
		red.id = id,
		red.titulo = titulo,
		red.subtitulo = subtitulo,
		red.tipo = tipo,
		red.vacantes = vacantes,
		red.requisitos = requisitos,
		red.conocimientos = conocimientos,
		red.salario = salario,
		red.nombrecontacto = nombrecontacto,
		red.telefonocontacto = telefonocontacto,
		red.emailcontacto = emailcontacto,
		red.orden = orden,
		red.estado = estado,
		red.fecha = fecha
	WHERE red.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_red_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE red SET
		red.fecha = fecha
	WHERE red.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_red_by_id(id int(11)) 
BEGIN
	SELECT 
		red.id,
		red.titulo,
		red.subtitulo,
		red.tipo,
		red.vacantes,
		red.requisitos,
		red.conocimientos,
		red.salario,
		red.nombrecontacto,
		red.telefonocontacto,
		red.emailcontacto,
		red.orden,
		red.estado,
		red.fecha
	FROM red
	WHERE  red.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_red() 
BEGIN
	SELECT 
		red.id,
		red.titulo,
		red.subtitulo,
		red.tipo,
		red.vacantes,
		red.requisitos,
		red.conocimientos,
		red.salario,
		red.nombrecontacto,
		red.telefonocontacto,
		red.emailcontacto,
		red.orden,
		red.estado,
		red.fecha
	FROM red;
END;;
DELIMITER ;;

