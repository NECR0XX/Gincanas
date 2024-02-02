<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../Resources/Js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include '../../App/Providers/verifica_login.php'
        ?>
        <h3>Olá <?php echo $_SESSION['usuarioNomedeUsuario'], "!"; ?> </h3>
        <button id="log" onclick="logout()">Sair</button></div>
    </header>
    <section>
        <a href="index.php">index</a><br>
        <a href="gincana.php">gincana</a><br>
        <a href="times.php">times</a>
        <h3>Venha fazer as gincanas com a gente <a href="gincana.php">clique aqui</a></h3>
    </section>
</body>
</html>