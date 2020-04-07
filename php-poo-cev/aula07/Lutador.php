<?php
require_once "InterLutador.php";
    class Lutador implements InterfaceLutador {
        public $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas,         $empates;
     
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setCategoria($this->calcularCategoria($peso));
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        public function calcularCategoria($peso) {
            if ($peso < 52.2) {
                $categoria = "Inválido Para Combate";
            }
            elseif ($peso <= 70.3) {
                $categoria = "Leve";
            }
            elseif ($peso <= 83.9) {
                $categoria = "Médio";
            }
            elseif ($peso <= 120.2) {
                $categoria = "Pesado";
            }
            else{
                $categoria = "Inválido Para Combate";
            }

            return $categoria;
        }

        public function apresentar()
        {
            echo "<br>Nome do Lutador: {$this->getNome()}<br>Nacionalidade: {$this->getNacionalidade()}<br>Idade: {$this->getIdade()} anos<br>Altura: ". number_format($this->getAltura(), 2, ",", ".") . " m<br>Peso: ". number_format($this->getPeso(), 2, ",", ".") . " Kg<br>Categoria: Peso {$this->categoria}<br>Número de Vitórias: {$this->getVitorias()}<br>Número de Derrotas: {$this->getDerrotas()}<br>Número de Empates: {$this->getEmpates()}";
        }

        public function status()
        {
            echo "<br>{$this->getNome()} é um peso {$this->getCategoria()} que tem {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates no currículo!";
        }

        public function ganharLuta()
        {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta()
        {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta()
        {
            $this->setEmpates($this->getEmpates() + 1);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        
        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function getVitorias(){
            return $this->vitorias;
        }

        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }

        public function getDerrotas(){
            return $this->derrotas;
        }

        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }

        public function getEmpates(){
            return $this->empates;
        }

        public function setEmpates($empates){
            $this->empates = $empates;
        }
    }
?>