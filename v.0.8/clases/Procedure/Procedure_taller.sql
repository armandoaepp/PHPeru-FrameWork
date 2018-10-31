/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_taller( id int(11),titulo varchar(75),descripcion text,slide varchar(75),imagen varchar(75),certificacion text,titulos text,inversion text,titulacion text,detalleduracion text,detalledia text,detallehorario text,detallelugar text,detalleprecio text,detalleequipos text,detalleconsultas text,detalledirigido text,aquien text,temas text,nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  taller(
		taller.id,
		taller.titulo,
		taller.descripcion,
		taller.slide,
		taller.imagen,
		taller.certificacion,
		taller.titulos,
		taller.inversion,
		taller.titulacion,
		taller.detalleduracion,
		taller.detalledia,
		taller.detallehorario,
		taller.detallelugar,
		taller.detalleprecio,
		taller.detalleequipos,
		taller.detalleconsultas,
		taller.detalledirigido,
		taller.aquien,
		taller.temas,
		taller.nombreseo,
		taller.orden,
		taller.estado,
		taller.fecha
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
CREATE PROCEDURE usp_upd_taller( id int(11),titulo varchar(75),descripcion text,slide varchar(75),imagen varchar(75),certificacion text,titulos text,inversion text,titulacion text,detalleduracion text,detalledia text,detallehorario text,detallelugar text,detalleprecio text,detalleequipos text,detalleconsultas text,detalledirigido text,aquien text,temas text,nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE taller SET
		taller.id = id,
		taller.titulo = titulo,
		taller.descripcion = descripcion,
		taller.slide = slide,
		taller.imagen = imagen,
		taller.certificacion = certificacion,
		taller.titulos = titulos,
		taller.inversion = inversion,
		taller.titulacion = titulacion,
		taller.detalleduracion = detalleduracion,
		taller.detalledia = detalledia,
		taller.detallehorario = detallehorario,
		taller.detallelugar = detallelugar,
		taller.detalleprecio = detalleprecio,
		taller.detalleequipos = detalleequipos,
		taller.detalleconsultas = detalleconsultas,
		taller.detalledirigido = detalledirigido,
		taller.aquien = aquien,
		taller.temas = temas,
		taller.nombreseo = nombreseo,
		taller.orden = orden,
		taller.estado = estado,
		taller.fecha = fecha
	WHERE taller.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_taller_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE taller SET
		taller.fecha = fecha
	WHERE taller.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_taller_by_id(id int(11)) 
BEGIN
	SELECT 
		taller.id,
		taller.titulo,
		taller.descripcion,
		taller.slide,
		taller.imagen,
		taller.certificacion,
		taller.titulos,
		taller.inversion,
		taller.titulacion,
		taller.detalleduracion,
		taller.detalledia,
		taller.detallehorario,
		taller.detallelugar,
		taller.detalleprecio,
		taller.detalleequipos,
		taller.detalleconsultas,
		taller.detalledirigido,
		taller.aquien,
		taller.temas,
		taller.nombreseo,
		taller.orden,
		taller.estado,
		taller.fecha
	FROM taller
	WHERE  taller.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_taller() 
BEGIN
	SELECT 
		taller.id,
		taller.titulo,
		taller.descripcion,
		taller.slide,
		taller.imagen,
		taller.certificacion,
		taller.titulos,
		taller.inversion,
		taller.titulacion,
		taller.detalleduracion,
		taller.detalledia,
		taller.detallehorario,
		taller.detallelugar,
		taller.detalleprecio,
		taller.detalleequipos,
		taller.detalleconsultas,
		taller.detalledirigido,
		taller.aquien,
		taller.temas,
		taller.nombreseo,
		taller.orden,
		taller.estado,
		taller.fecha
	FROM taller;
END;;
DELIMITER ;;

