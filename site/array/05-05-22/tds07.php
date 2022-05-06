
<?php

    // http://localhost:8080/site/05-05-22/tds07.php

    $array1 = array(100, 200, 300);
    $array2 = [10, 20, 33];

    echo $array1[0];
    echo "<br>";
    echo $array2[0];

    echo "<br>";

    var_dump($array1);
    echo "<br>";
    var_dump($array2);
    echo "<br>";
    //Sao ferramentas para desenvolvedor;
    //print_r = mostra os dados do array;
    //var_dump = mostra od dados com o tipo da variavel do array;

    $array1[3] = 500;
    var_dump($array1);
    echo "<br>";

    $array1[] = 900;
    var_dump($array1);  
    echo "<br>";

    $array1[0] = 800;
    var_dump($array1);
    echo "<br>";

    unset($array1[1]);
    var_dump($array1);
    $array1[] = 900;
    $array1[] = 1000;
    echo "<br>";

    //contar o tamanho do array
    echo "Tamanho: " .sizeof($array1);
    echo "<br>";
    echo "Tamanho: " .count($array1);
    echo "<br>";
    print_r($array1);

?>