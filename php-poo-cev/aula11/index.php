<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escola Hernaça</title>
</head>
<body>
    <pre>
        <?php
            require_once "Visitante11.php";
            require_once "Professor11.php";
            require_once "Aluno11.php";
            require_once "Bolsista11.php";
            require_once "Tecnico11.php";

            $v[] = new Visitante11();
            $v[0]->setNome("Juvêncio");
            $v[0]->setIdade(54);
            $v[0]->setSexo("M");
            
            echo "<hr>";
            print_r($v[0]);

            $a[] = new Aluno11();
            $a[0]->setNome("Flávio");
            $a[0]->setIdade(15);
            $a[0]->setSexo("M");
            $a[0]->setMatricula("0001");
            $a[0]->setCurso("Música Básica");
            
            $a[0]->pagarMensalidade();
            echo "<hr>";
            print_r($a[0]);

            $p[] = new Professor11();
            $p[0]->setNome("Márcia");
            $p[0]->setIdade(37);
            $p[0]->setSexo("F");
            $p[0]->setSalario(3684.69);
            $p[0]->setEspecialidade("Teoria Musical I");

            echo "<hr>";
            print_r($p[0]);
            $p[0]->receberAumento(225.31);
            $p[0]->fazerAniversario();
            echo "<hr>";
            print_r($p[0]);

            $b[] = new Bolsista11();
            $b[0]->setNome("Joana");
            $b[0]->setIdade(21);
            $b[0]->setSexo("F");
            $b[0]->setBolsa(30);
            $b[0]->setCurso("Trombone");
            $b[0]->setMatricula("0003");
            $b[0]->pagarMensalidade();
            $b[0]->renovarBolsa();
            echo "<hr>";
            print_r($b[0]);
        ?>
    </pre>
</body>
</html>