<?php

require_once 'Lobo.php';

class Cachorro extends Lobo {

    public function emitirSom() {
        echo "<p>Au Au Au</p>";
    }

    public function reagirFrase(String $frase) {
        if ($frase == "comida" || $frase == "ola") {
            echo "<p>Abanar e latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }

    public function reagirHora(int $hora, int $min) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } else if ($hora > 18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e latir</p>";
        }
    }

    public function reagirDono($dono) {
        if ($dono) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e latir</p>";
        }
    }

    public function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }

}
