<?php
echo "continuamos...";
echo "<br>";
function fecha_hoy(){
    echo date('l jS \of F Y h:i:s A');
    echo '<br>';
    echo date('d/m/y');
}
fecha_hoy();
//los parametros se pasan por valor

function porValor($parametro){
    $parametro = "Hola mundo";
    echo "<br>".$parametro;
    
}
$miVariable = "String que no cambia de valor";
porValor($miVariable);
echo "<br>".$miVariable;
echo '<br>';
// paso de parametros por referencia
function porReferencia(&$parametro){
    $parametro = "Nueva cadena¡";
    echo '<br>'.$parametro;
}  
porReferencia($miVariable);
echo '<br>';
echo $miVariable;
echo '<br>';
function calcular_Area_Cuadrado($valor){
    $resultado = $valor * $valor;
    return $resultado;
} 
$area_cuadrado = calcular_Area_Cuadrado(10);
echo "el area del cuadrado es: $area_cuadrado";
echo '<br>';
//mostrar los elementos del array utilisando una funcion y el iterador foreach
$animales = ['leon', 'cebra', 'elefante', 'cocodrilo', 'camello'];
function misAnimales($parametro){
    foreach ($parametro as $valor) {
        # code...
        echo $valor. '<br>';
    }
}  
misAnimales($animales);
//////////////////////////////////////////
function misAnimalitos(&$parametro){
    $parametro = ['caballo', 'mono'];
}
misAnimalitos($animales);
foreach ($animales as $valor) {
    echo $valor. "<br>";
}
//////////////////////////////////////////
include("encabezado.php");
$titulo="mi pagina web";
hacer_encabezado($titulo);
/////////////////////////////////////////
echo '<br>';
echo igv(500). "<br>";
echo igv(25). "<br>";
echo igv(1000). "<br>";
/////////////////////////////////////////
echo saludar_ahora();
////////////////////////////////////////
echo '<br>';
echo poema("la luna es hermoza");
echo '<br>';
echo poema("mañana miercoles no tenemos clases");
?>