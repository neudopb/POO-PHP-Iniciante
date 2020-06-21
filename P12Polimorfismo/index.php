<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            //Polimorfismo de sobreposição: Mesma assinatura, classes diferentes
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';

            $m = new Mamifero(12.8, 2, 4, "Castanho");
            $r = new Reptil(1.75, 1, 4, "Verde");
            $p = new Peixe(0.7, 2, 0, "Azul");
            $a = new Ave(0.4, 3, 2, "Vermelho");
            $ca = new Canguru(15, 5, 4, "Caramelo");
            $ch = new Cachorro(5, 7, 4, "Preto");
            $co = new Cobra(1.5, 3, 0, "cinza");
            $ta = new Tartaruga(3, 50, 4, "Cinza");
            $go = new Goldfish(0.3, 1, 0, "Laranja");
            $ar = new Arara(0.5, 3, 2, "Amarelo");

            //Sobreposição
            $m->alimentar();
            $m->emitirSom();
            $m->locomover();
            print_r($m);

            $r->alimentar();
            $r->emitirSom();
            $r->locomover();
            print_r($r);

            $p->alimentar();
            $p->emitirSom();
            $p->locomover();
            $p->soltarBolha();
            print_r($p);

            $a->alimentar();
            $a->emitirSom();
            $a->locomover();
            $a->fazerNinho();
            print_r($a);

            $ca->alimentar();
            $ca->locomover();
            $ca->emitirSom();
            $ca->usarBolsa();
            print_r($ca);

            $co->alimentar();
            $co->locomover();
            $co->emitirSom();
            print_r($co);

            $ta->alimentar();
            $ta->locomover();
            $ta->emitirSom();
            print_r($ta);

            $go->alimentar();
            $go->locomover();
            $go->emitirSom();
            print_r($go);

            $ar->alimentar();
            $ar->locomover();
            $ar->emitirSom();
            print_r($ar);
            
            $ch->alimentar();
            $ch->locomover();
            $ch->emitirSom();
            $ch->enterrarOsso();
            $ch->abanarRabo();
            print_r($ch);
            
            //Sobrecarga
            ?>
        </pre>
    </body>
</html>
