<?php
    abstract class PessoaFinal{
        protected $nome, $idade, $sexo, $experiencia; 

        public function __construct($nome, $idade, $sexo)
        {
            $this->setIdade($idade);
            $this->setNome($nome);
            $this->setSexo($sexo);
            $this->setExperiencia(0);
        }
        protected function ganharExp($pontos){
            $this->setExperiencia($this->getExperiencia() + $pontos);
            echo "<p>Você ganhou $pontos pontos de experiência! Parabéns!</p>";
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function getExperiencia(){
            return $this->experiencia;
        }

        public function setExperiencia($experiencia){
            $this->experiencia = $experiencia;
        }
    }
?>