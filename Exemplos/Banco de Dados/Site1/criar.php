<?php 

require "banco_dados.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $dataemissao = $_POST['dataemissao'];

    $conexao -> query("INSERT INTO cadastrar (nome, cargo, salario, dataemissao) VALUES ('$nome', '$cargo', '$salario', '$dataemissao')");
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
    <form method="POST">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <input type="text" name="cargo" placeholder="Digite seu cargo">
    <input type="text" name="salario" placeholder="Digite sua salario">
    <input type="text" name="dataemissao" placeholder="Digite sua data de emissão">

    <button type="submit">Enviar</button>
</form>
</body>
</html>

