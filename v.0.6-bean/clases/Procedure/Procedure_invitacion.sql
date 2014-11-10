/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_get_invitacion() 
BEGIN
SELECT 
	invitacion.idinvitacion,
	invitacion.idcliente,
	invitacion.tipocliente,
	invitacion.glosa,
	invitacion.estado
FROM invitacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_set_invitacion( idinvitacion bigint(20) unsigned,idcliente bigint(20) unsigned,tipocliente char(2),glosa varchar(500),estado int(11) unsigned ) 
BEGIN
INSERT INTO  invitacion(
	invitacion.idinvitacion,
	invitacion.idcliente,
	invitacion.tipocliente,
	invitacion.glosa,
	invitacion.estado
)
VALUES(
	idinvitacion,
	idcliente,
	tipocliente,
	glosa,
	estado
);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_invitacion( idinvitacion bigint(20) unsigned,idcliente bigint(20) unsigned,tipocliente char(2),glosa varchar(500),estado int(11) unsigned ) 
BEGIN
UPDATE invitacion SET
	invitacion.idinvitacion = idinvitacion,
	invitacion.idcliente = idcliente,
	invitacion.tipocliente = tipocliente,
	invitacion.glosa = glosa,
	invitacion.estado = estado
WHERE invitacion.idinvitacion = idinvitacion;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_invitacion_by_idinvitacion(idinvitacion bigint(20) unsigned) 
BEGIN
SELECT 
	invitacion.idinvitacion,
	invitacion.idcliente,
	invitacion.tipocliente,
	invitacion.glosa,
	invitacion.estado
FROM invitacion
WHERE  invitacion.idinvitacion = idinvitacion;
END;;
DELIMITER ;;

