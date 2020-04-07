<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
</head>
<body>
    <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";

            $pessoa[] = new Pessoa("Caio", 26, "M");
            $pessoa[] = new Pessoa("Julia", 22, "F");

            $livro[] = new Livro("Não me faça pensar!", "Steve Krug", 256, $pessoa[0]);
            $livro[] = new Livro("Hoje eu me sinto tão bem", "Nissin Ourfali", 856, $pessoa[1]);
            $livro[] = new Livro("Contando com tudo, não sabe que logo ali", "Aviteiros", 897, $pessoa[0]);

            $livro[2]->detalhes();
            $livro[2]->abrir();
            $livro[2]->folhear(1000);
            echo "<br>";
            $livro[2]->voltarPag();
            $pessoa[0]->fazerAniversario();
            $livro[2]->detalhes();
        ?>
    </pre>
</body>
</html>