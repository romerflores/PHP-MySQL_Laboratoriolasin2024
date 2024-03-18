<?php
echo "INICIANDO EJECUCION:"."<br>";
require ("require.php");
require ("require.php");
require ("require.php");

/*
    con el error de require no continua con los demas procesos
    es decir que no seguira con el código que esta debajo posterior al error
*/
require ("require1.php");


echo "Finalizo todo"."<br>";