<?php

class Pessoa {

    private $nome;
    private $idade;
    private $sexo;

    public function Pessoa($n, $i, $s) {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }

    public function fazerAniv() {
        $this->setIdade($this->getIdade() + 1);
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdade($i) {
        $this->idade = $i;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setSexo($s) {
        $this->sexo = $s;
    }

    public function getSexo() {
        return $this->sexo;
    }

}
