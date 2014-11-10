/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_get_docvehiculo() 
BEGIN
SELECT 
	docvehiculo.iddocvehiculo,
	docvehiculo.idvehiculo,
	docvehiculo.idtipodocumento,
	docvehiculo.item,
	docvehiculo.fecharegistro,
	docvehiculo.fechaemision,
	docvehiculo.fechacaducidad,
	docvehiculo.archivo,
	docvehiculo.glosa,
	docvehiculo.estado
FROM docvehiculo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_set_docvehiculo( iddocvehiculo bigint(20) unsigned,idvehiculo bigint(20),idtipodocumento int(11),item int(11),fecharegistro datetime,fechaemision datetime,fechacaducidad datetime,archivo varchar(255),glosa varchar(255),estado int(11) ) 
BEGIN
INSERT INTO  docvehiculo(
	docvehiculo.iddocvehiculo,
	docvehiculo.idvehiculo,
	docvehiculo.idtipodocumento,
	docvehiculo.item,
	docvehiculo.fecharegistro,
	docvehiculo.fechaemision,
	docvehiculo.fechacaducidad,
	docvehiculo.archivo,
	docvehiculo.glosa,
	docvehiculo.estado
)
VALUES(
	iddocvehiculo,
	idvehiculo,
	idtipodocumento,
	item,
	fecharegistro,
	fechaemision,
	fechacaducidad,
	archivo,
	glosa,
	estado
);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_docvehiculo( iddocvehiculo bigint(20) unsigned,idvehiculo bigint(20),idtipodocumento int(11),item int(11),fecharegistro datetime,fechaemision datetime,fechacaducidad datetime,archivo varchar(255),glosa varchar(255),estado int(11) ) 
BEGIN
UPDATE docvehiculo SET
	docvehiculo.iddocvehiculo = iddocvehiculo,
	docvehiculo.idvehiculo = idvehiculo,
	docvehiculo.idtipodocumento = idtipodocumento,
	docvehiculo.item = item,
	docvehiculo.fecharegistro = fecharegistro,
	docvehiculo.fechaemision = fechaemision,
	docvehiculo.fechacaducidad = fechacaducidad,
	docvehiculo.archivo = archivo,
	docvehiculo.glosa = glosa,
	docvehiculo.estado = estado
WHERE docvehiculo.iddocvehiculo = iddocvehiculo;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_docvehiculo_by_iddocvehiculo(iddocvehiculo bigint(20) unsigned) 
BEGIN
SELECT 
	docvehiculo.iddocvehiculo,
	docvehiculo.idvehiculo,
	docvehiculo.idtipodocumento,
	docvehiculo.item,
	docvehiculo.fecharegistro,
	docvehiculo.fechaemision,
	docvehiculo.fechacaducidad,
	docvehiculo.archivo,
	docvehiculo.glosa,
	docvehiculo.estado
FROM docvehiculo
WHERE  docvehiculo.iddocvehiculo = iddocvehiculo;
END;;
DELIMITER ;;

