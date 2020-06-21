<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao {

    private $espectador;
    private $filme;

    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc) {
        if ($porc <= 20) {
            $n = 3;
        } else if ($porc <= 50) {
            $n = 5;
        } else if ($porc <= 90) {
            $n = 8;
        } else {
            $n = 10;
        }

        $this->filme->setAvaliacao($n);
    }

    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }

}
