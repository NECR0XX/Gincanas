<?php
class AtivModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Ativs
    public function criarAtiv($nome, $regras) {
        $sql = "INSERT INTO atividades (nome, regras) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $regras]);
    }

    // Model para listar Ativs
    public function listarAtivs() {
        $sql = "SELECT * FROM atividades";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Ativs
    public function atualizarAtiv($id_ativ, $nome, $regras){
        $sql = "UPDATE atividades SET nome = ?, regras = ? WHERE id_ativ = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $regras, $id_ativ]);
    }
    
    // Model para deletar Ativ
    public function excluirAtiv($id_ativ) {
        $sql = "DELETE FROM atividades WHERE id_ativ = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_ativ]);
    }
    
}
?>