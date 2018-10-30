/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_geocoder( idgeocoder bigint(20) unsigned,idcellocator int(11) unsigned,longuitud decimal(16,12),latidud decimal(16,12),address varchar(500),referencia varchar(255) ) 
BEGIN
	INSERT INTO  geocoder(
		geocoder.idgeocoder,
		geocoder.idcellocator,
		geocoder.longuitud,
		geocoder.latidud,
		geocoder.address,
		geocoder.referencia
	)
	VALUES(
		idgeocoder,
		idcellocator,
		longuitud,
		latidud,
		address,
		referencia
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_geocoder( idgeocoder bigint(20) unsigned,idcellocator int(11) unsigned,longuitud decimal(16,12),latidud decimal(16,12),address varchar(500),referencia varchar(255) ) 
BEGIN
	UPDATE geocoder SET
		geocoder.idgeocoder = idgeocoder,
		geocoder.idcellocator = idcellocator,
		geocoder.longuitud = longuitud,
		geocoder.latidud = latidud,
		geocoder.address = address,
		geocoder.referencia = referencia
	WHERE geocoder.idgeocoder = idgeocoder;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_geocoder_estado(idgeocoder bigint(20) unsigned,referencia varchar(255)) 
BEGIN
	UPDATE geocoder SET
		geocoder.referencia = referencia
	WHERE geocoder.idgeocoder = idgeocoder;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_geocoder_by_idgeocoder(idgeocoder bigint(20) unsigned) 
BEGIN
	SELECT 
		geocoder.idgeocoder,
		geocoder.idcellocator,
		geocoder.longuitud,
		geocoder.latidud,
		geocoder.address,
		geocoder.referencia
	FROM geocoder
	WHERE  geocoder.idgeocoder = idgeocoder;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_geocoder() 
BEGIN
	SELECT 
		geocoder.idgeocoder,
		geocoder.idcellocator,
		geocoder.longuitud,
		geocoder.latidud,
		geocoder.address,
		geocoder.referencia
	FROM geocoder;
END;;
DELIMITER ;;

