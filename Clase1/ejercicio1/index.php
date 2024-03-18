<?php
    include ("datos.php");
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOMINA</title>
</head>
<body>

<div style="width: 600px;background: dodgerblue; border:solid darkblue 5px">
    <table border="1" style="width: 100%;">
        <tr style="border: blue">
            <th>NOMINA DE INSCRITOS</th>
        </tr>
        <tr>
            <th>PHP 1 - LASIN</th>
        </tr>
    </table>

    <table border="1">
        <tr>
            <th>AP. PATERNO</th>
            <th>AP. MATERNO</th>
            <th>AP. NOMBRES</th>
            <th>CARNET ID.</th>
            <th>FECHA NACIMIENTO</th>
        </tr>
        <tr>
            <?php
            echo "<td>".$ap_pa1."</td>";
            echo "<td>".$ap_ma1."</td>";
            echo "<td>".$nombre1."</td>";
            echo "<td>".$ci1."</td>";
            echo "<td>".$fecha_na1."</td>";
            ?>
        </tr>
        <tr>
            <?php
            echo "<td>".$ap_pa2."</td>";
            echo "<td>".$ap_ma2."</td>";
            echo "<td>".$nombre2."</td>";
            echo "<td>".$ci2."</td>";
            echo "<td>".$fecha_na2."</td>";
            ?>
        </tr>
        <tr>
            <?php
            echo "<td>".$ap_pa3."</td>";
            echo "<td>".$ap_ma3."</td>";
            echo "<td>".$nombre3."</td>";
            echo "<td>".$ci3."</td>";
            echo "<td>".$fecha_na3."</td>";
            ?>
        </tr>

    </table>
</div>
</body>
</html>
