<?php
function hacer_encabezado($parametro){
    $head = "<head><title>$parametro</title></head>";
    echo $head;
}
function igv($valor, $porcentaje=18){
    return $valor * $porcentaje /100;
}
function saludar_ahora(): string
{
    return "hola, soy una funcion";
}
function poema(string $texto): string
{
    return substr($texto, 0, 10). "...";
}   

?>