/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_get_admin() 
BEGIN
SELECT 
	admin.idadmin,
	admin.usertrans,
	admin.clavetrans
FROM admin;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_set_admin( idadmin int(11),usertrans varchar(30),clavetrans varchar(41) ) 
BEGIN
INSERT INTO  admin(
	admin.idadmin,
	admin.usertrans,
	admin.clavetrans
)
VALUES(
	idadmin,
	usertrans,
	clavetrans
);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_admin( idadmin int(11),usertrans varchar(30),clavetrans varchar(41) ) 
BEGIN
UPDATE admin SET
	admin.idadmin = idadmin,
	admin.usertrans = usertrans,
	admin.clavetrans = clavetrans
WHERE admin.idadmin = idadmin;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_admin_by_idadmin(idadmin int(11)) 
BEGIN
SELECT 
	admin.idadmin,
	admin.usertrans,
	admin.clavetrans
FROM admin
WHERE  admin.idadmin = idadmin;
END;;
DELIMITER ;;

