<?php

class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    private $tampada;

    public function rabiscar() {
        if ($this->tampada) {
            echo "<p>ERRO...</p>";
        } else {
            echo "<p>RABISCANDO...</p>";
        }
    }

    private function pintar() {
        if ($this->tampada) {
            echo "<p>ERRO...</p>";
        } else {
            echo "<p>PINTANDO...</p>";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }

}
