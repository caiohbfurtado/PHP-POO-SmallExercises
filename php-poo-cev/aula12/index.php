<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoológico Caieras</title>
</head>
<body>
    <pre>
        <?php
            require_once "Mamifero.php";
            require_once "Ave.php";
            require_once "Peixe.php";
            require_once "Reptil.php";
            require_once "Canguru.php";
            require_once "Cachorro.php";

            $r[] = new Reptil();
            $r[0]->setPeso(25.6);
            $r[0]->setIdade(53);
            $r[0]->setMembros(4);
            $r[0]->setCorEscama("Verde");
            $r[0]->locomover();
            $r[0]->alimentar();
            $r[0]->emitirSom();

            echo "<hr>";
            print_r($r[0]);

            $m[] = new Mamifero();
            $m[0]->setPeso(98.6);
            $m[0]->setIdade(12);
            $m[0]->setMembros(4);
            $m[0]->setCorPelo("Preto");
            $m[0]->locomover();
            $m[0]->alimentar();
            $m[0]->emitirSom();

            $c[] = new Cachorro();
            $c[0]->setPeso(37.6);
            $c[0]->setIdade(5);
            $c[0]->setMembros(4);
            $c[0]->setCorPelo("Marrom");
            $c[0]->locomover();
            $c[0]->alimentar();
            $c[0]->emitirSom();
            $c[0]->reagirIdadePeso(4, 28.6);
        ?>
    </pre>
</body>
</html>