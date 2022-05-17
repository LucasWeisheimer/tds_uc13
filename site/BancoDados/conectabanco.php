<?php

    $con = new PDO("mysql:host=localhost;dbname=ponto_eletronico", "root", "");

    $sql = "SELECT id, no_matricula, nome, sobrenome FROM empregado";
    $rs = $con -> query($sql);

    $rs -> execute();
    echo "<pre>";
    print_r($rs -> fetchAll()); 
    echo "</pre>";
    

    $con = null; //fecha conexao
?>