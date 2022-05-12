<?php
    $dados[] = array("nome" => "Maria", "data_nasc" => "10/10/1985", "salario" => 2500, "cod_cargo" => 3);
    $dados[] = array("nome" => "João", "data_nasc" => "01/01/1983", "salario" => 1500, "cod_cargo" => 1);
    $dados[] = array("nome" => "Pedro", "data_nasc" => "15/11/1984", "salario" => 4500, "cod_cargo" => 4);
    $dados[] = array("nome" => "Carla", "data_nasc" => "25/03/1994", "salario" => 1500, "cod_cargo" => 1);

    /*echo "<pre>";
    print_r($dados);
    echo "</pre>";*/    
    

    for($i=0; $i < count($dados); $i++){
        echo "----------------------------------------------------------";
        echo "<br>";
        echo "nome: " . $dados[$i]["nome"];
        echo "<br>";
        echo "Data Nascimento: " . $dados[$i]["data_nasc"];
        echo "<br>";
        echo "Salario: " . $dados[$i]["salario"];
        echo "<br>";
        echo "Código do Cargo: " . $dados[$i]["cod_cargo"];
        echo "<br>";
    }


    //exercicio para aumentar 10% o salario de quem tem o codigo = 1;
    for($i=0; $i < count($dados); $i++){
        if($dados[$i]["cod_cargo"] == 1){
            $salario = $dados[$i]["salario"]*0.10;
            $dados[$i]["salario"] = $salario + $dados[$i]["salario"];
        }
    }

    for($i=0; $i < count($dados); $i++){
        echo "-------------------REAJUSTE-------------------------";
        echo "<br>";
        echo "nome: " . $dados[$i]["nome"];
        echo "<br>";
        echo "Data Nascimento: " . $dados[$i]["data_nasc"];
        echo "<br>";
        echo "Salario: " . $dados[$i]["salario"];
        echo "<br>";
        echo "Código do Cargo: " . $dados[$i]["cod_cargo"];
        echo "<br>";
    }
?>