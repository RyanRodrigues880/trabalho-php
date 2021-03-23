<?php
session_start();
$login = preg_replace('/[^[:alpha:]_]/', '',$_POST['login']);
$senha = preg_replace('/[^[:alnum:]_]/', '',$_POST['senha']);
$con = mysqli_connect("localhost", "id16366396_killer", "147258369Rr@");
mysqli_select_db($con, "id16366396_lasorella");
$login = mysqli_query($con, "SELECT login, senha FROM usuarios WHERE login = '$login' AND senha = '$senha'");
if (mysqli_num_rows($login)<=0){
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
    die();
}else{
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  header("Location: gerenciador/index.php");
}
?>