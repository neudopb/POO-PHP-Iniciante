<?php

require_once 'Animal.php';

class Reptil extends Animal {

    private $corEscama;

    public function Reptil($peso, $idade, $membros, $corEscama) {
        parent::setPeso($peso);
        parent::setIdade($idade);
        parent::setMembros($membros);
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>Som de reptil</p>";
    }

    public function locomover() {
        echo "<p>Rastejando</p>";
    }

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}
