<?php

ini_set('display_errors', 0 );
error_reporting(0);
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
unset($_SESSION['login']);
unset($_SESSION['senha']);
header('location: ../index.html');
}
require 'banco.php';
$id = null;
if (!empty($_GET['id'])) {
$id = $_REQUEST['id'];
}
if (null == $id) {
header("Location: index.php");
}
if (!empty($_POST)) {
$especialErro = null;
$especial = $_POST['nome'];

//Validação

$validacao = true;
if (empty($especial)) {
$especialErro = 'Por favor digite o nome do prato.';
$validacao = false;
}

if ($validacao) {
$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE especialidades SET especial = ? WHERE id = ?";
$q = $pdo->prepare($sql);
$q->execute(array($especial, $id));
Banco::desconectar();
header("Location: index.php");
}
} else {
$pdo = Banco::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM especialidades where id = ?";
$q = $pdo->prepare($sql);
$q->execute(array($id));
$data = $q->fetch(PDO::FETCH_ASSOC);
$especial = $data['especial'];
Banco::desconectar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="vendor/select2/select2.min.css">
<link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<title>Atualizar a Reserva</title>
</head>
<body>
<div class="container">
<div class="span10 offset1">
<div class="card">
<div class="card-header">
<h3 class="well"> Atualizar a Reserva - ID: <?php echo $id ?></h3>
</div>

            <div class="card-body">

                <form class="form-horizontal" action="updateesp.php?id=<?php echo $id ?>" method="post">



                    <div class="control-group <?php echo !empty($especialErro) ? 'error' : ''; ?>">

                        <label class="control-label">Nome do Prato</label>

                        <div class="controls">

                            <input name="nome" class="form-control" size="50" type="text" placeholder="Nome do Prato"

                                   value="<?php echo !empty($especial) ? $especial : ''; ?>">

                            <?php if (!empty($especialErro)): ?>

                                <span class="text-danger"><?php echo $especialErro; ?></span>

                            <?php endif; ?>

                        </div>

                    </div>

                    <br/>

                    <div class="form-actions">

                        <button type="submit" class="btn btn-warning">Atualizar</button>

                        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="

        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"

        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"

        crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->

<script src="assets/js/bootstrap.min.js"></script>

</body>



</html>

