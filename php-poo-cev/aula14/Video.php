<?php
    require_once "AcoesVideo.php";

    class Video implements AcoesVideo{
        private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

        public function __construct($titulo)
        {
            $this->setTitulo($titulo);
            $this->setAvaliacao(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        public function play()
        {
            if ($this->getReproduzindo()) {
                echo "<p>Vídeo já está sendo reproduzido...</p>";    
            }
            else {
                echo "<p>Vídeo rolando....</p>";
                $this->setReproduzindo(true);
            }

        }

        public function pause()
        {
            if ($this->getReproduzindo()) {
                $this->setReproduzindo(false);
                echo "<p>Vídeo Pausado...</p>";
            }
            else{
                echo "<p>O vídeo já encontra-se pausado</p>";
            }
        }

        public function like()
        {
            $this->setCurtidas($this->getCurtidas() + 1);
            echo "<p>Muito obrigado pelo seu Like! :D</p>";
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getViews(){
            return $this->views;
        }

        public function setViews($views){
            $this->views = $views;
        }

        public function getAvaliacao(){
            return $this->avaliacao;
        }

        public function setAvaliacao($avaliacao){
            $mediaAvaliacao = ($this->getAvaliacao() + $avaliacao)/$this->getViews();
            $this->avaliacao = $mediaAvaliacao;
        }

        public function getCurtidas(){
            return $this->curtidas;
        }

        public function setCurtidas($curtidas){
            $this->curtidas = $curtidas;
        }

        public function getReproduzindo(){
            return $this->reproduzindo;
        }

        public function setReproduzindo($reproduzindo){
            $this->reproduzindo = $reproduzindo;
        }
    }
?>