<?php
/*PDO(php data object): una extension de php para acceder a la base de datos
crea una abstraccion de una correcion a un BD -(Msql, SqlServer, Sqlite, Postgres...)
PDOStatement que nos sirve para manejar sentencias sql y devuelve los resultados
PODExeceptions utilizado para el manejo de Errores*/
/*$dsn = Data source name*/
try {
    $dsn = new PDO("mysql:host=localhost;dbname=ventas", "root", "");
} catch (PDOException $e) {
    exit("Error: ".$e->getMessage());
}

$resultado = $dsn->query("SELECT * FROM productos");
while ($valores = $resultado->fetch()) {
    echo $valores[0]." ".$valores[1]." ".$valores[2]." ".$valores[1].'<br>';
}
/*id_productos, nombre_productos, precio_productos, caracteristicas_producto*/
$ingreso_registros = $dsn->exec("INSERT INTO productos values(4040,'lapicero',1.20,'lapicero de color rojo')");
if ($ingreso_registros) {
    echo "se han insertado los datos correctamente";
}
?>