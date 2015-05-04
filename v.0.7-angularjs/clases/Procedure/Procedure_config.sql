/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_config( idconfig int(10) unsigned,idtipoentidad int(11) unsigned,idvalor int(11) unsigned,valor decimal(10,0),referencia varchar(100),estado tinyint(3) ) 
BEGIN
	INSERT INTO  config(
		config.idconfig,
		config.idtipoentidad,
		config.idvalor,
		config.valor,
		config.referencia,
		config.estado
	)
	VALUES(
		idconfig,
		idtipoentidad,
		idvalor,
		valor,
		referencia,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_config( idconfig int(10) unsigned,idtipoentidad int(11) unsigned,idvalor int(11) unsigned,valor decimal(10,0),referencia varchar(100),estado tinyint(3) ) 
BEGIN
	UPDATE config SET
		config.idconfig = idconfig,
		config.idtipoentidad = idtipoentidad,
		config.idvalor = idvalor,
		config.valor = valor,
		config.referencia = referencia,
		config.estado = estado
	WHERE config.idconfig = idconfig;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_config_estado(idconfig int(10) unsigned,estado tinyint(3)) 
BEGIN
	UPDATE config SET
		config.estado = estado
	WHERE config.idconfig = idconfig;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_config_by_idconfig(idconfig int(10) unsigned) 
BEGIN
	SELECT 
		config.idconfig,
		config.idtipoentidad,
		config.idvalor,
		config.valor,
		config.referencia,
		config.estado
	FROM config
	WHERE  config.idconfig = idconfig;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_config() 
BEGIN
	SELECT 
		config.idconfig,
		config.idtipoentidad,
		config.idvalor,
		config.valor,
		config.referencia,
		config.estado
	FROM config;
END;;
DELIMITER ;;

