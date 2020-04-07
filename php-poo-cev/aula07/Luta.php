<?php
require_once "InterLuta.php";
require_once "Lutador.php";
    class Luta implements InterfaceLutar{
        private $desafiado, $desafiante, $rounds, $aprovada;

        public function marcarLuta($l1, $l2)
        {
            if (($l1->getCategoria() == $l2->getCategoria()) && $l1 != $l2) {
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }
            else {
                $this->setAprovada(false);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }
        }

        public function lutar()
        {
            if ($this->getAprovada()) {
                echo "<br>";
                $this->getDesafiado()->apresentar();
                echo "<br>";
                $this->getDesafiante()->apresentar();

                $pontosDesafiado = 0;
                $pontosDesafiante = 0;

        

                for ($i=0; $i < 3; $i++) {
                $this->setRounds($this->getRounds() + 1); 
                $pontosDesafiadoRodada = rand(0,10);
                $pontosDesafianteRodada = rand(0,10);

                    if ($pontosDesafiadoRodada == $pontosDesafianteRodada) {
                        echo "<p>O round {$this->getRounds()} acabou empatado.</p>";
                    }
                    elseif ($pontosDesafiadoRodada > $pontosDesafianteRodada){
                        echo "<p>O {$this->getDesafiado()->getNome()} venceu o round {$this->getRounds()}.</p>";
                    }
                    else {
                        echo "<p>O {$this->getDesafiante()->getNome()} venceu o round {$this->getRounds()}.</p>";
                    }                
                $pontosDesafiado += $pontosDesafiadoRodada;
                $pontosDesafiante += $pontosDesafianteRodada;
                    
                }

                echo "<p>FINAL DA LUTA!</p>";

                if ($pontosDesafiado > $pontosDesafiante) {
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    echo "<p>O {$this->getDesafiado()->getNome()} venceu a luta com $pontosDesafiado contra $pontosDesafiante do lutador {$this->getDesafiante()->getNome()}.</p>";
                }
                elseif ($pontosDesafiante == $pontosDesafiado){
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    echo "<p>A luta acabou empatada!</p>.";
                }
                else {
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    echo "<p>O {$this->getDesafiante()->getNome()} venceu a luta com $pontosDesafiante contra $pontosDesafiado do lutador {$this->getDesafiado()->getNome()}.</p>";
                }
                
            }
            else {
                if ($this->getDesafiado()->getCategoria() != $this->getDesafiante()->getCategoria()) {
                    echo "<p>Os lutadores {$this->getDesafiado()->getNome()} e {$this->getDesafiante()->getNome()} não pertencem à mesma categoria. Escolha novamente os lutadores.</p>";
                }
                else {
                    echo "<p>Você escolheu o mesmo lutador como desafiado e desafiante. Escolha novamente.</p>";
                }
            }
        }
        
        public function getDesafiado(){
            return $this->desafiado;
        }

        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }

        public function getDesafiante(){
            return $this->desafiante;
        }

        public function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }

        public function getRounds(){
            return $this->rounds;
        }

        public function setRounds($rounds){
            $this->rounds = $rounds;
        }

        public function getAprovada(){
            return $this->aprovada;
        }

        public function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }
    }
?>