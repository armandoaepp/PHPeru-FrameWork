/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_carrera( id int(11),titulo varchar(75),descripcion text,slide varchar(75),imagen varchar(75),presentacion text,porque text,donde text,certificacion text,titulos text,inversion text,titulacion text,detalleduracion text,detalledia text,detallehorario text,detallelugar text,detalleprecio text,detalleequipos text,detalleconsultas text,detalledirigido text,aquien text,temas text,nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	INSERT INTO  carrera(
		carrera.id,
		carrera.titulo,
		carrera.descripcion,
		carrera.slide,
		carrera.imagen,
		carrera.presentacion,
		carrera.porque,
		carrera.donde,
		carrera.certificacion,
		carrera.titulos,
		carrera.inversion,
		carrera.titulacion,
		carrera.detalleduracion,
		carrera.detalledia,
		carrera.detallehorario,
		carrera.detallelugar,
		carrera.detalleprecio,
		carrera.detalleequipos,
		carrera.detalleconsultas,
		carrera.detalledirigido,
		carrera.aquien,
		carrera.temas,
		carrera.nombreseo,
		carrera.orden,
		carrera.estado,
		carrera.fecha
	)
	VALUES(
		id,
		titulo,
		descripcion,
		slide,
		imagen,
		presentacion,
		porque,
		donde,
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
CREATE PROCEDURE usp_upd_carrera( id int(11),titulo varchar(75),descripcion text,slide varchar(75),imagen varchar(75),presentacion text,porque text,donde text,certificacion text,titulos text,inversion text,titulacion text,detalleduracion text,detalledia text,detallehorario text,detallelugar text,detalleprecio text,detalleequipos text,detalleconsultas text,detalledirigido text,aquien text,temas text,nombreseo varchar(200),orden int(11),estado int(1),fecha timestamp ) 
BEGIN
	UPDATE carrera SET
		carrera.id = id,
		carrera.titulo = titulo,
		carrera.descripcion = descripcion,
		carrera.slide = slide,
		carrera.imagen = imagen,
		carrera.presentacion = presentacion,
		carrera.porque = porque,
		carrera.donde = donde,
		carrera.certificacion = certificacion,
		carrera.titulos = titulos,
		carrera.inversion = inversion,
		carrera.titulacion = titulacion,
		carrera.detalleduracion = detalleduracion,
		carrera.detalledia = detalledia,
		carrera.detallehorario = detallehorario,
		carrera.detallelugar = detallelugar,
		carrera.detalleprecio = detalleprecio,
		carrera.detalleequipos = detalleequipos,
		carrera.detalleconsultas = detalleconsultas,
		carrera.detalledirigido = detalledirigido,
		carrera.aquien = aquien,
		carrera.temas = temas,
		carrera.nombreseo = nombreseo,
		carrera.orden = orden,
		carrera.estado = estado,
		carrera.fecha = fecha
	WHERE carrera.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_carrera_estado(id int(11),fecha timestamp) 
BEGIN
	UPDATE carrera SET
		carrera.fecha = fecha
	WHERE carrera.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_carrera_by_id(id int(11)) 
BEGIN
	SELECT 
		carrera.id,
		carrera.titulo,
		carrera.descripcion,
		carrera.slide,
		carrera.imagen,
		carrera.presentacion,
		carrera.porque,
		carrera.donde,
		carrera.certificacion,
		carrera.titulos,
		carrera.inversion,
		carrera.titulacion,
		carrera.detalleduracion,
		carrera.detalledia,
		carrera.detallehorario,
		carrera.detallelugar,
		carrera.detalleprecio,
		carrera.detalleequipos,
		carrera.detalleconsultas,
		carrera.detalledirigido,
		carrera.aquien,
		carrera.temas,
		carrera.nombreseo,
		carrera.orden,
		carrera.estado,
		carrera.fecha
	FROM carrera
	WHERE  carrera.id = id;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_carrera() 
BEGIN
	SELECT 
		carrera.id,
		carrera.titulo,
		carrera.descripcion,
		carrera.slide,
		carrera.imagen,
		carrera.presentacion,
		carrera.porque,
		carrera.donde,
		carrera.certificacion,
		carrera.titulos,
		carrera.inversion,
		carrera.titulacion,
		carrera.detalleduracion,
		carrera.detalledia,
		carrera.detallehorario,
		carrera.detallelugar,
		carrera.detalleprecio,
		carrera.detalleequipos,
		carrera.detalleconsultas,
		carrera.detalledirigido,
		carrera.aquien,
		carrera.temas,
		carrera.nombreseo,
		carrera.orden,
		carrera.estado,
		carrera.fecha
	FROM carrera;
END;;
DELIMITER ;;

