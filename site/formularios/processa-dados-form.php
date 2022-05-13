<?php
    //Utilizado para debugar o codigo
    /*echo "<pre>";
    print_r($_GET);
    echo "</pre>";*/

    //_GET = não se usa para cadastro, apenas para consulta
    //_POST = forma correta para cadastro

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $interesses = $_POST["int"];
    $foto = $_POST["foto"];



    echo "Seu nome é: ".$nome . "<br>";
    echo "Sua idade é: ".$idade . "<br>";
    echo "Seu telefone é: ".$telefone . "<br>";
    echo "Seu sexo é: ".$sexo . "<br>";
    echo "Seus interesses é: ".$interesses . "<br>";
    echo "A foto é: ".$foto . "<br>";

    
?>

