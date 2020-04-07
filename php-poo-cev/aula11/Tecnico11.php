<?php
    require_once "Aluno11.php";

    final class Tecnico11 extends Aluno11 {
        private $registroProfissional;

        public function praticar(){

        }

        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }

        public function setRegistroProfissional($registroProfissional){
            $this->registroProfissional = $registroProfissional;
        }
    }
?>