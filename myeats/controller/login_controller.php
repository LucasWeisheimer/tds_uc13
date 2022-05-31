<?php
    //controller controla o fluxo de tela

    require_once "../model/login_model.php";

    if(isset($_POST['email_login']) && isset($_POST['password_login'])){ //se estiver valor o campo, então...
        $email = $_POST['email_login'];
        $password = $_POST['password_login'];
    } else { //se não...
        $email = NULL;
        $password = NULL;
    }

    $loginModel = new LoginModel();
    $cripto_password = sha1($password);
    $resultado = $loginModel -> login($email, $cripto_password);

    if($resultado == true){
        session_start();
        $_SESSION['logado'] = true;
        header("Location: ../view/home_view.php");
    } else {
        echo "usuario/senha inválido";
    }

    


?>