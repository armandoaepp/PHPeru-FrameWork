/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_get_solicitud() 
BEGIN
SELECT 
	solicitud.idsolicitud,
	solicitud.fecha_ini,
	solicitud.fecha_fin,
	solicitud.peso,
	solicitud.volumen,
	solicitud.direccion_origen,
	solicitud.ref_dirorigen,
	solicitud.direccion_destino,
	solicitud.ref_dirdestino,
	solicitud.puntuacion,
	solicitud.importe,
	solicitud.comision,
	solicitud.estado,
	solicitud.fechareg,
	solicitud.idusuario,
	solicitud.tipopago,
	solicitud.tipotiempo,
	solicitud.cantiempo,
	solicitud.ubigeo_origen,
	solicitud.ubigeo_destino,
	solicitud.idoperador,
	solicitud.descripcion,
	solicitud.idproducto,
	solicitud.idvehiculo,
	solicitud.oferta_inicial,
	solicitud.urgente
FROM solicitud;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_set_solicitud( idsolicitud bigint(20),fecha_ini datetime,fecha_fin datetime,peso decimal(6,2),volumen decimal(6,2),direccion_origen varchar(200),ref_dirorigen varchar(200),direccion_destino varchar(200),ref_dirdestino varchar(200),puntuacion decimal(4,2),importe decimal(12,2),comision decimal(12,2),estado varchar(4),fechareg datetime,idusuario bigint(20),tipopago char(4),tipotiempo char(3),cantiempo int(11),ubigeo_origen varchar(6),ubigeo_destino varchar(6),idoperador bigint(20),descripcion text,idproducto int(11),idvehiculo bigint(20),oferta_inicial decimal(12,2),urgente char(1) ) 
BEGIN
INSERT INTO  solicitud(
	solicitud.idsolicitud,
	solicitud.fecha_ini,
	solicitud.fecha_fin,
	solicitud.peso,
	solicitud.volumen,
	solicitud.direccion_origen,
	solicitud.ref_dirorigen,
	solicitud.direccion_destino,
	solicitud.ref_dirdestino,
	solicitud.puntuacion,
	solicitud.importe,
	solicitud.comision,
	solicitud.estado,
	solicitud.fechareg,
	solicitud.idusuario,
	solicitud.tipopago,
	solicitud.tipotiempo,
	solicitud.cantiempo,
	solicitud.ubigeo_origen,
	solicitud.ubigeo_destino,
	solicitud.idoperador,
	solicitud.descripcion,
	solicitud.idproducto,
	solicitud.idvehiculo,
	solicitud.oferta_inicial,
	solicitud.urgente
)
VALUES(
	idsolicitud,
	fecha_ini,
	fecha_fin,
	peso,
	volumen,
	direccion_origen,
	ref_dirorigen,
	direccion_destino,
	ref_dirdestino,
	puntuacion,
	importe,
	comision,
	estado,
	fechareg,
	idusuario,
	tipopago,
	tipotiempo,
	cantiempo,
	ubigeo_origen,
	ubigeo_destino,
	idoperador,
	descripcion,
	idproducto,
	idvehiculo,
	oferta_inicial,
	urgente
);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_solicitud( idsolicitud bigint(20),fecha_ini datetime,fecha_fin datetime,peso decimal(6,2),volumen decimal(6,2),direccion_origen varchar(200),ref_dirorigen varchar(200),direccion_destino varchar(200),ref_dirdestino varchar(200),puntuacion decimal(4,2),importe decimal(12,2),comision decimal(12,2),estado varchar(4),fechareg datetime,idusuario bigint(20),tipopago char(4),tipotiempo char(3),cantiempo int(11),ubigeo_origen varchar(6),ubigeo_destino varchar(6),idoperador bigint(20),descripcion text,idproducto int(11),idvehiculo bigint(20),oferta_inicial decimal(12,2),urgente char(1) ) 
BEGIN
UPDATE solicitud SET
	solicitud.idsolicitud = idsolicitud,
	solicitud.fecha_ini = fecha_ini,
	solicitud.fecha_fin = fecha_fin,
	solicitud.peso = peso,
	solicitud.volumen = volumen,
	solicitud.direccion_origen = direccion_origen,
	solicitud.ref_dirorigen = ref_dirorigen,
	solicitud.direccion_destino = direccion_destino,
	solicitud.ref_dirdestino = ref_dirdestino,
	solicitud.puntuacion = puntuacion,
	solicitud.importe = importe,
	solicitud.comision = comision,
	solicitud.estado = estado,
	solicitud.fechareg = fechareg,
	solicitud.idusuario = idusuario,
	solicitud.tipopago = tipopago,
	solicitud.tipotiempo = tipotiempo,
	solicitud.cantiempo = cantiempo,
	solicitud.ubigeo_origen = ubigeo_origen,
	solicitud.ubigeo_destino = ubigeo_destino,
	solicitud.idoperador = idoperador,
	solicitud.descripcion = descripcion,
	solicitud.idproducto = idproducto,
	solicitud.idvehiculo = idvehiculo,
	solicitud.oferta_inicial = oferta_inicial,
	solicitud.urgente = urgente
WHERE solicitud.idsolicitud = idsolicitud;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_solicitud_by_idsolicitud(idsolicitud bigint(20)) 
BEGIN
SELECT 
	solicitud.idsolicitud,
	solicitud.fecha_ini,
	solicitud.fecha_fin,
	solicitud.peso,
	solicitud.volumen,
	solicitud.direccion_origen,
	solicitud.ref_dirorigen,
	solicitud.direccion_destino,
	solicitud.ref_dirdestino,
	solicitud.puntuacion,
	solicitud.importe,
	solicitud.comision,
	solicitud.estado,
	solicitud.fechareg,
	solicitud.idusuario,
	solicitud.tipopago,
	solicitud.tipotiempo,
	solicitud.cantiempo,
	solicitud.ubigeo_origen,
	solicitud.ubigeo_destino,
	solicitud.idoperador,
	solicitud.descripcion,
	solicitud.idproducto,
	solicitud.idvehiculo,
	solicitud.oferta_inicial,
	solicitud.urgente
FROM solicitud
WHERE  solicitud.idsolicitud = idsolicitud;
END;;
DELIMITER ;;

