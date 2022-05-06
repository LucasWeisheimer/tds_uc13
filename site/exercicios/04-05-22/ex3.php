<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>EMAIL VALIDO OU INVALIDO</h2>
    <?php
        $email = "lucas@hotmail.com";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "$email é valido";

        } else {
            echo "$email é invalido";
        }
    ?>

    <h2>ENDERECO DE IP VALIDO OU INVALIDO</h2>
    <?php
        $ip = "337.1.1.0";

        if(filter_var($ip, FILTER_VALIDATE_IP)){
            echo "$ip é valido";
        } else {
            echo "$ip é invalido";
        }
    ?>

    <h2>URL INVALIDO OU VALIDA</h2>

    <?php
        $url = "https://google.com";

        if(filter_var($url, FILTER_VALIDATE_URL)){
            echo "$url é valido";
        } else {
            echo "$url é invalido";
        }
    ?>

    <h2>TABELA CORES ALTERNADAS</h2>

    <table>
        <tr>
            <?php
                
            
            ?>
        </tr>
    </table>


</body>
</html>