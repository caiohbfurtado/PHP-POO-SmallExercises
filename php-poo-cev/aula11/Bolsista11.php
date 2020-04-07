<?php
    require_once "Aluno11.php";

    final class Bolsista11 extends Aluno11 {
        private $bolsa;

        public function renovarBolsa(){
            echo "<p>Bolsa renovada para mais um ano!</p>";
        }

        public function pagarMensalidade()
        {
            echo "<p>Mensalidade Tipo Bolsista paga com {$this->getBolsa()}% de desconto.</p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }

?>