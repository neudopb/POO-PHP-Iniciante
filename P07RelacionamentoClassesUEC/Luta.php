<?php

require_once 'Lutador.php';

class Luta {

    private $desafiado;
    private $desafiador;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2) {
        if (($l1 != $l2) && ($l1->getCategoria() === $l2->getCategoria())) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiador($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiador(null);
        }
    }

    public function lutar() {
        if ($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiador()->apresentar();

            $vencedor = rand(0, 2);
            echo "<p>Resultado: ";
            switch ($vencedor) {
                case 0:
                    echo "Empatou</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiador()->empatarLuta();
                    break;
                case 1:
                    echo $this->getDesafiado()->getNome() . "</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiador()->perderLuta();
                    break;
                case 2:
                    echo $this->getDesafiador()->getNome() . "</p>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiador()->ganharLuta();
                    break;
            }
        }else{
            echo "<p>Luta não pode acontecer!</p>";
        }
    }

    public function setDesafiado($do) {
        $this->desafiado = $do;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiador($dr) {
        $this->desafiador = $dr;
    }

    public function getDesafiador() {
        return $this->desafiador;
    }

    public function setRounds($ro) {
        $this->rounds = $ro;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setAprovada($ap) {
        $this->aprovada = $ap;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

}
