<?php //echo 'Hello World';
$numero_int = 12;
$valor_booleano = TRUE;
$valor_string = "hola alumno";
if (is_int("$valor_booleano")) {
    $numero_init += 4;
}
echo "<br>";
if (is_string($valor_string)) {
    echo "$valor_string => Es un string!";
}
echo "<br>";
if ($valor_booleano == TRUE) {
    echo "$valor_booleano es TRUE";
}
echo "<br>";
echo "el resultado es: $numero_int";
echo "<br>";
$colores = array("rojo", "amarillo", 23);

for ($x=0; $x < 3; $x++) { 
    print "$colores[$x]</p>\n";
}
echo "<br>";
foreach ($colores as $valor) {
    echo $valor;
    echo "<br>";
}

echo "elemento 0 del array: $colores[0]";
echo "<br>";
echo "elemento 2 del array: $colores[2]";
$verduras = array("verdura1"=>"tomate", "verdura2"=>"zanahoria", "verdura3"=>"cebolla");
echo "<br>";

foreach ($verduras as $key => $value) {
    echo 'para el elemento' .$key. ', comeres ' .$value. '<br>';
}

echo "<br>";
echo "elemento 2 del array verduras: $verduras[verdura3]";
echo "<br>";
$array = array(
    "comida"=>"lomo saltado",
              100 => 100,
              TRUE => TRUE);
var_dump($array);
echo "<br>";
/*mostrar una lista de productos (codigo y descripcion) en una tabla dentro de un documento html*/
$productos = [
    ['codigo' => '001', 'descripcion' => 'lapicero'],
    ['codigo' => '002', 'descripcion' => 'borrador'],
    ['codigo' => '003', 'descripcion' => 'tajador'],
          ];
          //abrir la etiqueta de la tabla
          echo '<table>';
          //imprimir el encabezado
          echo '<thead>
                <tr><th>codigo</th><th>descripcion</th></tr>
                 </thead>';
          //imprimo las filas de la tabla con la informacion del array $productos:
    foreach ($productos as $prod) {
        echo '<tr>
              <td>'.$prod['codigo'].'</td>
              <td>'.$prod['descripcion'].'</td>
              </tr>';
    }
    echo '</table>';
    /*while*/
    $tamaño=1;
    while($tamaño <= 6){
        echo "<font size=$tamaño>Tamaño $tamaño </font><br>";
        $tamaño++;
    }
    echo '<br>';
    $saludo = "Hola alumnos de senati";
    $index = 0;
    //recorrer la cadena hasta encontrar una "t"
    //   (          F     &&      V      )
    while($saludo[$index] != "t" && $index < strlen($saludo)){
        $index++;
    } 
    /*
    v v = v
    v f = f
    f v = f
    f f = f
    */ 
    //continuamos el codigo aqui
    if($index == strlen($saludo))
    echo "no se encuentra la tecla t en la cadena saludo";
    else
    echo "la letra m se encuentra en la posicion: ". $index;
?>