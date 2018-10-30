/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_diplomado( id int(11),titulo varchar(75),descripcion text,slide varchar(75),imagen varchar(75),certificacion text,titulos text,inversion text,titulacion text,detalleduracion text,detalledia text,detallehorario text,detallelugar text,detalleprecio text,detalleequipos text,detalleconsultas text,detalledirigido text,aquien text,temas text,nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  diplomado(
		diplomado.id,
		diplomado.titulo,
		diplomado.descripcion,
		diplomado.slide,
		diplomado.imagen,
		diplomado.certificacion,
		diplomado.titulos,
		diplomado.inversion,
		diplomado.titulacion,
		diplomado.detalleduracion,
		diplomado.detalledia,
		diplomado.detallehorario,
		diplomado.detallelugar,
		diplomado.detalleprecio,
		diplomado.detalleequipos,
		diplomado.detalleconsultas,
		diplomado.detalledirigido,
		diplomado.aquien,
		diplomado.temas,
		diplomado.nombreseo,
		diplomado.orden,
		diplomado.estado,
		diplomado.fecha
	)
	VALUES(
		id,
		titulo,
		descripcion,
		slide,
		imagen,
		certificacion,
		titulos,
		inversion,
		titulacion,
		detalleduracion,
		detalledia,
		detallehorario,
		detallelugar,
		detalleprecio,
		detalleequipos,
		detalleconsultas,
		detalledirigido,
		aquien,
		temas,
		nombreseo,
		orden,
		estado,
		fecha
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_diplomado( id int(11),titulo varchar(75),descripcion text,slide varchar(75),imagen varchar(75),certificacion text,titulos text,inversion text,titulacion text,detalleduracion text,detalledia text,detallehorario text,detallelugar text,detalleprecio text,detalleequipos text,detalleconsultas text,detalledirigido text,aquien text,temas text,nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE diplomado SET
		diplomado.id = id,
		diplomado.titulo = titulo,
		diplomado.descripcion = descripcion,
		diplomado.slide = slide,
		diplomado.imagen = imagen,
		diplomado.certificacion = certificacion,
		diplomado.titulos = titulos,
		diplomado.inversion = inversion,
		diplomado.titulacion = titulacion,
		diplomado.detalleduracion = detalleduracion,
		diplomado.detalledia = detalledia,
		diplomado.detallehorario = detallehorario,
		diplomado.detallelugar = detallelugar,
		diplomado.detalleprecio = detalleprecio,
		diplomado.detalleequipos = detalleequipos,
		diplomado.detalleconsultas = detalleconsultas,
		diplomado.detalledirigido = detalledirigido,
		diplomado.aquien = aquien,
		diplomado.temas = temas,
		diplomado.nombreseo = nombreseo,
		diplomado.orden = orden,
		diplomado.estado = estado,
		diplomado.fecha = fecha
	WHERE diplomado.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_diplomado_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE diplomado SET
		diplomado.fecha = fecha
	WHERE diplomado.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_diplomado_by_id(id int(11)) 
BEGIN
	SELECT 
		diplomado.id,
		diplomado.titulo,
		diplomado.descripcion,
		diplomado.slide,
		diplomado.imagen,
		diplomado.certificacion,
		diplomado.titulos,
		diplomado.inversion,
		diplomado.titulacion,
		diplomado.detalleduracion,
		diplomado.detalledia,
		diplomado.detallehorario,
		diplomado.detallelugar,
		diplomado.detalleprecio,
		diplomado.detalleequipos,
		diplomado.detalleconsultas,
		diplomado.detalledirigido,
		diplomado.aquien,
		diplomado.temas,
		diplomado.nombreseo,
		diplomado.orden,
		diplomado.estado,
		diplomado.fecha
	FROM diplomado
	WHERE  diplomado.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_diplomado() 
BEGIN
	SELECT 
		diplomado.id,
		diplomado.titulo,
		diplomado.descripcion,
		diplomado.slide,
		diplomado.imagen,
		diplomado.certificacion,
		diplomado.titulos,
		diplomado.inversion,
		diplomado.titulacion,
		diplomado.detalleduracion,
		diplomado.detalledia,
		diplomado.detallehorario,
		diplomado.detallelugar,
		diplomado.detalleprecio,
		diplomado.detalleequipos,
		diplomado.detalleconsultas,
		diplomado.detalledirigido,
		diplomado.aquien,
		diplomado.temas,
		diplomado.nombreseo,
		diplomado.orden,
		diplomado.estado,
		diplomado.fecha
	FROM diplomado;
END;;
DELIMITER ;;

