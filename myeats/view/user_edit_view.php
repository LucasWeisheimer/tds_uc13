<?php

    require_once "../model/user_model.php";

    $id = $_GET['id'];

    $model = new UserModel();
    $dados = $model->findById($id);

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form method="post" action="../controller/user_controller.php?acao=update">
        Id: <input type="text" name="id" id="id" disabled=disabled value="<?php echo $dados[0]['id'];?>"/> <br>
        Nome: <input type="text" name="nome" id="nome" value="<?php echo $dados[0]['name'];?>"/> <br>
        Endereço: <input type="text" name="endereco" id="endereco" value="<?php echo $dados[0]['address'];?>"/><br>
        Email: <input type="text" name="email" id="email" value="<?php echo $dados[0]['email'];?>"/><br>
        <input type="submit" value="Cadastrar"/>

    </form>
</body>
</html>