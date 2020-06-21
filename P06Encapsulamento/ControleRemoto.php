<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {

    //ATRIBUTOS
    private $volume;
    private $ligado;
    private $tocando;

    //CONSTRUTOR
    public function ControleRemoto() {
        $this->setVolume(50);
        $this->setLigado(true);
        $this->setTocando(false);
    }

    //METODOS
    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        if ($this->getLigado()) {
            echo "<p>-------MENU-------</p>";
            echo "<p>LIGADO: {$this->getLigado()}</p>";
            echo "<p>TOCANDO: {$this->getTocando()}</p>";
            echo "<p>VOLUME: {$this->getVolume()} ";
            for ($i = 0; $i < $this->getVolume(); $i += 10) {
                echo "|";
            }
            echo "</p>";
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    public function fecharMenu() {
        if ($this->getLigado()) {
            echo "<p>FECHANDO MENU...</p>";
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        } else {
            echo "<p>ERRO!</p>";
        }
    }

    //GETTERS E SETTERS
    function getVolume() {
        return $this->volume;
    }

    function getLigado() {
        return $this->ligado;
    }

    function getTocando() {
        return $this->tocando;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }

    function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    function setTocando($tocando) {
        $this->tocando = $tocando;
    }

}
