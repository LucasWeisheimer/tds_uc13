

<html>
    <body>
        <h1>Cadastro de usuarios</h1>

        <table border = '1' width = '300px'>
            <?php
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";
                $dados[] = "maria";

                for($i=0; $i < count($dados); $i++){
                    echo "<tr><td>" . $dados[$i] . "</td></tr>";
                }
            ?>

        </table>
        
    </body>
</html>