<?php

require_once 'Pessoa.php';

class Bolsista extends Aluno {

    private $bolsa;

    public function renovarBolsa() {
        echo "<p>Renovando bolsa de " . $this->getNome() . "</p>";
    }

    public function pagarMensalidade() {
        echo "<p>" . $this->getNome() . " é bolsista! Pagamento facilitado</p>";
    }

    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

}
