<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BiblioteCaieras</title>
</head>
<body>
    <pre>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";

        $pessoa[] = new Pessoa("Caio", 26, "M");
        $pessoa[] = new Pessoa("Nicolly", 26, "F");

        print_r($pessoa);

        $livro[] = new Livro("Grande Sertão Veredas", "Graciliano Ramos", 567, $pessoa[0]);

        print_r($livro);

        $livro[0]->detalhes();
        $livro[0]->folhear(1000);
        $livro[0]->folhear(100);
        $livro[0]->avancarPag();
        $pessoa[0]->fazerAniver();
        $livro[0]->detalhes();
    ?>
    </pre>
</body>
</html>