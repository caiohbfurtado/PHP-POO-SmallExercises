<?php
    require_once "Video.php";
    require_once "Gafanhoto.php";

    class Visualizacao { //classe agregadora de vídeo e gafanhoto
        private $espectador, $filme;
        
        public function __construct($espectador, $filme)
        {
            $this->setEspectador($espectador);
            $this->setFilme($filme);
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }

        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorcentagem($porcentagem){
            if ($porcentagem <= 20) {
                $this->filme->setAvaliacao(3);    
            }
            elseif ($porcentagem <= 50) {
                $this->filme->setAvaliacao(5);
            }
            elseif ($porcentagem <= 90) {
                $this->filme->setAvaliacao(8);
            }
            else {
                $this->filme->setAvaliacao(10);
            }
        }

        public function getEspectador(){
            return $this->espectador;
        }
        
        public function setEspectador($espectador){
            $this->espectador = $espectador;
        }

        public function getFilme(){
            return $this->filme;
        }

        public function setFilme($filme){
            $this->filme = $filme;
        }
    }

?>