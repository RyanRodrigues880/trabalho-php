<?php
session_start();
unset ($_SESSION['login']);
unset ($_SESSION['senha']);
?>
<script>location.href='/admin';</script>