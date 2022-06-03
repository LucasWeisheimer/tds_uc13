<?php
//framework laravel, um ótimo framework para php


    require_once "../controller/user_controller.php";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list view</title>
</head>
<body>
    <h2>Lista de usuarios</h2> <!-- aprender table json <A TABELA A BAIXO NÃO É UTILIZADO NOS SITES!!!!> -->

    <table border=1>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>address</td>
            <td>excluir</td>
        </tr>
        <?php
            foreach($dados as $item){
                echo "<tr>";
                echo "<td>". $item['id'] . "</td>"; //[precisa ser o mesmo nome da coluna lá do banco];
                echo "<td>" . $item['name'] . "</td>";
                echo "<td>" . $item['email'] . "</td>";
                echo "<td>" . $item['address'] . "</td>";
                echo "<td> <a href='#' onclick = delete(". $item['id'] .")>x</a> </td>";
                echo "</tr>";
            }
        
        
        ?>
    </table>



    
</body>
</html>