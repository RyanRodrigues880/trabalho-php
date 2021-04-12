<?php
session_start();
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$quantidade = $_POST['quantidade'];
$strcon = mysqli_connect('localhost','id16366396_killer','147258369Rr@','id16366396_lasorella');
$sql = "INSERT INTO reservas (nome, email, telefone, data, quantidade) VALUES ('$nome', '$email', '$telefone', '$data', '$quantidade')"; 
$resultado = mysqli_query($strcon,$sql);
if ($resultado) {
    echo "<script>alert('A reserva foi feita com sucesso, obrigado.');location.href=\"index.php\";</script>";
} else {
    echo "<script>alert('A reserva não foi feita, tente novamente.');location.href=\"reservar.html\";</script>";
}
?>