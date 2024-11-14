<?php 

try {
    $conexao = new mysqli("localhost","root","","gui");
}
catch(Exception $erro){
    echo"ouve um erro de cenexão" . $erro -> getMessage();
}

?>