<?php

    require_once "../util/database.php";

    class UserModel{

        public function create($name, $address, $email, $password){
            $db = new Database(); //instancia a classe
            $con = $db->connect(); //-> faz com que o connect seja um objeto

            //EVITAR SQL INJECTOR
            $sql = "insert into user(name, email, password, address) values (:name, :email, :password, :address)"; // :variavel = entende que é o lugar de uma variavel e sabe que precisa atribuir um valor naquele local
            $stmt = $con->prepare($sql); // vai compilar a query e vai deixa na memória pré compilado, esperando chegar um parametro(METE UMA ASPAS DUPLAS NOS : DO 'SQL')
            $result = $stmt->execute(["name"=>$name, "email"=>$email, "password"=>sha1($password), "address"=>$address]); // nome entre aspas precisa ser o mesmo que ta nos : do sql   "=> array"
        }

        public function delete($id){ //nao sofre sql injection devido ao : do id (:ID) e do execute.
            $db = new Database;
            $con = $db->connect();

            $sql = "delete  from user where id = :id";
            $stmt = $con -> prepare($sql); //nao deixa fazer injection, ele pré-compila;
            $result = $stmt -> execute(['id' => $id]); //id do banco de dados recebe o id do nosso código;

            return $result;
        }

        public function update(){
            echo "update";
        }

        public function findall(){
            $db = new Database();
            $con = $db->connect();

            $sql = "select id, name, email, address from user"; //'limit VALUE of set VALUE', é o máximo de páginas da tabela, também é preciso fazer nos outros MVC 
            $stmt = $con -> prepare($sql);
            $result = $stmt -> execute();

            return $stmt -> fetchAll();
        }
    }
?>