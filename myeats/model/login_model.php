<?php

    require_once "../util/database.php";

    class LoginModel{

        public function login($email, $password){ //ordem precisa ser igual ao "login($email, $cripto_password)"
            $db = new Database();
            $con = $db -> connect();
            
            $sql = "SELECT email FROM user WHERE email = :email AND password = :password";
            $stmt = $con -> prepare($sql);
            $result = $stmt -> execute(['email'=> $email, 'password'=>$password]);

            $total = $stmt->rowCount();
            if($total == 1){
                return true;
            } else {
                return false;
            }
        } 
    }

?>