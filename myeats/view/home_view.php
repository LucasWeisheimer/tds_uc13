<?php //http://localhost:8080/myeats/view/

    // vai ser utilizado para proteger a página
    require_once '../util/check_session.php';


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function logout(){
            window.location = "http://localhost/tds_uc13/myeats/controller/login_controller.php?acao=logout";
        }
    </script>
    <title>Home</title>
</head>
<body>
    <h1>Bem vindo a página principal!</h1>

    <a href="#" onclick="logout()">Sair</a> <!--onclick esta chamando o logout-->
</html>