<?php
require_once "Pessoa.php";

    class Aluno extends Pessoa10 {
        private $matricula, $curso;

        public function cancelarMatr(){
            $this->setMatricula(false);
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