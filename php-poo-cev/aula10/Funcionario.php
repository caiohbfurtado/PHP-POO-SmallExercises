<?php
require_once "Pessoa.php";

    class Funcionario extends Pessoa10 {
        private $setor, $trabalhando;

        public function entrarDeFerias(){
            $this->setTrabalhando(false);
        }

        public function voltarDeFerias(){
            $this->setTrabalhando(true);
        }

        public function getSetor(){
            return $this->setor;
        }

        public function setSetor($setor){
            $this->setor = $setor;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }      

        public function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }   
    }
?>