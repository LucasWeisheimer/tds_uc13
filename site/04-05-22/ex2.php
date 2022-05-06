<?php
    $n1 = 10;
    $n2 = 10;
    $soma = $n1 + $n2;

    if($soma > 20){
        $result = $soma + 8;
    } else {
        $result = $soma - 5;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_2 - PHP</title>
</head>
<body>
    <h1><?php echo $result; ?></h1>
    
</body>
</html>