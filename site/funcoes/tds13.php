<?php

    function minha_funcao1(){
        return "EU SOU A PRIMEIRA FUNCAO";
    }

    function minha_funcao2($param, $param2 = 0){
        return "EU SOU A PRIMEIRA FUNCAO COM PARAMETRO. " . $param . " " . $param2;
    }

    $texto1 = minha_funcao1();
    echo $texto1;
    echo "<br>";

    $texto2 = minha_funcao2("SENAC");
    echo $texto2;
    echo "<br>";

    $texto3 = minha_funcao2("SENAC", 500);
    echo $texto3;
    echo "<br>";





?>