<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Pessoa("Neudo", 20, "M");
            $p2 = new Aluno("Maria", 25, "F", 111, "Informatica");
            $p3 = new Professor("Jose", 35, "M", "Redes", 3500);
            $p4 = new Funcionario("Joana", 30, "F", "Limpeza");

            $p1->fazerAniv();
            $p3->receberAum(300);
            $p4->mudarTrabalho();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            ?>
        </pre>
    </body>
</html>
