<?php 
require "banco_dados.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $conexao -> query("INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulario.css">
    <script src="formulario.js" defer></script>
</head>
<body>

<div id="fundo">

    <h1>FORMULÁRIO DE CADASTRO</h1>
    <form method="POST">
        <label></label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
        <label></label>
        <input type="text" id="email" name="email" placeholder="Digite seu email" required>
        <label></label>
        <input type="text" id="senha" name="senha" placeholder="Digite sua senha" required>
        <button class="botao" type="click">Enviar inscrição</button>
    </form>
</div>


</body>
</html>