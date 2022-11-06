<?php
$correo = $_POST["correo"];

$contenido="
Correo: $correo
";

$archivo = fopen("info.txt", "a");
fwrite($archivo,$contenido);
fclose($archivo);
header("Location: cont.php")
?>