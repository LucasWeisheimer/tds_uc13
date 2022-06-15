<?php
    require_once "../util/database.php";

    class PontoModel{
        
        public function create($matricula, $tipo){
            $db = new Database();
            $con = $db->connect();

            $sql = "insert into ponto(matricula, data_hora, tipo) values (:matricula, current_time(), :tipo)";
            $stmt = $con->prepare($sql);
            $result = $stmt->execute(['matricula'=>$matricula, 'tipo'=>$tipo]);
        }
    }

?>