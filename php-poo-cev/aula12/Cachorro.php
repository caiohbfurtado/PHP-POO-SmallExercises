<?php
    require_once "Mamifero.php";

    class Cachorro extends Mamifero {
        public function enterrarOsso(){
            echo "<p>O catioro está enterrando o osso....</p>";
        }

        public function abanarRabo(){
            echo "<p>O catioro está <strong>muito feliz</strong>. Nota-se pelo rabinho balançante!</p>";
        }

        public function reagirFrase($frase){
            $frase = strtolower($frase);
            if ($frase == "vai apanhar") {
                echo "<p>ARGHHHH... O doguíneo <strong>não gostou de ouvir isso</strong> e está rosnando!</p>";
            }
            elseif ($frase == "olá" || $frase == "ola"){
                echo "<p>O catioro <strong>adorou</strong> essa interação e está a latir amigavelmente e balnaçar o rabíneo!</p>";
            }
        }

        public function reagirDono($dono){
            if ($dono) {
                echo "<p>Um doguíneo <strong>sempre reconhece seu dono!</strong> Veja como ele está a abanar o rabíneo.</p>";
            }
            else {
                echo "<p>Ihhh, pelo jeito <strong>você não é o dono</strong> desse catioro! Veja como ele está a rosnar e latir!.</p>";
            }
        }

        
        public function reagirIdadePeso($idade, $peso){
            if ($idade < 5) {
                if ($peso < 10) {
                    echo "<p>O catioro está na flor da idade e em forma, portanto muito feliz <strong>abanando o rabinho!</strong></p>";
                }
                else{
                    echo "<p>O catioro está na flor da idade e fora forma, portanto meio estressado <strong>latindo muito!</strong></p>";
                }
            }
            else {
                if ($peso<10) {
                    echo "<p>O catioro está na melhor idade mas em forma, portanto meio estressado <strong>e rosnando!</strong></p>";
                }
                else {
                    echo "<p>O catioro está na melhor idade e fora de forma, portanto está meio deprimido <strong>ignorando as situações...</strong></p>";
                }
            }
        }
    }
?>