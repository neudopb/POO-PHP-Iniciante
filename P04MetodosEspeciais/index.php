<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once "Caneta.php";
            
            $c1 = new Caneta("BIC Cristal", "Azul", 0.5);
            print_r($c1);
            
            $c1->setModelo("BIC");
            $c1->setPonta(0.7);
            echo "<p>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}</p>";
        ?>
    </body>
</html>
