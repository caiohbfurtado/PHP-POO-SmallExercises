<?php
    require_once "Animal.php";

    class Reptil extends Animal{
        private $corEscama;

        public function locomover()
        {
            echo "<p>Réptil rastejando...</p>";
        }

        public function alimentar()
        {
            echo "<p>Réptil se alimentando de animais menores e vegetais...</p>";
        }

        public function emitirSom()
        {
            echo "<p>Som de réptil...</p>";
        }

        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }
?>