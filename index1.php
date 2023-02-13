<?php
session_start();
$_SESSION["nombre_1"] = "jaimito";
$_SESSION["nombre_2"] = "pedrito";
$_SESSION["session_id"] = session_id();
?>
<a href="sesiones.php">envio de variable de sesion</a>

