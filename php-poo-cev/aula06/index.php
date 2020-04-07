<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Controle Remoto</title>
</head>
<body>
    <pre>
    <?php
        require_once "ControleRemoto.php";

        $c1 = new ControleRemoto();

        print_r($c1);

        $c1->ligar();
        $c1->abrirMenu();
        $c1->play();
        //$c1->setVolume(10); não consigo acessar os métodos acessores da classe ControleRemoto pois elas estão privadas. Só consigo acessar os métodos da interface Controlador. Isso é encapsular :)
        print_r($c1);

        for ($i=0; $i < 20 ; $i++) { 
            $c1->maisVolume();
        }
        
        echo "<br>";

        $c1->abrirMenu();
        $c1->ligar();
        $c1->desligar();
        $c1->play();
        $c1->menosVolume();
        $c1->desligar();
        $c1->ligar();
    ?>
    </pre>
</body>
</html>