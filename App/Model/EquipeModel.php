<?php
class EquipeModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Equipes
    public function criarEquipe($nome, $participantes, $cor, $pontos, $categoria) {
        $sql = "INSERT INTO equipes (nome, participantes, cor, pontos, categoria) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $participantes, $cor, $pontos, $categoria]);
    }

    // Model para listar Equipes
    public function listarEquipes() {
        $sql = "SELECT * FROM equipes";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>