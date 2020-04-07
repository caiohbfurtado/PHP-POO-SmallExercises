<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 04 POO em PHP</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";

        $c1 = new Caneta("BIC", "Azul", 1.6); //instanciando com o uso de parâmetros, o que torna o processo bem mais ágil

        print_r($c1);
        
        if ($c1->getTampa()==1) {
            $tampa = "tampada";
        }
        else {
            $tampa = "destampada";
        }

        echo "<br>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} e {$c1->getCor()} que está $tampa.";
    ?>
    </pre>
</body>
</html>