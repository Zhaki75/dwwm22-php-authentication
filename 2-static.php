<?php

    class Telephone {

        /**
         * Ceci représente la marque de chaque téléphone
         *
         * @var string|null
         */
        private ?string $marque= null;


        /**
         * Ceci représente la couleur de chaque téléphone
         *
         * @var string|null
         */
        private ?string $couleur = null;


        /**
         * Ceci représente le nombre de fois que la classe a été instanciée
         *
         * @var integer
         */
        public static int $nbreInstances = 0;

        public function __construct()
        {
            self::$nbreInstances++;
        }


        public function getMarque(): string {
            return $this->marque;
        }

        public function setMarque(string $marque): void {
            $this->marque = $marque;
        }

        public function getCouleur(): string {
            return $this->couleur;
        }

        public function setCouleur(string $couleur): void {
            $this->couleur = $couleur;
        }
    }

    $t0 = new Telephone;
    $t0->setMarque("Iphone");
    $t0->setCouleur("bleue");

    $t1 = new Telephone;
    $t1->setMarque("Samsung");
    $t1->setCouleur("noire");

    echo Telephone::$nbreInstances;