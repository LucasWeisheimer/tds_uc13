<html>
    <body>
        Texto HTML
        <table border="1">
        <?php
            $entrada = 4;
            for($i=0; $i<=10; $i++){
                $mult = $entrada * $i;
                echo "<tr><td> $entrada X $i = $mult </td></tr>";
            }
        ?>
        </table>

    </body>
</html>