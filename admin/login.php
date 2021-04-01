<?php
session_start();
require_once('conexao.php');
$login = $_POST['login'];
$senha = $_POST['senha'];
$link = getConnection();
$login = mysqli_query($link, "SELECT login, senha FROM usuarios WHERE login = '$login' AND senha = '$senha'");
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