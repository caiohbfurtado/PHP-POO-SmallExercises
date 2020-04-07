<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco Caieras</title>
</head>
<body>
    <pre>
    <?php
        require_once "ContaBanco.php";

        $p1 = new ContaBanco(); //Jubileu
        $p2 = new ContaBanco (); //Creuza

        $p1->abrirConta("cc"); // abrindo a conta, passando como parâmetro o tipo da conta que deseja-se criar
        $p1->setDono("Jubileu"); //setando o campo dono do objeto p1 com o nome Jubileu
        $p1->setNumConta("0001"); // setando o numero da conta
        

        $p2->abrirConta("cp");
        $p2->setDono("Creuza");
        $p2->setNumConta("0002");

        print_r($p1);
        print_r($p2);

        $p1->depositar(300);
        $p2->depositar(500);

        print_r($p1);
        print_r($p2);

        $p2->sacar(100);

        print_r($p1);
        print_r($p2);

        $p1->pagarMensal();
        $p2->pagarMensal();

        print_r($p1);
        print_r($p2);

        $p1->sacar(670);
        $p1->fecharConta();
        $p1->sacar(338);
        $p1->fecharConta();

        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>