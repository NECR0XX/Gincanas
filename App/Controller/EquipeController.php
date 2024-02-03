<?php
require_once '../../App/Model/EquipeModel.php';


class EquipeController {
    private $equipeModel;

    public function __construct($pdo) {

        $this->equipeModel = new EquipeModel($pdo);
    }

    public function criarEquipe($nome, $participantes, $cor, $pontos, $categoria) {
        $this->equipeModel->criarEquipe($nome, $participantes, $cor, $pontos, $categoria);
    }

    public function criarEquipe2($nome, $participantes, $cor, $categoria) {
        $this->equipeModel->criarEquipe2($nome, $participantes, $cor, $categoria);
    }
    
    public function listarEquipes() {
        return $this->equipeModel->listarEquipes();
    }
    public function listarEquipes2() {
        return $this->equipeModel->listarEquipes2();
    }

    public function exibirListaEquipes() {
        $equipes = $this->equipeModel->listarEquipes();
        include '../../Resources/View/equipes/lista.php';
    }
    public function exibirListaEquipesOrdenadasPorPontos() {
        $equipes = $this->equipeModel->listarEquipesOrdenadasPorPontos();
        include '../../Resources/View/equipes/lista2.php';
    }
}
?>