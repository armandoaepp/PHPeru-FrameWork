/* Procedures Generada desde Cix-PHP - by power @armandoaepp */

DELIMITER ;;
CREATE PROCEDURE usp_upd_perusuario_estado(idperusuario int(11) ,estado int(11))
BEGIN
	UPDATE perusuario SET
		perusuario.estado = estado
	WHERE perusuario.idperusuario = idperusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_perusuario_by_idperusuario(idperusuario int(11) )
BEGIN
	SELECT
		perusuario.idperusuario,
		perusuario.perapellidos,
		perusuario.pernombre,
		perusuario.perusuario,
		perusuario.perpassword,
		perusuario.fechareg,
		perusuario.estado
	FROM perusuario
	WHERE  perusuario.idperusuario = idperusuario;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_perusuario()
BEGIN
	SELECT
		perusuario.idperusuario,
		perusuario.perapellidos,
		perusuario.pernombre
	FROM perusuario
	WHERE perusuario.perusuario,
	AND	perusuario.perpassword,;
END;;
DELIMITER ;