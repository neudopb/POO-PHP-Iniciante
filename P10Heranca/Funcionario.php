<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {

    private $setor;
    private $trabalhando;

    public function Funcionario($n, $i, $s, $se) {
        parent::Pessoa($n, $i, $s);
        $this->setSetor($se);
        $this->setTrabalhando(false);
    }

    public function mudarTrabalho() {
        if ($this->getTrabalhando()) {
            $this->setTrabalhando(false);
        } else {
            $this->setTrabalhando(true);
        }
    }

    private function setSetor($s) {
        $this->setor = $s;
    }

    private function getSetor() {
        return $this->setor;
    }

    private function setTrabalhando($t) {
        $this->trabalhando = $t;
    }

    private function getTrabalhando() {
        return $this->trabalhando;
    }

}
