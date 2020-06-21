<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Polimorfismo de sobrecarga: Assinaturas diferentes, mesma classe
        //PHP não suporta sobrecarga
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m = new Mamifero();
        $l = new Lobo();
        $c = new Cachorro();

        $m->emitirSom();
        $l->emitirSom();
        $c->emitirSom();

        $c->reagirFrase("ola");
        $c->reagirFrase("vai apanhar");
        $c->reagirHora(9, 15);
        $c->reagirHora(15, 50);
        $c->reagirHora(20, 0);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(3, 5.8);
        $c->reagirIdadePeso(4, 15.1);
        $c->reagirIdadePeso(7, 8.4);
        $c->reagirIdadePeso(8, 12.8);
        ?>
    </body>
</html>
