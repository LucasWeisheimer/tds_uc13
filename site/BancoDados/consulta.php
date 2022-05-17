<?php

    $con = new PDO("mysql:host=localhost;dbname=ponto_eletronico", "root", "");

    $sql = "SELECT id, no_matricula, nome, sobrenome FROM empregado";
    $rs = $con -> query($sql);
    $rs -> execute(); //executou no banco e deixou em cache no banco

    $dados = $rs -> fetchAll(); // Ação de pegar os dados;

    foreach($dados as $item){
        echo $item['id'].'<br>';
        echo $item['no_matricula'].'<br>';
        echo $item['nome'].'<br>';
        echo $item['sobrenome'].'<br>';
    }
    

    $con = null; //fecha conexao
?>