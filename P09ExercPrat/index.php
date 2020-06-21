<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Livro.php';
        require_once 'Pessoa.php';

        $p[0] = new Pessoa("Neudo", 20, "M");
        $p[1] = new Pessoa("Maria", 25, "F");

        $l[0] = new Livro("PHP basico", "Jose S.", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "MARIA S.", 500, $p[1]);
        $l[2] = new Livro("PHP avançado", "Ana Paula", 800, $p[0]);

        $l[0]->abrir();
        $l[0]->folhear(176);

        foreach ($l as $v) {
            $v->detalhes();
        }
        ?>
    </body>
</html>
