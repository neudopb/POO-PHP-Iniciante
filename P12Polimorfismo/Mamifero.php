<?php

require_once 'Animal.php';

class Mamifero extends Animal {

    private $corPelo;

    public function Mamifero($peso, $idade, $membros, $corPelo) {
        parent::setPeso($peso);
        parent::setIdade($idade);
        parent::setMembros($membros);
        $this->corPelo = $corPelo;
    }

    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de mamifero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }

    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

}
