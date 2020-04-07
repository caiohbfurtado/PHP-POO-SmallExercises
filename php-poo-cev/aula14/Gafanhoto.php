<?php
    require_once "PessoaFinal.php";

    class Gafanhoto extends PessoaFinal{
        private $login, $totAssistido;

        public function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo); //para chamar o construtor da superclasse que já existe no arquivo PessoaFinal.php
            $this->setLogin($login);
            $this->setTotAssistido(0);
        }
        public function viuMaisUm(){
            $this->setTotAssistido($this->getTotAssistido() + 1);
        }

        public function getLogin(){
            return $this->login;
        }

        public function setLogin($login){
            $this->login = $login;
        }

        public function getTotAssistido(){
            return $this->totAssistido;
        }

        public function setTotAssistido($totAssistido){
            $this->totAssistido = $totAssistido;
        }
    }
?>