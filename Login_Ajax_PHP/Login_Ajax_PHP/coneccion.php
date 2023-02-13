<?php
/* PDO ( PHP Data Object): Una extensión de PHP para acceder a bases de datos.
crea una abstracción de una conección a un BD - (MySql, SqlServer, SqLite, Potsgres,...
PDOStatement  que nos sirve para manejar sentencias SQL y devuelve los resultados
PDOExceptions utilizado para el manejo de errores */

/* $dsn =>Data source name */
/*Agregar manejo de exepciones*/
try{
       $pdo = new PDO('mysql:host=localhost;dbname=venta', 'root', '');
}
catch (PDOException $e){
	exit("Error: ".$e->getMessage());
}
