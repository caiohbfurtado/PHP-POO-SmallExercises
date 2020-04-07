<?php
    require_once "Mamifero.php";

    class Canguru extends Mamifero {
        
        public function locomover()
        {
            echo "<p>Cangurus saltam!</p>";
        }

        public function usarBolsa(){
            echo "<p>Ounnnnnn!! A mamãe Canguru está carregando umn filhotinho em sua bolsa!</p>";
        }
    }
?>