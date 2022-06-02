<?php

    require_once "../model/user_model.php";

    if (isset($_POST['nome']) || !empty($_POST['nome'])){
        $name = $_POST['nome'];
    }else {
        echo "Campo 'nome' não preenchido";
    }

    if (isset($_POST['endereco']) || !empty($_POST['endereco'])){
        $address = $_POST['endereco'];
    }else {
        echo "Campo 'endereço' não preenchido";
    }

    if (isset($_POST['email']) || !empty($_POST['email'])){
        $email = $_POST['email'];
    }else {
        echo "Campo 'email' não preenchido";
    }

    if (isset($_POST['senha']) || !empty($_POST['senha'])){
        $password = $_POST['senha'];
    }else {
        echo "Campo 'senha' não preenchido";
    }

    if (isset($_POST['conf_senha']) == isset($_POST['senha'])){
        $confirm_password = $_POST['conf_senha'];
    }else {
        echo "Campo 'confirmar senha' não preenchido";
    }



    $userModel = new UserModel(); //New é utilizado para instanciar objeto ;
    $userModel -> create($name, $address, $email, $password, $confirm_password); //Chama a funcao do UserModel com os parametros $name, $address, $email.....;

?>