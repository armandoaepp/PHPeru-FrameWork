/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_categoria( idcategoria int(11),nombre varchar(150),descripcion varchar(200),visible char(1),fechareg timestamp,url varchar(255),imagen varchar(255),publicar char(1),estado smallint(6),created_up timestamp ) 
BEGIN
	INSERT INTO  categoria(
		categoria.idcategoria,
		categoria.nombre,
		categoria.descripcion,
		categoria.visible,
		categoria.fechareg,
		categoria.url,
		categoria.imagen,
		categoria.publicar,
		categoria.estado,
		categoria.created_up
	)
	VALUES(
		idcategoria,
		nombre,
		descripcion,
		visible,
		fechareg,
		url,
		imagen,
		publicar,
		estado,
		created_up
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_categoria( idcategoria int(11),nombre varchar(150),descripcion varchar(200),visible char(1),fechareg timestamp,url varchar(255),imagen varchar(255),publicar char(1),estado smallint(6),created_up timestamp ) 
BEGIN
	UPDATE categoria SET
		categoria.idcategoria = idcategoria,
		categoria.nombre = nombre,
		categoria.descripcion = descripcion,
		categoria.visible = visible,
		categoria.fechareg = fechareg,
		categoria.url = url,
		categoria.imagen = imagen,
		categoria.publicar = publicar,
		categoria.estado = estado,
		categoria.created_up = created_up
	WHERE categoria.idcategoria = idcategoria;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_categoria_estado(idcategoria int(11),created_up timestamp) 
BEGIN
	UPDATE categoria SET
		categoria.created_up = created_up
	WHERE categoria.idcategoria = idcategoria;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_categoria_by_idcategoria(idcategoria int(11)) 
BEGIN
	SELECT 
		categoria.idcategoria,
		categoria.nombre,
		categoria.descripcion,
		categoria.visible,
		categoria.fechareg,
		categoria.url,
		categoria.imagen,
		categoria.publicar,
		categoria.estado,
		categoria.created_up
	FROM categoria
	WHERE  categoria.idcategoria = idcategoria;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_categoria() 
BEGIN
	SELECT 
		categoria.idcategoria,
		categoria.nombre,
		categoria.descripcion,
		categoria.visible,
		categoria.fechareg,
		categoria.url,
		categoria.imagen,
		categoria.publicar,
		categoria.estado,
		categoria.created_up
	FROM categoria;
END;;
DELIMITER ;;

