<?php
    require_once "Animal.php";

    class Mamifero extends Animal {
        private $corPelo;

        public function locomover()
        {
            echo "<p>Mamífero correndo...</p>";
        }

        public function alimentar()
        {
            echo "<p>Mamífero se alimentando de animais menores e vegetais...</p>";
        }

        public function emitirSom()
        {
            echo "<p>Som de mamífero...</p>";
        }
        
        public function getCorPelo(){
            return $this->corPelo;
        }

        public function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }
    }
?>