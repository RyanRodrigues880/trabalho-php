<?php
$servidor = 'localhost';
$banco = 'lasorella';
$usuario = 'root';
$senha = '';
$conexao = mysqli_connect($servidor,$usuario,$senha);
mysqli_select_db($conexao, $banco);
?>
