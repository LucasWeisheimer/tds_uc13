<?php

    require_once "../model/ponto_model.php";

    

    if(isset($_POST['matricula']) || !empty($_POST['matricula'])){
        $matricula = $_POST['matricula'];
    } else {
        echo "Campo 'matricula' não preenchido";
    }


    if(isset($_POST['tipo']) || !empty($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    } else {
        echo "Campo tipo não preenchido";
    }

    $PontoModel = new PontoModel();
    $PontoModel -> create($matricula, $tipo);




?>