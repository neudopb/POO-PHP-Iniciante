<?php

class Conta {
    #ATRIBUTOS

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    #CONSTRUTOR

    public function Conta() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    #METODOS

    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == "CP") {
            $this->setSaldo(150);
        } else if ($tipo == "CC") {
            $this->setSaldo(50);
        }

        echo "<p>Conta aberta com sucesso!</p>";
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com dinheiro!</p>";
        } else if ($this->getSaldo() < 0) {
            echo "<p>Conta em débito!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta fechada com sucesso!</p>";
        }
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Deposito realizado com sucesso!</p>";
        } else {
            echo "<p>Impossivel depositar!</p>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus() && $this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Saque realizado com sucesso!</p>";
        } else {
            echo "<p>Impossivel sacar!</p>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CP") {
            $v = 20;
        } else if ($this->getTipo() == "CC") {
            $v = 12;
        } else {
            echo "<p>Impossivel pagar!</p>";
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade paga com sucesso!</p>";
        } else {
            echo "<p>Saldo insuficiente!</p>";
        }
    }

    #GETTERS E SETTERS

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
