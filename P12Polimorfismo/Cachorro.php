<?php

require_once 'Mamifero.php';

class Cachorro  extends Mamifero {

    public function enterrarOsso() {
        echo "<p>Enterrando osso</p>";
    }

    public function abanarRabo() {
        echo "<p>Abanando Rabo</p>";
    }
    
    public function reagir(String $frase){
        
    }
    
    public function reagir(int $hora, int $min){
        
    }
    
    public function reagir($dono){
        
    }

    public function reagir($idade, $peso){
        
    }
}
