<?php
require_once '../../App/Model/AtivModel.php';


class AtivController {
    private $ativModel;

    public function __construct($pdo) {

        $this->ativModel = new AtivModel($pdo);
    }

    public function criarAtiv($nome, $regras, $data) {
        $this->ativModel->criarAtiv($nome, $regras, $data);
    }

    public function listarAtivs() {
        return $this->ativModel->listarAtivs();
    }

    public function exibirListaAtivs() {
        $ativs = $this->ativModel->listarAtivs();
        include '../../Resources/View/atividade/lista.php';
    }

    public function atualizarAtiv($id_ativ, $nome, $regras, $data) {
        $this->ativModel->atualizarAtiv($id_ativ, $nome, $regras, $data);
    }
    
    public function excluirAtiv ($id_ativ) {
        $this->ativModel->excluirAtiv($id_ativ);
    }
}
?>