<?php

class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    public function Lutador($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    public function apresentar() {
        echo "<p>-------------------------------------------"
        . "------------------------------------------------</p>";
        echo "<p>CHEGOU A HORA!<br>O lutador {$this->getNome()} ";
        echo "veio diretamente de {$this->getNacionalidade()}, ";
        echo "tem {$this->getIdade()} anos, ";
        echo "mede {$this->getAltura()}m e ";
        echo "pesa {$this->getPeso()}Kg<br>";
        echo "Ele tem {$this->getVitorias()} vitorias, ";
        echo "{$this->getDerrotas()} derrotas, ";
        echo "e {$this->getEmpates()} empates.</p>";
        echo "<p>-------------------------------------------"
        . "------------------------------------------------</p>";
    }

    public function status() {
        echo "<p>-------------------------------------------"
        . "------------------------------------------------</p>";
        echo "<p>{$this->getNome()} ";
        echo "é um peso {$this->getCategoria()} ";
        echo "e já ganhou {$this->getVitorias()} vezes, ";
        echo "perdeu {$this->getDerrotas()} vezes e ";
        echo "empatou {$this->getEmpates()} vezes.</p>";
        echo "<p>-------------------------------------------"
        . "------------------------------------------------</p>";
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNacionalidade($n) {
        $this->nacionalidade = $n;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setIdade($i) {
        $this->idade = $i;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setAltura($a) {
        $this->altura = $a;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setPeso($p) {
        $this->peso = $p;
        $this->setCategoria($p);
    }

    public function getPeso() {
        return $this->peso;
    }

    private function setCategoria($p) {
        if ($p < 52.2) {
            $c = "Invalido";
        } elseif ($p <= 70.3) {
            $c = "Leve";
        } elseif ($p <= 83.9) {
            $c = "Medio";
        } elseif ($p <= 120.2) {
            $c = "Pesado";
        } else {
            $c = "Invalido";
        }

        $this->categoria = $c;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setVitorias($v) {
        $this->vitorias = $v;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function setDerrotas($d) {
        $this->derrotas = $d;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setEmpates($e) {
        $this->empates = $e;
    }

    public function getEmpates() {
        return $this->empates;
    }

}
