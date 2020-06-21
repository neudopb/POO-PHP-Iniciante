<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once "Caneta.php";

            $c1 = new Caneta();
            $c1->modelo = "BIC";
            $c1->cor = "PRETO";
            $c1->destampar();
            $c1->rabiscar();

            var_dump($c1);
            ?>
        </pre>
    </body>
</html>
