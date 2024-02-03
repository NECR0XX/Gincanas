<?php
class AtivModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Ativs
    public function criarAtiv($nome, $regras, $data) {
        $sql = "INSERT INTO atividades (nome, regras, data) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $regras, $data]);
    }

    // Model para listar Ativs
    public function listarAtivs() {
        $sql = "SELECT * FROM atividades";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Ativs
    public function atualizarAtiv($id_ativ, $nome, $regras, $data){
        $sql = "UPDATE atividades SET nome = ?, regras = ?, data = ? WHERE id_ativ = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $regras, $data, $id_ativ]);
    }
    
    // Model para deletar Ativ
    public function excluirAtiv($id_ativ) {
        $sql = "DELETE FROM atividades WHERE id_ativ = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_ativ]);
    }
    
}
?>