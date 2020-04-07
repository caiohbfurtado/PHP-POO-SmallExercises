<?php
    require_once "Animal.php";

    class Ave extends Animal {
        private $corPena;

        public function locomover()
        {
            echo "<p>Ave voando...</p>";
        }

        public function alimentar()
        {
            echo "<p>Ave se alimentando de animais menores e grãos...</p>";
        }

        public function emitirSom()
        {
            echo "<p>PIU...PIU...PIU...</p>";
        }

        public function fazerNinho(){
            echo "<p>A ave acabou de fazer um ninho!</p>";
        }

        public function getCorPena(){
            return $this->corPena;
        }

        public function setCorPena($corPena){
            $this->corPena = $corPena;
        }
    }
?>