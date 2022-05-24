<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../controller/user_controller.php">
        Nome: <input type="text" name="nome" id="nome"/> <br>
        Endereço: <input type="text" name="endereco" id="endereco"/><br>
        Email: <input type="text" name="email" id="email"/><br>
        Senha: <input type="password" name="senha" id="senha"/><br>
        Confirmar Senha: <input type="password" name="conf_senha" id="conf_senha"/><br>
        <input type="submit" value="Cadastrar"/>
    </form>
</body>
</html>