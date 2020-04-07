<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escola Caieras</title>
</head>
<body>
    <pre>
        <?php
            require_once "Professor.php";
            require_once "Pessoa.php";
            require_once "Funcionario.php";
            require_once "Aluno.php";

            $p1 = new Pessoa10();
            $p2 = new Funcionario();
            $p3 = new Professor();
            $p4 = new Aluno();

            $p1->setNome("Caio");
            $p2->setNome("Tulipa");
            $p3->setNome("Rafaella");
            $p4->setNome("Manoela");

            $p2->setSetor("Almoxarifado");
            $p2->setTrabalhando(true);

            $p3->setEspecial("Ciências Exatas");
            $p3->setSalario(5645);
            $p3->receberAumento(254);

            $p4->setCurso("Análise e Desenvolvimento de Sistemas");
            $p4->setMatricula(true);

            echo "<hr>";
            print_r($p1);
            echo "<hr>";
            print_r($p2);
            echo "<hr>";
            print_r($p3);
            echo "<hr>";
            print_r($p4);

        ?>
    </pre>
</body>
</html>