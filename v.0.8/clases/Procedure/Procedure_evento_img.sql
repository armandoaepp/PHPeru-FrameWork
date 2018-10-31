/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_evento_img( id int(11),imagen varchar(200),id_padre int(11),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  evento_img(
		evento_img.id,
		evento_img.imagen,
		evento_img.id_padre,
		evento_img.orden,
		evento_img.estado,
		evento_img.fecha
	)
	VALUES(
		id,
		imagen,
		id_padre,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_evento_img( id int(11),imagen varchar(200),id_padre int(11),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE evento_img SET
		evento_img.id = id,
		evento_img.imagen = imagen,
		evento_img.id_padre = id_padre,
		evento_img.orden = orden,
		evento_img.estado = estado,
		evento_img.fecha = fecha
	WHERE evento_img.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_evento_img_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE evento_img SET
		evento_img.fecha = fecha
	WHERE evento_img.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_evento_img_by_id(id int(11)) 
BEGIN
	SELECT 
		evento_img.id,
		evento_img.imagen,
		evento_img.id_padre,
		evento_img.orden,
		evento_img.estado,
		evento_img.fecha
	FROM evento_img
	WHERE  evento_img.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_evento_img() 
BEGIN
	SELECT 
		evento_img.id,
		evento_img.imagen,
		evento_img.id_padre,
		evento_img.orden,
		evento_img.estado,
		evento_img.fecha
	FROM evento_img;
END;;
DELIMITER ;;

