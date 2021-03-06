<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, data_nasc, cidade, estado, senha) VALUES ('$nome', '$email', '$telefone', '$data_nasc', '$cidade', '$estado', '$senha')");
    }
        session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
    header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="index2.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Icone-->
    <link rel="apple-touch-icon" sizes="180x180" href="img">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/mavefavicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>JOGAR!!</title>

</head>

<body>
    <div class="retornar">
        <a href="index.php" class="menu-link"><button>Retornar</button></a>
    </div>
    <div id="principal">
        <h1 id="titulo"><span style="color:black;">TIC-TAC-TOE</span></h1>
        <div id="placar">
            <div id="jogador">
                <h2 id="jogador_nome">Convidado</h2>
                <span id="jogador_pontos">0</span>
                <ul id="jogador_escolha">
                    <li><a id="jogador_escolha_1" onclick="jogar(1)"><img src="img/pedra-removebg-preview.png"></a></li>
                    <li><a id="jogador_escolha_2" onclick="jogar(2)"><img src="img/papel-removebg-preview.png"></a></li>
                    <li><a id="jogador_escolha_3" onclick="jogar(3)"><img src="img/tesoura-removebg-preview.png"></a></li>
                </ul>
            </div>
            <div id="versus"><h1 id="oponente">VS</h1></div>
                <div id="computador">
                    <h2 id="computador_nome">Computador</h2>
                    <span id="computador_pontos">0</span>
                    <ul id="computador_escolha">
                        <li><a id="computador_escolha_1"><img src="img/pedra-removebg-preview.png"></a></li>
                        <li><a id="computador_escolha_2"><img src="img/papel-removebg-preview.png"></a></li>
                        <li><a id="computador_escolha_3"><img src="img/tesoura-removebg-preview.png"></a></li>
                    </ul>
                </div>
        </div>
        <div class="escolha">
            <div id="mensagens"><h1>Fa??a sua escolha !</h1></div>
        </div>
        <!----------Rodap??---------->
        <footer>
            <div class="footer-content" style="position:fixed; width:100%; height:70px; background-color: #17181b;; padding:5px; bottom:0px; ">
                <p>Copyright &copy; 2021, Team Mavericks - Copia n??o com??dia!</p>
            </div>
        </footer>
    </div>
</body>
<script src="script.js"></script>
<script>

    var jogador_escolha=0
    var jogadorPontuacao=0
    var computador_escolha=0
    var computadorPontuacao=0
    var ganhador=-1
    /*
    pedra=1
    papel=2
    tesoura=3
    */
    function jogar(escolha) {
        
        jogador_escolha = escolha
        computador_escolha = Math.floor((Math.random() * (3-1+1)))+1
        
        if(jogador_escolha == 1 && computador_escolha == 1){
            ganhador=0
        }
        else if(jogador_escolha == 1 && computador_escolha == 2){
            ganhador=2
        }
        else if(jogador_escolha == 1 && computador_escolha == 3){
            ganhador=1
        }
        else if(jogador_escolha == 2 && computador_escolha == 1){
            ganhador=1;
        }
        else if(jogador_escolha == 2 && computador_escolha == 2){
            ganhador=0
        }
        else if(jogador_escolha == 2 && computador_escolha == 3){
            ganhador=2
        }
        else if(jogador_escolha == 3 && computador_escolha == 1){
            ganhador=2
        }
        else if(jogador_escolha == 3 && computador_escolha == 2){
            ganhador=1
        }
        else if(jogador_escolha == 3 && computador_escolha == 3){
            ganhador=0
        }
        
        /*document.getElementById("jogador-escolha-1").classList.remove('selecionado')
        document.getElementById("jogador-escolha-2").classList.remove('selecionado')
        document.getElementById("jogador-escolha-3").classList.remove('selecionado')
        document.getElementById("computador-escolha-1").classList.remove('selecionado')
        document.getElementById("computador-escolha-2").classList.remove('selecionado')
        document.getElementById("computador-escolha-3").classList.remove('selecionado')

        document.getElementById("jogador-escolha-" + jogador_escolha).classList.add('selecionado')
        document.getElementById("computador-escolha-" + computador_escolha).classList.add('selecionado')*/

        if(ganhador == 0){
            document.getElementById("mensagens").innerHTML = 'Empate'
        }
        else if(ganhador == 1){
            document.getElementById("mensagens").innerHTML = 'Convidado Ganhou'
            jogadorPontuacao++;
        }
        else if(ganhador == 2){
            document.getElementById("mensagens").innerHTML = 'Computador Ganhou'
            computadorPontuacao++    
        }
                
        document.getElementById("jogador_pontos").innerHTML = jogadorPontuacao
        document.getElementById("computador_pontos").innerHTML = computadorPontuacao
    }
</script>
</html>