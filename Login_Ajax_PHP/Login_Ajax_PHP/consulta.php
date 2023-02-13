
<?php

include ("coneccion.php");

if ($_POST['nombre'] == "Juancito" && $_POST['password'] == "Lima12345" ){

    $resultado = $pdo->query('SELECT *FROM clientes');
     
     while( $consulta = $resultado->fetch()){
       
       echo $consulta[0].":".$consulta[1].":".$consulta[2].":".$consulta[3]."<br>";
     }




echo "Usuario correcto";
}
else {
	echo "Usuario invalido";
}