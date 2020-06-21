<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';

            #$p1 = new Pessoa(); ERRO
            $v1 = new Visitante();
            $v1->setNome("Neudo");
            $v1->setIdade(20);
            $v1->setSexo("M");
            print_r($v1);

            $a1 = new Aluno();
            $a1->setNome("João");
            $a1->setIdade(30);
            $a1->setSexo("M");
            $a1->setMatricula(1111);
            $a1->setCurso("Informatica");
            $a1->pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1->setNome("Maria");
            $b1->setIdade(25);
            $b1->setSexo("F");
            $b1->setMatricula(2222);
            $b1->setCurso("Alimentos");
            $b1->setBolsa(12.5);
            $b1->pagarMensalidade();
            print_r($b1);
            ?>
        </pre>
    </body>
</html>
