<?php
    require_once "Publicacao.php";
    require_once "Pessoa.php";

    class Livro implements Publicacao{
        private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setAberto(false);
            $this->setPagAtual(0);
            $this->setLeitor($leitor);
        }
        public function abrir()
        {
            if ($this->getAberto()) {
                echo "<p>O livro já encontra-se aberto!</p>";
            }
            else{
                $this->setAberto(true);
            }
        }

        public function fechar()
        {
            if ($this->getAberto()) {
                $this->setAberto(false);    
            }
            else{
                echo "<p>O livro já encontra-se fechado!</p>";
            }
        }

        public function folhear($paginas)
        {
            if ($paginas > $this->getTotPaginas()) {
                echo "<p>É impossível folhear $paginas neste exemplar!</p>";
                $this->setPagAtual(0);
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
                echo "<p>O livro já está na última página.</p>";
            }
        }

        public function voltarPag()
        {
            if ($this->getPagAtual() <= 1) {
                echo "<p>O livro está no Início.</p>";
            }
            else {
                $this->setPagAtual($this->getPagAtual() - 1);
            }
        }

        public function detalhes(){
            echo "<br>Título do livro: {$this->getTitulo()}<br>Nome do Autor: {$this->getAutor()}<br>Número de Páginas: {$this->getTotPaginas()}<br>Página atual: {$this->getPagAtual()}<br>".($this->getAberto() ? "Livro aberto " : "Livro Fechado"). "<br>Leitor: {$this->getLeitor()->getNome()}<br>Sexo: ".($this->getLeitor()->getSexo() == "M" ? "Masculino" : "Feminino")."<br>Idade: {$this->getLeitor()->getIdade()} anos";
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getTotPaginas(){
            return $this->totPaginas;
        }

        public function setTotPaginas($paginas){
            $this->totPaginas = $paginas;
        }

        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function setPagAtual($paginaAtual){
            $this->pagAtual = $paginaAtual;
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