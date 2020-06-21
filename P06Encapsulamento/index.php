<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once "ControleRemoto.php";

            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->play();
            $c->abrirMenu();
            $c->fecharMenu();
            ?>
        </pre>
    </body>
</html>
