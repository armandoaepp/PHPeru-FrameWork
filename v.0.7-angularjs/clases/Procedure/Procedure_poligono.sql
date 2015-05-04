/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_poligono( idpoligono int(11) unsigned,idpersona int(11) unsigned,tipopoligono char(4),polix text,poliy text,geocerca varchar(200),fechareg date,referencia varchar(200),estado int(10) unsigned ) 
BEGIN
	INSERT INTO  poligono(
		poligono.idpoligono,
		poligono.idpersona,
		poligono.tipopoligono,
		poligono.polix,
		poligono.poliy,
		poligono.geocerca,
		poligono.fechareg,
		poligono.referencia,
		poligono.estado
	)
	VALUES(
		idpoligono,
		idpersona,
		tipopoligono,
		polix,
		poliy,
		geocerca,
		fechareg,
		referencia,
		estado
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_poligono( idpoligono int(11) unsigned,idpersona int(11) unsigned,tipopoligono char(4),polix text,poliy text,geocerca varchar(200),fechareg date,referencia varchar(200),estado int(10) unsigned ) 
BEGIN
	UPDATE poligono SET
		poligono.idpoligono = idpoligono,
		poligono.idpersona = idpersona,
		poligono.tipopoligono = tipopoligono,
		poligono.polix = polix,
		poligono.poliy = poliy,
		poligono.geocerca = geocerca,
		poligono.fechareg = fechareg,
		poligono.referencia = referencia,
		poligono.estado = estado
	WHERE poligono.idpoligono = idpoligono;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_poligono_estado(idpoligono int(11) unsigned,estado int(10) unsigned) 
BEGIN
	UPDATE poligono SET
		poligono.estado = estado
	WHERE poligono.idpoligono = idpoligono;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_poligono_by_idpoligono(idpoligono int(11) unsigned) 
BEGIN
	SELECT 
		poligono.idpoligono,
		poligono.idpersona,
		poligono.tipopoligono,
		poligono.polix,
		poligono.poliy,
		poligono.geocerca,
		poligono.fechareg,
		poligono.referencia,
		poligono.estado
	FROM poligono
	WHERE  poligono.idpoligono = idpoligono;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_poligono() 
BEGIN
	SELECT 
		poligono.idpoligono,
		poligono.idpersona,
		poligono.tipopoligono,
		poligono.polix,
		poligono.poliy,
		poligono.geocerca,
		poligono.fechareg,
		poligono.referencia,
		poligono.estado
	FROM poligono;
END;;
DELIMITER ;;

