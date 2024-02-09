<?php 
session_start();
unset($_SESSION['usuarioEmail']);
header('Location: ../../Public/User/index.php');
exit();