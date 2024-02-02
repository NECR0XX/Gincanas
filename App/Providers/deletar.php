<?php
include '../../Config/config.php';

if (!isset($_GET['id'])) { 
    header('Location: ../../Public/Adm/equip.php');
    exit;
}
$id_equipes = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM equipes WHERE id_equipes = ?');
$stmt->execute ([$id_equipes]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$appointment) {
    header('Location: ../../Public/Adm/equip.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare('DELETE FROM equipes WHERE id_equipes = ?');
    $stmt->execute([$id_equipes]);

    header('Location: ../../Public/Adm/equip.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../public/css/style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Deletar equipe</h1>
    <p>Tem certeza que deseja deletar a equipe <?php echo $appointment ['nome']; ?>?</p>
    <form method="post">
        <button type="submit">Sim</button>
        <a class= "no" href="../../Public/Adm/equip.php">Não</a>
</form>
</body>
</html>