<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" type="image/x-icon">
    <script src="../../Resources/Js/script.js"></script>
    <link rel="stylesheet" href="../../Resources/Css/adm.css">
    <title>The Backrooms</title>
</head>
<body>
    <header>
        <?php
            include '../../App/Providers/verifica_login.php'
        ?>
        <h3>Olá <?php echo $_SESSION['usuarioNomedeUsuario'], "!"; ?> </h3><br>
        <button id="log" onclick="logout()">Sair</button></div><br><br>
    </header>
    <div class="light"></div>
    <section>
        <a href="ativ.php">Gincanas</a><br>
        <a href="equip.php">Equipes</a><br>
        <a href="user.php">Usuários</a>
    </section>
</body>
</html>