<?php
require_once "Publicacao.php";
require_once "Pessoa.php";

    class Livro implements Publicacao{
        private $titulo, $autor, $totPaginas, $pagAtual, $leitor, $aberto;

        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setLeitor($leitor);
            $this->setAberto(false);
            $this->setPagAtual(1);       
        }

        public function detalhes(){
            echo "<hr>Título do livro: {$this->getTitulo()}<br>Autor: {$this->getAutor()}<br>Total de páginas: {$this->getTotPaginas()}<br>O volume está aberto? ". ($this->getAberto() ? "SIM" : "NÃO") ."<br>Página Atual: {$this->getPagAtual()}<br>Leitor: {$this->getLeitor()->getNome()}<br>Idade: {$this->getLeitor()->getIdade()} anos<br>Sexo: " . ($this->getLeitor()->getSexo() == "M" ? "Masculino" : "Feminino");
        }

        public function abrir()
        {
            if ($this->getAberto()) {
                echo "<p>O livro já encontra-se aberto.</p>";
            }
            else {
                $this->setAberto(true);
            }
        }

        public function fechar()
        {
            if ($this->getAberto()) {
                $this->setAberto(false);
            }
            else {
                echo "<p>O livro já encontra-se fechado.</p>";
            }
        }

        public function folhear($paginas)
        {
            if ($paginas > $this->getTotPaginas()) {
                echo "<p>É impossível folhear esse número de páginas. O livro foi totalmente folheado e voltou à página 1.</p>";

                $this->setPagAtual(1);

            }
            else {
                $this->setPagAtual($paginas);
            }
        }

        public function avancarPag()
        {
            if ($this->getPagAtual() < $this->getTotPaginas()) {
                $this->setPagAtual($this->getPagAtual() + 1);
            }
            else {
                echo "<p>O livro está na última página!</p>";
            }
        }

        public function voltarPag()
        {
            if ($this->getPagAtual() > 0) {
                $this->setPagAtual($this->getPagAtual() - 1);
            }
            else {
                echo "<p>O livro está na primeira página!</p>";
                $this->setPagAtual(0);
            }
        }

        public function getTitulo(){
            return $this->titulo;   
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;   
        }

        public function getAutor(){
            return $this->autor;   
        }

        public function setAutor($autor){
            $this->autor = $autor;   
        }

        public function getTotPaginas(){
            return $this->totPaginas;   
        }
        
        public function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;   
        }

        public function getPagAtual(){
            return $this->pagAtual;   
        }

        public function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;   
        }

        public function getAberto(){
            return $this->aberto;   
        }

        public function setAberto($aberto){
            $this->aberto = $aberto;   
        }

        public function getLeitor(){
            return $this->leitor;   
        }

        public function setLeitor($leitor){
            $this->leitor = $leitor;   
        }
    }
?>