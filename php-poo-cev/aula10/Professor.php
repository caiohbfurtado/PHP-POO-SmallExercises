<?php
require_once "Pessoa.php";

    class Professor extends Pessoa10 {
        private $especialidade, $salario;

        public function receberAumento($valor){
            $this->setSalario($this->getSalario() + $valor);
        }

        public function getEspecial(){
            return $this->especialidade;
        }

        public function setEspecial($especialidade){
            $this->especialidade = $especialidade;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }
    }
?>