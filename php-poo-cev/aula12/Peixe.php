<?php
    require_once "Animal.php";

    class Peixe extends Animal{
        private $corEscama;

        public function locomover()
        {
            echo "<p>Peixe nadando...</p>";
        }

        public function alimentar()
        {
            echo "<p>Peixe se alimentando de peixes menores e algas...</p>";
        }

        public function emitirSom()
        {
            echo "<p>Peixes não fazem som :(</p>";
        }

        public function soltarBolhas(){
            echo "<p>GLUB...GLUB...GLUB</p>";
        }

        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }
?>