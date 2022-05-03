<?php

    $c = "        ";
    

    if($c == ""){
        echo "C está vazio";
        echo "<br>";
    }
    if($c == NULL){
        echo "C é null";
        echo "<br>";
    }
    if(empty($c)){ //O correto a se fazer é utilizar o empty para saber se ta nulo ou vazio;
        echo "C está vazio";
        echo "<br>";
    }
    if(empty(trim($c))){ //Trim tira os espaços do inicio e do fim;
        echo "C esta vazio";
    }

?>