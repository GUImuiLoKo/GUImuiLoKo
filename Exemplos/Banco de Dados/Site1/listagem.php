<?php 

require "banco_dados.php";

$usuario = $conexao -> query("SELECT *FROM usuario")->fetch_all(MYSQLI_ASSOC);
// print_r($cadastrar)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    


</body>
</html>