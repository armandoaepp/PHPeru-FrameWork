/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_traslados( id int(11),titulo text,imagen varchar(200),presentacion text,item1 varchar(75),item2 varchar(75),item3 varchar(75),item4 varchar(75),descitem1 text,descitem2 text,descitem3 text,descitem4 text,promocion varchar(75) ) 
BEGIN
	INSERT INTO  traslados(
		traslados.id,
		traslados.titulo,
		traslados.imagen,
		traslados.presentacion,
		traslados.item1,
		traslados.item2,
		traslados.item3,
		traslados.item4,
		traslados.descitem1,
		traslados.descitem2,
		traslados.descitem3,
		traslados.descitem4,
		traslados.promocion
	)
	VALUES(
		id,
		titulo,
		imagen,
		presentacion,
		item1,
		item2,
		item3,
		item4,
		descitem1,
		descitem2,
		descitem3,
		descitem4,
		promocion
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_traslados( id int(11),titulo text,imagen varchar(200),presentacion text,item1 varchar(75),item2 varchar(75),item3 varchar(75),item4 varchar(75),descitem1 text,descitem2 text,descitem3 text,descitem4 text,promocion varchar(75) ) 
BEGIN
	UPDATE traslados SET
		traslados.id = id,
		traslados.titulo = titulo,
		traslados.imagen = imagen,
		traslados.presentacion = presentacion,
		traslados.item1 = item1,
		traslados.item2 = item2,
		traslados.item3 = item3,
		traslados.item4 = item4,
		traslados.descitem1 = descitem1,
		traslados.descitem2 = descitem2,
		traslados.descitem3 = descitem3,
		traslados.descitem4 = descitem4,
		traslados.promocion = promocion
	WHERE traslados.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_traslados_estado(id int(11),promocion varchar(75)) 
BEGIN
	UPDATE traslados SET
		traslados.promocion = promocion
	WHERE traslados.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_traslados_by_id(id int(11)) 
BEGIN
	SELECT 
		traslados.id,
		traslados.titulo,
		traslados.imagen,
		traslados.presentacion,
		traslados.item1,
		traslados.item2,
		traslados.item3,
		traslados.item4,
		traslados.descitem1,
		traslados.descitem2,
		traslados.descitem3,
		traslados.descitem4,
		traslados.promocion
	FROM traslados
	WHERE  traslados.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_traslados() 
BEGIN
	SELECT 
		traslados.id,
		traslados.titulo,
		traslados.imagen,
		traslados.presentacion,
		traslados.item1,
		traslados.item2,
		traslados.item3,
		traslados.item4,
		traslados.descitem1,
		traslados.descitem2,
		traslados.descitem3,
		traslados.descitem4,
		traslados.promocion
	FROM traslados;
END;;
DELIMITER ;;

