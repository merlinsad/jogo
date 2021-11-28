<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, data_nasc, cidade, estado) VALUES ('$nome', '$email', '$telefone', '$data_nasc', '$cidade', '$estado')");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="formulario.css">
    <!--Icone-->
    <link rel="apple-touch-icon" sizes="180x180" href="img">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/mavefavicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Cadastro de usuário</title>
</head>
<body>
    <ul>
        <li><a href="index.html#home">Home</a></li>
    </ul>
    <div class="box">
        <form action="inserirCadastro.php" method="POST">
            <fieldset>
                <legend>Cadastro de usuário</legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="input_user" required>
                    <label for="name" class="label_input">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="input_user" required>
                    <label for="email" class="label_input">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="input_user" required>
                    <label for="telefone" class="label_input">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="data">Data de nascimento:</label>
                    <input type="date" name="data" id="data" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="input_user" required>
                    <label for="cidade" class="label_input">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="input_user" required>
                    <label for="estado" class="label_input">Estado</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>