<?php
include 'conexion.php';
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$dni = $_POST['dni'];
$contrasena = $_POST['contrasena'];

//encriptamiento de constraseña
$contrasena = hash('sha512', $contrasena);
$query = "INSERT INTO usuarios(nombre_completo, correo, dni, contrasena) VALUES('$nombre_completo', '$correo', '$dni', '$contrasena')";
//varificar correo
$vereficar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
if (mysqli_num_rows($vereficar_correo) > 0) {
    echo '
    <script>
    alert("este correo ya esta registrado, intente con otro diferente");
    window.location = "index.php";
    </script>
    ';
    exit();
}

//varificar dni
$vereficar_dni = mysqli_query($conexion, "SELECT * FROM usuarios WHERE dni='$dni' ");
if (mysqli_num_rows($vereficar_dni) > 0) {
    echo '
    <script>
    alert("este DNI ya esta registrado, intente con otro diferente");
    window.location = "index.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
    alert("usuario almacenado exitosamente");
    window.location = "index.php";
    </script>
    ';
}else {
    echo '
    <script>
    alert("intentalo de nuevo, usuario no almacenado");
    window.location = "index.php";
    </script>
    ';
}
mysqli_close($conexion);
?>