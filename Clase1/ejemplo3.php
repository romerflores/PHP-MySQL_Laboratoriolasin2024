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
    <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
        </tr>
        <tr>
            <td><?php echo $nombre1;?></td>
            <td><?php echo $apellido1;?></td>
        </tr>
        <tr>
            <td><?php echo $nombre2;?></td>
            <td><?php echo $apellido2;?></td>
        </tr>
    </table>
<!--

-->
</body>
</html>


