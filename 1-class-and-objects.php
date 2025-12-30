<?php

    class Voiture {

        /**
         * Ceci représente la marque de chaque voiture
         * 
         * @var string|null
         */
        private ?string $marque = null;

        /**
         * Ceci représente la couleur de chaque voiture
         * 
         * @var string|null
         */
        private ?string $couleur = null;

        /**
         * Ceci représente le model de chaque voiture
         * 
         * @var string|null
         */
        private ?string $model = null;

        public function __construct(string $marque, string $couleur, string $model) {
            $this->marque  = $marque;
            $this->couleur = $couleur;
            $this->model   = $model;
        }

        public function rouler(): void {
            echo "Vroum";
        }

        public function freiner(): void {
            echo "Frrrrrrrrr";
        }

        // -----------------------  Les accesseurs (getters) -------------------------
        public function getMarque(): string {
            return $this->marque;
        }

        public function getCouleur(): string {
            return $this->couleur;
        }

        public function getModel(): string {
            return $this->model;
        }



        // -----------------------  Les mutateurs (setters) -------------------------
        public function setMarque(string $marque): void {
            $this->marque = $marque;
        }

        public function setCouleur(string $couleur): void {
            $this->couleur = $couleur;
        }

        public function setModel(string $model): void {
            $this->model = $model;
        }

        public function getDisplay(): string {

            return "La voiture de marque: {$this->marque} dont le model est {$this->model} est de couleur {$this->couleur}";
        }

    }

    $v1 = new Voiture("Mercedes", "argentée", "190-D");
    $v1->setCouleur("noire");
    echo $v1->getDisplay();
    
    echo "<br>";
    
    $v2 = new Voiture("Fiat", "bleue", "bravo");
    echo $v2->getDisplay();



