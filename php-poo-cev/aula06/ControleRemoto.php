<?php
require_once "Controlador.php"; // para ligar a interface à classe
    class ControleRemoto implements Controlador{
        private $volume, $ligado, $tocando;

        public function __construct()
        {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        public function ligar()
        {
            if ($this->getLigado()) {
                echo "<p>O aparelho já está ligado</p>";
            }
            else {
                $this->setLigado(true);
            }
        }

        public function desligar()
        {
            if ($this->getLigado()) {
                $this->setLigado(false);
            }
            else{
                echo "<p>O aparelho já está desligado</p>";
            }
        }

        public function abrirMenu()
        {
            
            if ($this->getLigado()) {
                $statusliga = "Ligado";
            }
            else {
                $statusliga = "Desligado";
            }

            if ($this->getTocando()) {
                $statustocando = "Tocando";
            }
            else {
                $statustocando = "Não está tocando";
            }
            echo "<p>Está ligado? $statusliga<br>Volume: {$this->getVolume()}<br>Está tocando? $statustocando</p>";
        }

        public function fecharMenu()
        {
            echo "<p>Fechando Menu...</p>";
        }

        public function maisVolume()
        {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 1);
            }
            else {
                echo "<p>O aparelho encontra-se desligado...</p>";
            }
            
        }

        public function menosVolume()
        {
            if ($this->getLigado()) {
                if ($this->getVolume() > 0) {
                    $this->setVolume($this->getVolume() - 1);
                }
                else {
                    echo "<p>Volume mínimo alcançado</p>";
                }    
            }
            else {
                echo "<p>O aparelho encontra-se desligado...</p>";
            }
            
        }

        public function ligarMudo()
        {
            if ($this->getLigado()) {
                if ($this->getVolume() > 0) {
                    $this->setVolume(0);
                }
                else {
                    echo "<p>O volume já está em zero</p>";
                }    
            }
            else {
                echo "<p>O aparelho encontra-se desligado....</p>";
            }
            
        }

        public function desligarMudo()
        {
            if ($this->getLigado()) {
                if ($this->getVolume() == 0) {
                    $this->setVolume(50);
                }
                else {
                    echo "<p>O volume não está desligado</p>";
                }    
            }
            else {
                echo "<p>O aparelho encontra-se desligado...</p>";
            }
        }

        public function play()
        {
            if ($this->getLigado()) {
                if (!$this->getTocando()) {
                    $this->setTocando(true);
                }
                else {
                    "<p>O aparelho já está tocando!</p>";
                }
            }
            else {
                echo "<p>O aparelho encontra-se desligado....</p>";
            }
        }

        public function pause()
        {
            if ($this->getLigado()) {
                if ($this->getTocando()) {
                    $this->setTocando(false);
                }
                else {
                    echo "<p>O aparelho não está tocando!</p>";
                }
            }
            else {
                echo "<p>O aparelho encontra-se desligado...</p>";
            }
        }

        private function getVolume(){
            return $this->volume;
        }

        private function setVolume($volume){
            $this->volume = $volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        private function setTocando($tocando){
            $this->tocando = $tocando;
        }
    }
?>