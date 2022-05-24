<?php

    class Database{
        private $user = 'root';
        private $password = '';
        private $server_ip = 'localhost';
        private $database_name = 'myeatsdb';

        public function connect(){
            $con = new PDO("mysql:host=" . $this->server_ip . ";dbname=" . $this->database_name, $this->user, $this->password); //utiliza-se o this para chamar a variavel de uma classe.
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //lança o erro do mysql na tela
            return $con;

        }
        public function disconnect(){
            


        }
    }

    $db = new Database();

    $db->connect();

?>