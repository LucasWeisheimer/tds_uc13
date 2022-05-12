<?php
//https://localhost/site/array/10-05-22/tds12.php

    $estados = "Parana; Rio grande; Santa Catarina";
    echo $estados;
    echo "<br>";

    $ArrayEstados = explode(";", $estados);
    echo "<pre>";
    print_r($ArrayEstados);
    echo "</pre>";




?>