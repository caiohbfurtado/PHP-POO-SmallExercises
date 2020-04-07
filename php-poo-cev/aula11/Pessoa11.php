<?php
    //classe abstrata, que vai servid de base para subclasses e que não pode ser instanciada
    abstract class Pessoa11 {
        protected $nome, $idade, $sexo; //a classe pessoa e qualquer subclasse dela vai poder acessar diretamente os atributos

        //método que não pode ser alterado
        public final function fazerAniversario() {
            $this->setIdade($this->getIdade() + 1);
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
    }
?>