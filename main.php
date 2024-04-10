<?php

//establecer la conexion con php (No logre establecer una conexion local con xamp debido a un error al parecer de puertos ocupados )
$db_host="localhost";
$db_user="root";
$db_password="123";
$db_name=" ";
$db_table_name=" ";
// conecta con el servidor, el usuario y contraseña 
   $db_connection = mysql_connect($db_host, $db_user, $db_password);
//verifica conexion 
if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}

//consulta para crear la tabla documentos, donde establecemos el nombre, tipo de caracter, longitud  
$queries = array (
$sql = CREATE TABLE Documentos (
ID_DOCUMENTO INT  (32) auto_increment primary key,
TIPO_DOCUMENTO INT  (16)  NOT NULL,
FECHA_ELABORACION DATE (8)  NOT NULL,
ID_PROVEEDOR INT (16)  auto_increment NOT NULL,
PARTIDA INT () NOT NULL, 
)

$sql = CREATE TABLE Movimientos 
ID_DOCUMENTO INT (16)  primary key,
TIPO_DOCUMENTO INT (16) NOT NULL ,
ID_PRODUCTO VAR (13) NOT NULL ,
ENTREGADO INT 
$sql = CREATE TABLE Proveedores
ID_PROVEEDOR INT () auto_increment, 
PROVEEDOR VAR (77) NOT NULL,

$sql =CREATE TABLE Productos 
//IDPROD
ID_PRODUCTO VAR (13) NOT NULL ,
DESCRIPCION VAR (150) NOT NULL, 
PRESENTACION VAR (75) NOT NULL, 
EXISTENCIA INT () NOT NULL,

$sql = CREATE TABLE PARTIDAS 
PARTIDA INT () NOT NULL,
DESCRIPCION VAR (60) NOT NULL,

)

		
?> 


