<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="../controller/login_controller.php?acao=login" method="post">
        Email <input type="text" name="email_login" id="user_login">
        <br>
        Password <input type="text" name="password_login" id="password_login">
        <br>
        <input type="submit" value="Login">

    </form>
    <br>
    <a href="user_create_view.php">Novo Cadastro</a>
</body>
</html>