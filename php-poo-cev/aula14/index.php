<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CaierasTube</title>
</head>
<body>
    <pre>
    <?php
        require_once "Video.php";
        require_once "Gafanhoto.php";
        require_once "Visualizacao.php";

        $video[] = new Video("Aula Introdutória de Teoria Musical");
        $video[] = new Video("Violão Clássico - Acordes");
        $video[] = new Video("Rítmica II");
        
        $aluno[] = new Gafanhoto("Caio Furtado", 26, "M", "caieras");
        $aluno[] = new Gafanhoto("Rosângela", 52, "F", "rosamadalena");
        
        /*for ($i=0; $i < count($aluno); $i++) { 
            echo "<hr>";
            print_r($aluno[$i]);
        }*/

        $visualizacao[] = new Visualizacao($aluno[0], $video[2]);
        $visualizacao[] = new Visualizacao($aluno[0], $video[1]);
        
        //$visualizacao[0]->avaliarNota(9);
        //$visualizacao[1]->avaliarPorcentagem(85);

        /*
        for ($i=0; $i < count($visualizacao); $i++) { 
            echo "<hr>";
            print_r($visualizacao[$i]);
        }

        for ($i=0; $i < count($video); $i++) { 
            echo "<hr>";
            print_r($video[$i]);
        }*/


    ?>
    </pre>
</body>
</html>