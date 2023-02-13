<?php
/*es un fragmento de informacion que un navegador web almacena localmente(hardisk)
la informacion se almacena a peticion del servidor web es necesario porque el
protocolo HTTP no es capaz de mantener informacion persistente entre diferentes peticiones.*/


/*setcookie("persona", "juan", time() + 86400); //almacena la cookie por un dia
setcookie("productos[0]", "jabon", time() + 86400); //almacena la cookie por un dia*/

//lamando a la cookie

//$persona = $_COOKIE["persona"]; //cadena de texto
//echo "el valor de la cookie persona es: ".$persona;
/*******utilidad*****/
/*contar el numero de visitas que realiza un usuario al visitar una pagina web*/
$_SESSION = array();
if(isset($_COOKIE["contador"])){
//configuracion del tiempo de vigilancia : 1 año
if($_COOKIE["contador"] == 20){
    setcookie("contador", '', time() - 3600);
    unset($_SESSION["contador"]);
    $mensaje = "se reinicia el numero de visitas de nuestra pagina web";
}
else {
    setcookie("contador", $_COOKIE["contador"] + 1, time() + 365*24*60*60);
$mensaje = "numero de visitas: "  .$_COOKIE["contador"];
}

}
else{  
    /*creacion de la cookie a contar*/
    setcookie("contador", 1, time() +365*24*60*60);
    $mensaje = "bienvenido a nuestra pagina web";
}

?>
<html>
<head>
    <title>cookies</title>
</head>
<body>
<?php
echo "codigo php incrustado en el doc HTML";
echo '<br>';
echo $mensaje;
?>
</body>
</html>