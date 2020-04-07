<?php
    require_once "Pessoa11.php";

    class Aluno11 extends Pessoa11 {
        private $matricula, $curso;

        public function pagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno {$this->getNome()}...</p>";
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }
    }
?>