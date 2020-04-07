<?php
    require_once "Pessoa11.php";

    final class Professor11 extends Pessoa11{
        private $especialidade, $salario;

        public function receberAumento($valor){
            $this->setSalario($this->getSalario() + $valor);
        }

        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade){
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