<?php
    class ContaBanco {
        //ATRIBUTOR
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //MÉTODO CONSTRUTOR
        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>"; //somente para visualizar se o método construtor está funcionando
        }

        //MÉTODOS PRINCIPAIS
        public function abrirConta($tipo){
            $this->setTipo($tipo);
            $this->setStatus(true);
            
            if ($tipo == "cp") {
                $this->setSaldo(150);
            }
            elseif ($tipo == "cc") {
                $this->setSaldo(50);
            }
        }

        public function fecharConta(){
            if ($this->getStatus() == false) {
                echo "<p>A conta de {$this->getDono()} já encontra-se encerrada.</p>";
            }
            else{
                if ($this->getSaldo() > 0) {
                    echo "<p>Não é possível fechar a conta, pois o saldo ainda é positivo.</p>";
                }
                elseif ($this->getSaldo() < 0){
                    echo "<p>Não é possível fechar a conta, pois a mesma está em débito</p>";
                }
                else{
                    $this->setStatus(false);
                    echo "<p>A conta de {$this->getDono()} foi encerrada com sucesso.</p>";
                }
            }
        }

        public function depositar($valor){
            if ($this->getStatus() == true && $valor > 0) {
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>{$this->getDono()} depositou R$ " . number_format($valor, 2, ",", ".")."</p>";
            }
            elseif ($valor <= 0){
                echo "<p>Não é possível depositar o valor informado. Tente novamente.</p>";
            }
            else {
                echo "<p>Conta inativa. Altere seu status.</p>";
            }
            
        }

        public function sacar($valor){
            if ($this->getStatus() == true && $this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>{$this->getDono()} sacou R$ ". number_format($valor, 2, ",", ".")."</p>";
            }
            elseif ($this->getStatus() == false){
                echo "<p>Conta inativa. Impossível efetuar o saque.</p>";
            }
            else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        }

        public function pagarMensal(){
            if ($this->getStatus() == true && $this->getTipo() == "cp") {
                if ($this->getSaldo() >= 20) {
                    $this->setSaldo($this->getSaldo() - 20);
                    echo "<p>Pagamento de mensalidade no valor de R$ 20,00 efetuado com sucesso na conta de {$this->getDono()}</p>";
                }
                else {
                    $this->setStatus(false);
                    echo "<p>Por falta de saldo, sua conta ficará inativa até o pagamento da mensalidade.</p>";
                }
            }
            elseif ($this->getStatus() == true && $this->getTipo() == "cc"){
                if ($this->getSaldo() >= 12) {
                    $this->setSaldo($this->getSaldo() - 12);
                    echo "<p>Pagamento de mensalidade no valor de R$ 12,00 efetuado com sucesso na conta de {$this->getDono()}.</p>";
                }
                else {
                    $this->setStatus(false);
                    echo "<p>Por falta de saldo, sua conta ficará inativa até o pagamento da mensalidade.</p>";
                }
            }
            else {
                echo "<p>A conta encontra-se inativa. Antes de efetuar qualquer operação, ative-a.";
            }
        }

        // MÉTODOS ACESSORES
        public function getNumConta() {
            return $this->numConta;
        }

        public function setNumConta($conta){
            $this->numConta = $conta; 
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($dono){
            $this->dono = $dono;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($valor){
            $this->saldo = $valor;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($status){
            $this->status = $status;
        }
    }
?>