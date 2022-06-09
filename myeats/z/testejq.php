<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../static/js/jquery-3.6.0.min (1).js"></script>

    <script type="text/javascript">
        $(document).ready(function(){ //só vai rodar quando todos os componentes(site) for carregado na tela
            console.log("document loaded");

            $("#btn_enviar").click(function(){
                valida_dados();
            })
        })

        function valida_dados(){
            var conteudo = $("#nome").val()
            $("#btn_enviar").val(conteudo);
            //console.log(conteudo);




            //jquery ajax post
            $.ajax({
                url: "responde_ajax.php",
                dataType:"json"
            })
            .done(function(data){
                //alert(data);
                //alert(data[1].nome + " " + data[1].email);
                alert(data[1].nome);

            })

            //forma muito simples de se fazer um ajax
            /*$.post( "responde_ajax.php", { })
                .done(function( data ) { //"data" é o conteudo que ta no controller(responde_ajax)
                    alert( "Data Loaded: " + data );
            });*/
        }
    </script>



</head>
<body>
    <h1>USANDO JQUERY</h1>
    Nome: <input type="text" id="nome" name="nome">
    <br>
    <input type="button" id="btn_enviar" value="Enviar Dados" onclick="valida_dados()">
    
</body>
</html>