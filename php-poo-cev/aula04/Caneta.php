<?php
    class Caneta {
        public $modelo;
        private $ponta;
        private $tampada;
        private $cor;
        
        public function __construct($m, $c, $p){ //método construtor do php, mas pode ser com o nome da classe também, por exemplo: public function Caneta()
            $this->cor = $c;
            $this->ponta = $p;
            $this->modelo = $m;
            $this->tampada = true;
        }

        public function getModelo(){
            return $this->modelo;
        }
        
        public function getPonta(){
            return $this->ponta;
        }

        public function getTampa(){
            return $this->tampada;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        
        public function setCor($cor){
            $this->cor = $cor;
        }
        
        public function setPonta($ponta){
            $this->ponta = $ponta;
        }

        private function tampar(){
            $this->tampada = true;
        }

        private function destampar(){
            $this->tampada = false;
        }

    }
?>