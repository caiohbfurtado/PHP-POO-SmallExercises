<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UEC - UltraEmojiCombat</title>
</head>
<body>
<pre>
    <?php
    require_once "Lutador.php";
    require_once "Luta.php";

        $l = array();
        $l[] = new Lutador("Preety Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $l[] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $l[] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $l[] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $l[] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $l[] = new Lutador("Nerdaard", "Holanda", 30, 1.81, 105.7, 12, 2, 4);
        
        //print_r($l); imprime os dados do vetor.
        
        /*
        for ($i=0; $i <= 6; $i++) { 
            $l[$i]->apresentar();
            echo "<br>";
        }
        
        print_r($l1);
        print_r($l2);
        print_r($l3);
        print_r($l4);
        print_r($l5);
        print_r($l6);
        
        for ($i=1; $i <= 6 ; $i++) { 
            print_r("$l$i");
        }
        */

        $uec01 = new Luta;
        $uec01->marcarLuta($l[3], $l[2]);
        $uec01->lutar();
        
        $l[3]->status();
        echo "<br>";
        $l[2]->status();

    ?>
    </pre>
</body>
</html>