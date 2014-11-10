/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_get_tipomensaje() 
BEGIN
SELECT 
	tipomensaje.idtipomensaje,
	tipomensaje.tipomensaje,
	tipomensaje.estado
FROM tipomensaje;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_set_tipomensaje( idtipomensaje int(10) unsigned,tipomensaje varchar(250),estado int(11) ) 
BEGIN
INSERT INTO  tipomensaje(
	tipomensaje.idtipomensaje,
	tipomensaje.tipomensaje,
	tipomensaje.estado
)
VALUES(
	idtipomensaje,
	tipomensaje,
	estado
);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_tipomensaje( idtipomensaje int(10) unsigned,tipomensaje varchar(250),estado int(11) ) 
BEGIN
UPDATE tipomensaje SET
	tipomensaje.idtipomensaje = idtipomensaje,
	tipomensaje.tipomensaje = tipomensaje,
	tipomensaje.estado = estado
WHERE tipomensaje.idtipomensaje = idtipomensaje;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_tipomensaje_by_idtipomensaje(idtipomensaje int(10) unsigned) 
BEGIN
SELECT 
	tipomensaje.idtipomensaje,
	tipomensaje.tipomensaje,
	tipomensaje.estado
FROM tipomensaje
WHERE  tipomensaje.idtipomensaje = idtipomensaje;
END;;
DELIMITER ;;

