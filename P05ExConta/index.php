<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once "Conta.php";

            $p1 = new Conta();
            $p1->setNumConta(1111);
            $p1->setDono("Jubileu");
            $p1->abrirConta("CC");
            $p1->depositar(300);
            print_r($p1);

            $p2 = new Conta();
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");
            $p2->abrirConta("CP");
            $p2->depositar(500);
            $p2->sacar(100);
            print_r($p2);
            ?>
        </pre>
    </body>
</html>
