<?php
    session_start();
    if($_SESSION['logado'] != true){
        header("location: login_view.php");
    } 






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem vindo a página principal!</h1>
</body>
</html>