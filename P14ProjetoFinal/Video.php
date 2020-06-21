<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo {

    public $titulo;
    public $avaliacao;
    public $views;
    public $curtidas;
    public $reproduzindo;

    function Video($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function pause() {
        $this->setReproduzindo(false);
    }

    public function play() {
        $this->setReproduzindo(true);
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getViews() {
        return $this->views;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAvaliacao($avaliacao) {
        $m = ($this->getAvaliacao() + $avaliacao) / $this->getViews();
        $this->avaliacao = $m;
    }

    function setViews($views) {
        $this->views = $views;
    }

    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

}
