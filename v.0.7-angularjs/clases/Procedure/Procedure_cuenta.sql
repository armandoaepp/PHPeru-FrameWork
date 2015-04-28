/* Procedures Generada desde Cix-PHP - by power @armandoaepp */
DELIMITER ;;
CREATE PROCEDURE usp_set_cuenta( idcuenta bigint(20),tipocli char(2),idcli bigint(20),saldo decimal(14,2) ) 
BEGIN
	INSERT INTO  cuenta(
		cuenta.idcuenta,
		cuenta.tipocli,
		cuenta.idcli,
		cuenta.saldo
	)
	VALUES(
		idcuenta,
		tipocli,
		idcli,
		saldo
	);
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_cuenta( idcuenta bigint(20),tipocli char(2),idcli bigint(20),saldo decimal(14,2) ) 
BEGIN
	UPDATE cuenta SET
		cuenta.idcuenta = idcuenta,
		cuenta.tipocli = tipocli,
		cuenta.idcli = idcli,
		cuenta.saldo = saldo
	WHERE cuenta.idcuenta = idcuenta;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_upd_cuenta_estado(idcuenta bigint(20),saldo decimal(14,2)) 
BEGIN
	UPDATE cuenta SET
		cuenta.saldo = saldo
	WHERE cuenta.idcuenta = idcuenta;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_cuenta_by_idcuenta(idcuenta bigint(20)) 
BEGIN
	SELECT 
		cuenta.idcuenta,
		cuenta.tipocli,
		cuenta.idcli,
		cuenta.saldo
	FROM cuenta
	WHERE  cuenta.idcuenta = idcuenta;
END;;
DELIMITER ;;

DELIMITER ;;
CREATE PROCEDURE usp_get_cuenta() 
BEGIN
	SELECT 
		cuenta.idcuenta,
		cuenta.tipocli,
		cuenta.idcli,
		cuenta.saldo
	FROM cuenta;
END;;
DELIMITER ;;

