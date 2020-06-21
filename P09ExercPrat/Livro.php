<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao {

    private $titulo, $autor;
    private $totPag, $pagAtual;
    private $aberto, $leitor;

    function __construct($titulo, $autor, $totPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function detalhes() {
        echo "<p>---------------------------------------------------------------------------------";
        echo "<br>TITULO: " . $this->getTitulo();
        echo " | AUTOR: " . $this->getAutor();
        echo "<br>TOTAL DE PAGINAS: " . $this->getTotPag();
        echo " | PAGINA ATUAL: " . $this->getPagAtual();
        echo " | ABERTO: " . $this->getAberto();
        echo "<br>LEITOR: " . $this->getLeitor()->getNome();
        echo " | IDADE: " . $this->getLeitor()->getIdade();
        echo " | SEXO: " . $this->getLeitor()->getSexo() . "<br></p>";
    }

    public function abrir() {
        $this->setAberto(true);
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($n) {
        if ($this->getAberto() && ($n <= $this->getTotPag())) {
            $this->setPagAtual($n);
        } else {
            echo "<p>ERRO...</p>";
        }
    }

    public function avancarPag() {
        if ($this->getAberto() && ($this->getPagAtual() < $this->getTotPag())) {
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            echo "<p>ERRO...</p>";
        }
    }

    public function voltarPag() {
        if ($this->getAberto() && ($this->getPagAtual() > 0)) {
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
            echo "<p>ERRO...</p>";
        }
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPag() {
        return $this->totPag;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPag($totPag) {
        $this->totPag = $totPag;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

}
