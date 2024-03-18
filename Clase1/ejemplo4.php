<?php
$nombre1="Juan";
$apellido1="Flores";
$nombre2="Oscar";
$apellido2="Zabala";

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Personales</title>
</head>
<body>
    <?php
        echo "<table border='1'>";
        echo "<tr><th>NOMBRES</th><th>APELLIDOS</th></tr><th><th>$nombre1</th><th>$apellido1<th></tr><tr><th>$nombre2</th><th>$apellido2<th></tr>";
        echo "</table>"
    ?>
</body>
</html>


