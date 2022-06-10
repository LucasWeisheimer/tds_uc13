<?php //controller controla fluxo de tela

    require_once "../model/user_model.php";

    if(!isset($_GET["acao"])){//Verificando se "!não" existe o 'indice' acao no get
        $acao = "findall";
    }
    else {
        $acao = $_GET["acao"]; //ACAO DO MODEL DO 'FILTRAR'
    }

    if ($acao == "findall"){ // 1 igual'=' atribui, 2 igual'==' compara
        $model = new UserModel(); // chama a classe UserModel;
        $dados = $model -> findall(); // chama a função findall
    }
    else if($acao == "create"){
        if (isset($_POST['nome']) || !empty($_POST['nome'])){ //checa se o indice'NOME' do array existe
            $name = $_POST['nome'];
        }else {
            echo "Campo 'nome' não preenchido";
        }
    
        if (isset($_POST['endereco']) || !empty($_POST['endereco'])){
            $address = $_POST['endereco'];
        }else {
            echo "Campo 'endereço' não preenchido";
        }
    
        if (isset($_POST['email']) || !empty($_POST['email'])){
            $email = $_POST['email'];
        }else {
            echo "Campo 'email' não preenchido";
        }
    
        if (isset($_POST['senha']) || !empty($_POST['senha'])){
            $password = $_POST['senha'];
        }else {
            echo "Campo 'senha' não preenchido";
        }
    
        if (isset($_POST['conf_senha']) == isset($_POST['senha'])){
            $confirm_password = $_POST['conf_senha'];
        }else {
            echo "Campo 'confirmar senha' não preenchido";
        } 

        $userModel = new UserModel(); //New é utilizado para instanciar objeto ;
        $userModel -> create($name, $address, $email, $password, $confirm_password); //Chama a funcao do UserModel com os parametros $name, $address, $email.....;
    }
    else if($acao == "deletar"){
        $id = $_GET["id"];
        $model = new UserModel();
        $result = $model -> delete($id);

        if($result == 1){
            $data['msg'] = "Usuario deletado com sucesso!";
            $data['code'] = 1; // vai informar se é sucesso
        }
        else { //abaixao são arrays
            $data['msg'] = "Erro ao deletar usuario!";
            $data['code'] = 0; // vai informar se deu erro
        }

        echo json_encode($data);

    }
    else if($acao == "update"){

        $model = new UserModel();
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];

        $result = $model -> update($id, $nome, $email, $endereco);

    }









?>