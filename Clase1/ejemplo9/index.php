<?php
    function saludar()
    {
        echo "Buenas tardes como estan mis amigos :v".'<br>';

    }
    saludar();

    function saludar_nom($nombre)
    {
        echo "Hola mi estimado $nombre<br>";
    }
    saludar_nom("Romer");

    function mostrar()
    {
        echo "<h1>Full Name</h1>";

    }
    mostrar();


    sumar(1,3);

function sumar($x,$y)
{
    $res=$x.$y;
    echo $res."<br>";
}

echo "<h3>Variables estaticas</h3>";
//variables estaticas
function incrementaNum()
{
    static $numero=0;
    $numero++;
    echo $numero."<br>";
}
incrementaNum();
incrementaNum();
incrementaNum();
incrementaNum();



?>