/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_ubigeo( codubigeo varchar(6),lugar varchar(100),longitud varchar(50),latitud varchar(50) ) 
BEGIN
	INSERT INTO  ubigeo(
		ubigeo.codubigeo,
		ubigeo.lugar,
		ubigeo.longitud,
		ubigeo.latitud
	)
	VALUES(
		codubigeo,
		lugar,
		longitud,
		latitud
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_ubigeo( codubigeo varchar(6),lugar varchar(100),longitud varchar(50),latitud varchar(50) ) 
BEGIN
	UPDATE ubigeo SET
		ubigeo.codubigeo = codubigeo,
		ubigeo.lugar = lugar,
		ubigeo.longitud = longitud,
		ubigeo.latitud = latitud
	WHERE ubigeo.codubigeo = codubigeo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_ubigeo_estado(codubigeo varchar(6),latitud varchar(50)) 
BEGIN
	UPDATE ubigeo SET
		ubigeo.latitud = latitud
	WHERE ubigeo.codubigeo = codubigeo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_ubigeo_by_codubigeo(codubigeo varchar(6)) 
BEGIN
	SELECT 
		ubigeo.codubigeo,
		ubigeo.lugar,
		ubigeo.longitud,
		ubigeo.latitud
	FROM ubigeo
	WHERE  ubigeo.codubigeo = codubigeo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_ubigeo() 
BEGIN
	SELECT 
		ubigeo.codubigeo,
		ubigeo.lugar,
		ubigeo.longitud,
		ubigeo.latitud
	FROM ubigeo;
END;;
DELIMITER ;;

