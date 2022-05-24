<?php

    require_once "../model/user_model.php";



    $name = $_POST['nome'];
    $address = $_POST['endereco'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $confirm_password = $_POST['senha'];



    $userModel = new UserModel(); //New é utilizado para instanciar objeto ;
    $userModel -> create($name, $address, $email, $password, $confirm_password); //Chama a funcao do UserModel com os parametros $name, $address, $email.....;

?>