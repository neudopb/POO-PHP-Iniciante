<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "Caneta.php";

        $c1 = new Caneta();
        $c1->modelo = "bic";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->carga = 100;
        $c1->destampar();

        var_dump($c1);
        $c1->rabiscar();
        
        $c2 = new Caneta();
        $c2->modelo = "bic";
        $c2->cor = "Preta";
        $c2->ponta = 0.7;
        $c2->carga = 90;
        $c2->tampar();
        
        print_r($c2);
        $c2->rabiscar();
        ?>
    </body>
</html>
