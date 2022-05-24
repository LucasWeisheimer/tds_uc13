<?php

    require_once "../util/database.php";

    class UserModel{

        public function create($name, $address, $email, $password){
            $db = new Database(); //instancia a classe
            $con = $db->connect(); //-> faz com que o connect seja um objeto
            try{
                //EVITAR SQL INJECTOR
                $sql = "insert into user(name, email, password, address) values (:name, :email, :password, :address)"; // :variavel = entende que é o lugar de uma variavel e sabe que precisa atribuir um valor naquele local
                $stmt = $con->prepare($sql); // vai compilar a query e vai deixa na memória pré compilado, esperando chegar um parametro(METE UMA ASPAS DUPLAS NOS : DO 'SQL')
                $result = $stmt->execute(["name"=>$name, "email"=>$email, "password"=>sha1($password), "address"=>$address]); // nome entre aspas precisa ser o mesmo que ta nos : do sql   "=> array"

            }catch(PDOException $e){
                echo "XXXXXXXXXX";
                echo $e->getMessage();
            }

        }
        public function delete(){
            echo "delete";
        }
        public function update(){
            echo "update";
        }
        public function findall(){
            echo "find all";
        }




    }





?>