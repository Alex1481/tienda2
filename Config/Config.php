<?php 
	//define("BASE_URL", "http://localhost/MEGA_BIT/");
	const BASE_URL = "http://localhost/tienda_virtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//DATOS DE CONEXIÓN A BASE DE DATOS
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correos
	const ENVIRONMENT = "0"; //Local: 0, Producción: 1;

	//Delimitadores decimal y millar Ej. 25,999.99
	const SPD = ".";
	const SPM = ",";

	//Símbolo de moneda
	const SMONEY = "Q";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "MEGA BIT";
	const EMAIL_REMITENTE = "infoaguacatan@gmail.com";
	const NOMBRE_EMPESA = "MEGA BIT";
	const WEB_EMPRESA = "https://www.facebook.com/MegabitAguacatan";
 ?>