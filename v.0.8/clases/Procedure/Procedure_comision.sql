/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_comision( idcomision int(11),gc decimal(8,4),gc_urg decimal(8,4),tra decimal(8,4),igv float ) 
BEGIN
	INSERT INTO  comision(
		comision.idcomision,
		comision.gc,
		comision.gc_urg,
		comision.tra,
		comision.igv
	)
	VALUES(
		idcomision,
		gc,
		gc_urg,
		tra,
		igv
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_comision( idcomision int(11),gc decimal(8,4),gc_urg decimal(8,4),tra decimal(8,4),igv float ) 
BEGIN
	UPDATE comision SET
		comision.idcomision = idcomision,
		comision.gc = gc,
		comision.gc_urg = gc_urg,
		comision.tra = tra,
		comision.igv = igv
	WHERE comision.idcomision = idcomision;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_comision_estado(idcomision int(11),igv float) 
BEGIN
	UPDATE comision SET
		comision.igv = igv
	WHERE comision.idcomision = idcomision;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_comision_by_idcomision(idcomision int(11)) 
BEGIN
	SELECT 
		comision.idcomision,
		comision.gc,
		comision.gc_urg,
		comision.tra,
		comision.igv
	FROM comision
	WHERE  comision.idcomision = idcomision;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_comision() 
BEGIN
	SELECT 
		comision.idcomision,
		comision.gc,
		comision.gc_urg,
		comision.tra,
		comision.igv
	FROM comision;
END;;
DELIMITER ;;

