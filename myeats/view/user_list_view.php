<?php       //framework laravel, um ótimo framework para php
    
    require_once "../controller/user_controller.php";



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../static/js/jquery-3.6.0.min (1).js"></script>
    <script type="text/javascript">
        $(document).ready(function(){ //só vai rodar quando todos os componentes(site) for carregado na tela
            console.log("document loaded");
        })
    </script>

    <script type="text/javascript">
        function deletar(id){ //id tem o conteudo da funcao deletar lá em baixo
            $.ajax({
                data: {id:id, acao: 'deletar'}, // 1 id é o nome que vai chegar do outro lado via ajax, 2 id é o valor do id da funcao(id:1)
                url: "../controller/user_controller.php",
                dataType:"json"
            })
            .done(function(data){
                alert(data.msg);
                //caso eu queira fazer um alert bonitinho
                /*if(data.code == 0){
                    alert_bonito
                }
                else {
                    alert_vermnelho()
                }*/
            })
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
                echo "<td><a href='user_edit_view.php?id=". $item['id']. "'>".$item['id']."</a></td>";//[precisa ser o mesmo nome da coluna lá do banco];
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