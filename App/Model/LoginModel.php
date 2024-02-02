<?php
class LoginModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Logins
    public function criarLogin($nome, $email, $senha) {
        $sql = "INSERT INTO login (nome, email, senha, tipo_usuario) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, 2]);
    }

    // Model para listar Logins
    public function listarLogins() {
        $sql = "SELECT * FROM login";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>