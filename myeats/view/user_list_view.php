<?php       //framework laravel, um ótimo framework para php
    
    require_once "../controller/user_controller.php";

    if(isset($_GET["msg"])){//se existi a msg....
        $msg = $_GET['msg'];
        echo "<script type='text/javascript'>";
        echo "alert('".$msg."')";
        echo "</script>";
    }


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function deletar(id){
           if(confirm("Tem certeza que deseja remover esse registro?")){
               url = "http://localhost:8080/myeats/controller/user_controller.php?acao=deletar&id="+id;
               window.location = url;
           }
        }
    </script>
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
                echo "<td> <a href='#' onclick=deletar(". $item['id'] .")>x</a> </td>";
                echo "</tr>";
            }
        
        
        ?>
    </table>



    
</body>
</html>