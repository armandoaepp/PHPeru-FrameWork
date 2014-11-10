/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_get_negociacion() 
BEGIN
SELECT 
	negociacion.idnegociacion,
	negociacion.importe,
	negociacion.fecha,
	negociacion.okcliente,
	negociacion.oktransp,
	negociacion.estado,
	negociacion.idsolicitud,
	negociacion.idoperador,
	negociacion.idusuario,
	negociacion.idvehiculo
FROM negociacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_set_negociacion( idnegociacion bigint(20),importe double,fecha datetime,okcliente varchar(2),oktransp varchar(2),estado varchar(2),idsolicitud bigint(20),idoperador bigint(20),idusuario bigint(20),idvehiculo bigint(20) ) 
BEGIN
INSERT INTO  negociacion(
	negociacion.idnegociacion,
	negociacion.importe,
	negociacion.fecha,
	negociacion.okcliente,
	negociacion.oktransp,
	negociacion.estado,
	negociacion.idsolicitud,
	negociacion.idoperador,
	negociacion.idusuario,
	negociacion.idvehiculo
)
VALUES(
	idnegociacion,
	importe,
	fecha,
	okcliente,
	oktransp,
	estado,
	idsolicitud,
	idoperador,
	idusuario,
	idvehiculo
);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_negociacion( idnegociacion bigint(20),importe double,fecha datetime,okcliente varchar(2),oktransp varchar(2),estado varchar(2),idsolicitud bigint(20),idoperador bigint(20),idusuario bigint(20),idvehiculo bigint(20) ) 
BEGIN
UPDATE negociacion SET
	negociacion.idnegociacion = idnegociacion,
	negociacion.importe = importe,
	negociacion.fecha = fecha,
	negociacion.okcliente = okcliente,
	negociacion.oktransp = oktransp,
	negociacion.estado = estado,
	negociacion.idsolicitud = idsolicitud,
	negociacion.idoperador = idoperador,
	negociacion.idusuario = idusuario,
	negociacion.idvehiculo = idvehiculo
WHERE negociacion.idnegociacion = idnegociacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_negociacion_by_idnegociacion(idnegociacion bigint(20)) 
BEGIN
SELECT 
	negociacion.idnegociacion,
	negociacion.importe,
	negociacion.fecha,
	negociacion.okcliente,
	negociacion.oktransp,
	negociacion.estado,
	negociacion.idsolicitud,
	negociacion.idoperador,
	negociacion.idusuario,
	negociacion.idvehiculo
FROM negociacion
WHERE  negociacion.idnegociacion = idnegociacion;
END;;
DELIMITER ;;

