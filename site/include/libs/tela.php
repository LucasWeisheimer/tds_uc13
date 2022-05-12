<?php

    //inclui uma vez, sempre utilizar ele ao inves do "include"
    include_once "libs.php";
    include_once "libs.php"; //require_onde só irá incluir o arquivo se não houver uma chamada anterior do mesmo. OU SEJA, VAI PARAR O CODIGO CASO NAO ACHE O "LIBS.PHP";

    echo imprimeNome("Maria");
    echo "<br>";
    echo ajusta_salario(1500, 0.1);
    