<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 10 de PHP");
            $v[2] = new Video("Aula 20 de POO e PHP");

            echo "<p>";
            foreach ($v as $n) {
                print_r($n);
            }

            $g[0] = new Gafanhoto("Neudo", 20, "M", "neudo11");
            $g[1] = new Gafanhoto("Maria", 25, "F", "maria25");

            echo "</p><p>";
            foreach ($g as $n) {
                print_r($n);
            }

            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[0]->avaliar();
            $vis[1] = new Visualizacao($g[0], $v[1]);
            $vis[1]->avaliarNota(8);
            $vis[2] = new Visualizacao($g[1], $v[2]);
            $vis[2]->avaliarPorc(78.2);

            foreach ($vis as $n) {
                print_r($vis);
            }
            echo "</p>";
            ?>
        </pre>
    </body>
</html>
