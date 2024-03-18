<?php
    echo "INICIANDO EJECUCION:"."<br>";

    include ("include.php");
    include ("include.php");
    include ("include.php");

    //el include del archivo include1.php no existe
//  y cuando se lo invoca ocasiona un error el cual no afecta a las demas acciones
//  asi sigue
    include ("include1.php");



    echo "Ejecucion finalizada!!";
