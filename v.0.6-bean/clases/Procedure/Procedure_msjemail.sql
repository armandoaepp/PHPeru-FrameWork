/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_get_msjemail() 
BEGIN
SELECT 
	msjemail.idmsjemail,
	msjemail.idproceso,
	msjemail.idtipomensaje,
	msjemail.item,
	msjemail.email,
	msjemail.asunto,
	msjemail.mensaje,
	msjemail.cabecera,
	msjemail.fechareg,
	msjemail.estado
FROM msjemail;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_set_msjemail( idmsjemail bigint(20) unsigned,idproceso int(11) unsigned,idtipomensaje int(11) unsigned,item int(11) unsigned,email varchar(100),asunto varchar(250),mensaje blob,cabecera varchar(2550),fechareg datetime,estado int(11) ) 
BEGIN
INSERT INTO  msjemail(
	msjemail.idmsjemail,
	msjemail.idproceso,
	msjemail.idtipomensaje,
	msjemail.item,
	msjemail.email,
	msjemail.asunto,
	msjemail.mensaje,
	msjemail.cabecera,
	msjemail.fechareg,
	msjemail.estado
)
VALUES(
	idmsjemail,
	idproceso,
	idtipomensaje,
	item,
	email,
	asunto,
	mensaje,
	cabecera,
	fechareg,
	estado
);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_msjemail( idmsjemail bigint(20) unsigned,idproceso int(11) unsigned,idtipomensaje int(11) unsigned,item int(11) unsigned,email varchar(100),asunto varchar(250),mensaje blob,cabecera varchar(2550),fechareg datetime,estado int(11) ) 
BEGIN
UPDATE msjemail SET
	msjemail.idmsjemail = idmsjemail,
	msjemail.idproceso = idproceso,
	msjemail.idtipomensaje = idtipomensaje,
	msjemail.item = item,
	msjemail.email = email,
	msjemail.asunto = asunto,
	msjemail.mensaje = mensaje,
	msjemail.cabecera = cabecera,
	msjemail.fechareg = fechareg,
	msjemail.estado = estado
WHERE msjemail.idmsjemail = idmsjemail;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_msjemail_by_idmsjemail(idmsjemail bigint(20) unsigned) 
BEGIN
SELECT 
	msjemail.idmsjemail,
	msjemail.idproceso,
	msjemail.idtipomensaje,
	msjemail.item,
	msjemail.email,
	msjemail.asunto,
	msjemail.mensaje,
	msjemail.cabecera,
	msjemail.fechareg,
	msjemail.estado
FROM msjemail
WHERE  msjemail.idmsjemail = idmsjemail;
END;;
DELIMITER ;;

