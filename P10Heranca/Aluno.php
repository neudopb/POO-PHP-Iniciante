<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {

    private $matr;
    private $curso;

    public function Aluno($n, $i, $s, $m, $c) {
        parent::Pessoa($n, $i, $s);
        $this->setMatr($m);
        $this->setCurso($c);
    }

    public function cancelarMatr() {
        $this->setMatr(null);
    }

    public function setMatr($m) {
        $this->matr = $m;
    }

    public function getMatr() {
        return $this->matr;
    }

    public function setCurso($c) {
        $this->curso = $c;
    }

    public function getCurso() {
        return $this->curso;
    }

}
