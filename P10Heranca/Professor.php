<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {

    private $especialidade;
    private $salario;

    public function Professor($n, $i, $s, $e, $sa) {
        parent::Pessoa($n, $i, $s);
        $this->setEspecialidade($e);
        $this->setSalario($sa);
    }

    public function receberAum($v) {
        $this->setSalario($this->getSalario() + $v);
    }

    public function setEspecialidade($e) {
        $this->especialidade = $e;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setSalario($s) {
        $this->salario = $s;
    }

    public function getSalario() {
        return $this->salario;
    }

}
