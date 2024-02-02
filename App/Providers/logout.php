<?php 
session_start();
unset($_SESSION['usuarioEmail']);
header('Location: ../../Public/login.php');
exit();