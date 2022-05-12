<?php

    $array3 = array("nome" => "Maria", "idade" => "40");

    var_dump($array3);
    echo "<br>";

    echo $array3["nome"];
    echo "<br>";

    //Utilizando a sintaxe curta
    $array4 = [
        "nome" => "José",
        "idade" => "50",
    ];
    print_r($array4);
    echo "<br>";

    $a1[][] = array();//pode tirar pq nao muda nada no array, mas é melhor deixar p/ quando bater o olho saber que é um array;
    $a1 [0] [0] = "Pedro";
    $a1 [0] [1] = "Pedro@senac.com.br";
    $a1 [0] [2] = 21;
    $a1 [1] [0] = "Maria";
    $a1 [1] [1] = "Maria@senac.com.br";
    $a1 [1] [2] = 36;
    echo "<pre>"; //melhora a visualizaação do php!!!
    print_r($a1);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    $a2 [0]["Nome"] = "Maria";
    $a2 [0]["Sobrenome"] = "Silva";
    $a2 [0]["Email"] = "Maria@senac.com";
    $a2 [1]["Nome"] = "Pedro";
    $a2 [1]["Sobrenome"] = "Souza";
    $a2 [1]["Email"] = "Pedro@senac.com";
    $a2 [2]["Nome"] = "Carol";
    $a2 [2]["Sobrenome"] = "Silva";
    $a2 [2]["Email"] = "Carol@senac.com";

    for($i = 0; $i< count($a2); $i++){
        
        echo "Nome: ".$a2[$i]["Nome"] ." ".$a2[$i]["Sobrenome"] . " || Email: ". $a2[$i]["Email"];
        echo "<br>";
        
    }






?>