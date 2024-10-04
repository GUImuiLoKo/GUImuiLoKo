<?php 

try {
    $conexao = new mysqli("localhost","root","","cadastro");
}
catch(Exception $erro){
    echo"ouve um erro de cenexão" . $erro -> getMessage();
}

?>