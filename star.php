<?php
//iniciar sesion
session_start();
//almacenar informacion de sesion
$_SESSION["apellido"] = "juancito";
$numero_entero = 5;
//acceder a la variable sesion nombre
/*$nombre = $_SESSION["nombre"];
//para destruir una sesion
session_destroy()
//para borrar una variable de sesion
unset(var);*/
/*supongamos que un usuario esta registrado en nuestra pag web*/

if (isset($_SESSION["nombre"])) {
    echo "Hola ".$_SESSION["nombre"]; 
}
else {
    //redirigirmos el usuario a otra direccion web
    header("location: https://www.metro.pe");
    die();
}
?>