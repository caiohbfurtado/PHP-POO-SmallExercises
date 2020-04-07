<?php
    class Pessoa {
        private $nome, $idade, $sexo;

        public function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setsexo($sexo);
        }

        public function fazerAniversario(){
            $this->setIdade($this->getIdade() + 1);
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
    }
?>