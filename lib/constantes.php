<?php
   // @session_start(); // activa la sesion
// Rutas del sistema.
//definimos las rutas fisicas de las carpetas privadas como una constante
//RAIZ nos devolvería por ejemplo algo como ésto:/var/www/clients/client94/web80/web/dwes/tema4/blog2013/
define('RAIZ', dirname(__DIR__) . '/');
define('RUTA_INC', RAIZ . 'inc/');
define('RUTA_LIB', RAIZ . 'lib/');
define('RUTA_CONF', RAIZ . 'conf/');
define('RUTA_FOTOS', RAIZ . 'fotos/');

// Bases de datos.
define('BD_SERVIDOR', $_SERVER['HTTP_HOST']);
define('BD_NOMBRE', 'c93base1');
define('BD_USUARIO', 'c93dblaura');
define('BD_PASSWORD', 'abc123.');

// constantes para el servicio de correo
define('MAIL_SERVIDOR',$_SERVER['HTTP_HOST']);
echo $_SERVER['HTTP_HOST'];
define('MAIL_PUERTO',25); // PARA gMAIL ES EL 465 o 587
// define('MAIL_SSL','ssl'); // para Gmail
// ISPConfig 3.0.5.3
//https//www.laura.local:8080
//https//www.laura.local/webmail
//https://alumnosweb.sanclemente.local:8080/webmail/?_task=mail
define('MAIL_USUARIO','info@laura.local');
define('MAIL_PASSWORD','abc123.');
define('MAIL_DATOS_REMITENTE','laura');
/*
 * raveiga
define('BD_SERVIDOR', $_SERVER['HTTP_HOST']);
define('BD_NOMBRE', 'c2base2');
define('BD_USUARIO', 'c2mysql');
define('BD_PASSWORD', 'abc123.');*/

// Creamos la conexión de la base de datos.
$conexion=mysql_connect(BD_SERVIDOR,BD_USUARIO,BD_PASSWORD) or die(mysql_error());

// Seleccionamos la base de datos en la conexión anterior.
mysql_select_db(BD_NOMBRE,$conexion) or die(mysql_error());

// Para recibir correctamente los datos en UTF-8 en la conexión.
mysql_query("set names 'UTF8'",$conexion) or die(mysql_error());
?>