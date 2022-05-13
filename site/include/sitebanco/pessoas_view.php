<?php

    require_once "pessoas_model.php";
    $dados_clientes = pegar_dados();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark"> <!-- indica o CABECALHO da tabela -->
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados_clientes as $item){?> <!-- indica o MAIN da tabela -->
                <tr>
                    <td><?php echo $item['nome'];?></td>
                    <td><?php echo $item['idade'];?></td>
                    <td><?php echo $item['estado'];?></td>
                </tr>
            <?php } ?>
            </tbody>
    </table>
</body>
</html>