<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "formulario";
$user = "root";
$pass = "";

// conecta ao banco de dados
$con = mysqli_connect("localhost","root","", "formulario");
// cria a instrução SQL que vai selecionar os dados
// executa a query
$dados = mysqli_query($con, "SELECT nome, ranking, pontos FROM usuarios");
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

?>
<!DOCTYPE html>
<html>
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
        <title>Jogadores - TICTACTOE</title>
    </head>
    <body>
            <style>
        table, td, th, tfoot {border:solid 1px #000; padding:5px;}
        th {background-color:#999;}
        caption {font-size:x-large;}
        colgroup {background:#F60;}
        .coluna1 {background:#F66;}
        .coluna2  {background:#F33;}
        .coluna3  {background:#F99;}
        </style>
        <div class="retornar">
            <a href="index.php" class="menu-link"><button>Home</button></a>
        </div>
        <div class="tabelaRank">
        <table>
                <caption>Ranking de Jogadores</caption>
                <thead>
                </thead>
                <tbody>
                <tr>
                <td>Jogador</td>
                <td>Rank</td>
                <td>Pontos</td>
                </tr>
                <tr>
                <td><?=$linha['nome']?></td>
                <td><?=$linha['ranking']?></td>
                <td><?=$linha['pontos']?></td>
                </tr>
                <tr>
                <td><?=$linha['nome']?></td>
                <td><?=$linha['ranking']?></td>
                <td><?=$linha['pontos']?></td>
                </tr>
                </tbody>
                </table>
                <?php
            // se o número de resultados for maior que zero, mostra os dados
            if($total > 0) {
                // inicia o loop que vai mostrar todos os dados
                do {
                ?>

                <?php
                // finaliza o loop que vai mostrar os dados
                }while($linha = mysqli_fetch_assoc($dados));
            // fim do if
            }
            ?>        
        <!----------Rodapé---------->

                <footer>
                    <div class="footer-content" style="position:fixed; width:100%; height:70px; background-color: #17181b;; padding:5px; bottom:0px; ">
                        <p>Copyright &copy; 2021, Team Mavericks - Copia não comédia!</p>
                    </div>
                </footer>
    </body>
</html>