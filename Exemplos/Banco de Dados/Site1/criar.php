<?php 

require "banco_dados.php";


if($_SERVER['REQUEST_METHOD'] == "GET"){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];


    $conexao -> query("INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <input type="text" name="email" placeholder="Digite seu email">
    <input type="text" name="senha" placeholder="Digite sua senha">

    <button type="submit">Enviar</button>
</form>
</body>
</html>

