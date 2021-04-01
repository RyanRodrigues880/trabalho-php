<?php
session_start();
require_once('admin/conexao.php');
$nome = $_POST['name'];
$comentario = $_POST['comentario'];
$estrela = $_POST['estrela'];
$link = getConnection(); 
$result_avaliacos = "INSERT INTO avaliacoes (nome, comentario, estrelas) VALUES ('$nome', '$comentario', '$estrela')";
$resultado_avaliacos = mysqli_query($link, $result_avaliacos);
if ($resultado_avaliacos) {
    echo "<script>alert('A avaliação foi cadastrada com sucesso, obrigado.');location.href=\"index.php\";</script>";
} else {
    echo "<script>alert('A avaliação não foi cadastrada, tente novamente.');location.href=\"index.php\";</script>";
}
?>