<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Icone-->
    <link rel="apple-touch-icon" sizes="180x180" href="img">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/mavefavicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>TIC-TAC-TOE</title>
</head>
<body>
     <!----------Botão Lateral---------->
     <div class="container">
        <div class="hamburguer">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
            <span>FECHAR</span>
        </div>
        <!----------Cabeçalho---------->
        <header id="home">
            <div class="img-wrapper">
                <img src="img/pankaj-patel-u2Ru4QBXA5Q-unsplash.jpg" alt="">
            </div>
            <div class="banner">
                <h1>Bem-vindo ao Jogo <span style="color:aquamarine;">TIC-TAC-TOE</span></h1>
                <p>Gabriel <span style="color:aqua;">Furquim</span> da Silva, Gustavo <span style="color:aqua;">Lipinski</span><br> e <span style="color:aqua;">Vini</span>cius Vicenzo Padilha.</p>
                <a href="jogar.html" class="menu-link"><button>Jogar sem Login</button></a>
                <a href="login.php" class="menu-link"><button>Login</button></a>
                <a href="formulario.php" class="menu-link"><button>Cadastro</button></a>
            </div>
        </header>
        <!----------Menu Lateral---------->
        <div class="sidebar">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="ranking.html" class="menu-link">Rank</a></li>
                    <li class="menu-item"><a href="jogadores.html" class="menu-link">Jogadores</a></li>
                    <li class="menu-item"><a href="alunos.php" class="menu-link">Alunos</a></li>
                </ul>
            </nav>
            <div class="social">
                <img src="img/android-chrome-192x192.png" >
            </div>
        </div>
        <!----------Rodapé---------->
        <footer>
            <div class="footer-content">
                <p>Copyright &copy; 2021, Team Mavericks - Copia não comédia!</p>
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
            ganhador=1
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
            document.getElementById("mensagens").innerHTML = 'Jogador Ganhou'
            jogadorPontuacao++
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