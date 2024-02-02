<?php 
include '../../Config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Equipes</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Equipes</h1></legend>
        <?php
            $stmt = $pdo->query('SELECT * FROM equipes');
            $equipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($equipes) == 0) {
                echo '<p>Nenhuma Equipe cadastrada</p>';
            } else {
                echo '<table border="1">';
                echo '<thead><tr><th>Nome da Equipe</th><th>Participantes</th><th>Cor da equipe</th><th>Pontos</th><th>Categoria</th><th colspan="2">Opções</th></tr></thead>';
                echo '<tbody>';
            
                foreach ($equipes as $equipe) {
                    echo '<tr>';
                    echo '<td>' . $equipe['nome'] . '</td>';
                    echo '<td>' . $equipe['participantes'] . '</td>';
                    echo '<td>' . $equipe['cor'] . '</td>';
                    echo '<td>' . $equipe['pontos'] . '</td>';
                    echo '<td>' . $equipe['categoria'] . '</td>';
                    echo "<td><a style='color:black;' href='../../App/Providers/atualizar.php?id={$equipe['id_equipes']}'>Atualizar</a></td>";
                    echo "<td><a style='color:black;' href='../../App/Providers/deletar.php?id={$equipe['id_equipes']}'>Deletar</a></td>";
                    echo '</tr>';
                }
            
                echo '</tbody>';
                echo '</table>';
            }
        ?>
    </fieldset>
</body>
</html>