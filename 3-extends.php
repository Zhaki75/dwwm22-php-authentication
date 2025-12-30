<?php

    class Animal {
        public function crier(): void{
            echo "L'animal crie";
        }

    }

    class Chien extends Animal {
        private ?string $nom = "Milou";

        public function aboyer(): void{
            echo "Ouaf Ouaf";
        }
    }

    class Chat extends Animal {
        private ?string $nom = "Miaouss";

        public function miauler(): void{
            echo "Miaou Miaou";
        }
    }

    $chien = new Chien();
    $chien->crier();
    $chien->aboyer();

    // echo "<br>";

    // $chat = new Chat();
    // $chat->miauler();