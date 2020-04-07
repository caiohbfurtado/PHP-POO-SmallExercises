<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 POO</title>
</head>
<body>
    <?php
        require_once "Caneta.php";

        $c1 = new Caneta; 
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;

        print_r($c1);

        $c1->destampar();
        //$c1->rabiscar();
        
        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->ponta = 0.7;
        $c2->tampar();

        echo "<br>";
        print_r($c2);
        //print_r($c1);
        //echo "<br>";
        //var_dump($c1);
    ?>
</body>
</html>