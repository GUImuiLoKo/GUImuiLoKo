<?php 

require "banco_dados.php";

$cadastrar = $conexao -> query("SELECT *FROM cadastrar")->fetch_all(MYSQLI_ASSOC);
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
    
<table border="3px">
    <tr>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Salário</th>
        <th>Data</th>
    </tr>
<?php foreach($cadastrar as $cadastrando) {?>
    <tr>
        <td> <?php echo $cadastrando['nome'] ?> </td>
        <td> <?php echo $cadastrando['cargo'] ?> </td>
        <td> <?php echo $cadastrando['salario'] ?> </td>
        <td> <?php echo $cadastrando['dataemissao'] ?> </td>

    </tr>
<?php } ?>

</table>

</body>
</html>