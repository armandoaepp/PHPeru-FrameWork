/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_amigos( id int(11),titulo text,imagen varchar(75),imagen_2 varchar(75),email text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  amigos(
		amigos.id,
		amigos.titulo,
		amigos.imagen,
		amigos.imagen_2,
		amigos.email,
		amigos.orden,
		amigos.estado,
		amigos.fecha
	)
	VALUES(
		id,
		titulo,
		imagen,
		imagen_2,
		email,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_amigos( id int(11),titulo text,imagen varchar(75),imagen_2 varchar(75),email text,orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE amigos SET
		amigos.id = id,
		amigos.titulo = titulo,
		amigos.imagen = imagen,
		amigos.imagen_2 = imagen_2,
		amigos.email = email,
		amigos.orden = orden,
		amigos.estado = estado,
		amigos.fecha = fecha
	WHERE amigos.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_amigos_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE amigos SET
		amigos.fecha = fecha
	WHERE amigos.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_amigos_by_id(id int(11)) 
BEGIN
	SELECT 
		amigos.id,
		amigos.titulo,
		amigos.imagen,
		amigos.imagen_2,
		amigos.email,
		amigos.orden,
		amigos.estado,
		amigos.fecha
	FROM amigos
	WHERE  amigos.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_amigos() 
BEGIN
	SELECT 
		amigos.id,
		amigos.titulo,
		amigos.imagen,
		amigos.imagen_2,
		amigos.email,
		amigos.orden,
		amigos.estado,
		amigos.fecha
	FROM amigos;
END;;
DELIMITER ;;

