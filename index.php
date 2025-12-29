<?php


    class User {

        /**
         * Ceci est l'identifiant de chaque utilisateur.
         *
         * @var null|integer
         */
        private ?int $id = null;


        /**
         * Ceci représente le prénom de chaque utilisateur.
         *
         * @var null|string
         */
        private ?string $firstName = null;


        /**
         * Ceci représente le nom de chaque utilisateur.
         *
         * @var null|string
         */
        private ?string $lastName = null;


        /**
         * Ceci représente l'email de chaque utilisateur.
         *
         * @var string
         */
        private ?string $email = null;


        /**
         * Ceci représente le mot de passe de chaque utilisateur.
         *
         * @var string
         */
        private ?string $password = null;


        public function __construct(string $firstName, string $lastName, string $email, string $password)
        {
            $this->firstName = $firstName;
            $this->lastName  = $lastName;
            $this->email     = $email;
            $this->password  = $password;
        }


        // -----------------------Accesseurs (getters)------------------------
        public function getId(): int {
            return $this->id;
        }

        public function getFirstName(): string {
            return $this->firstName;
        }

        public function getLastName(): string {
            return $this->lastName;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function getPassword(): string {
            return $this->password;
        }

        // -----------------------Mutateurs (setters)------------------------
        public function setFirstName(string $firstName): void {
            $this->firstName = $firstName;
        }

        public function setLastName(string $lastName): void {
            $this->lastName = $lastName;
        }

        public function setEmail(string $email): void {
            $this->email = $email;
        }

        public function setPassword(string $password): void {
            $this->password = $password;
        }
    }

    $user1 = new User("Picou", "Balthazar", "picsou@gmail.com", "pipi1234A*");

    $user1->setFirstName("Picsou");
    // $user1->setLastName("Balthazar");
    // $user1->setEmail("picsou@gmail.com");
    // $user1->setPassword("pipi1234A*");

    echo "Les données de l'utilisateur: {$user1->getFirstName()} {$user1->getLastName()} <br>";

    // echo "<br>";

    // $user2 = new User;
    // $user2->setFirstName("Donald");
    // $user2->setLastName("Duck");
    // $user2->setEmail("donald@gmail.com");
    // $user2->setPassword("dodo1234A*");
    // echo "Les données de l'utilisateur: {$user2->getFirstName()} {$user2->getLastName()} <br>";

    
    // class Robot {
    //     public string $head = "une tête ronde";
    //     protected string $body = "un tronc adapté";
    //     private int $footer = 3;

    //     public function getHead(): string {
    //         return $this->head;
    //     }

    //     public function getBody(): string {
    //         return $this->body;
    //     }

    //     public function getFooter(): int {
    //         return $this->footer;
    //     }
    // }

    // $robot0 = new Robot;
    // echo "Le robot 0 a {$robot0->head}. <br>";
    // $robot0->head = "Une tête carrée";
    // echo "Le robot 0 a  {$robot0->head} maintenant. <br>";
    
    // echo "<br>";
    
    // $robot1 = new Robot;
    // echo "Le robot 1 a {$robot1->head}. <br>";
    // echo "Le robot 1 a {$robot1->getBody()}. <br>";
    // echo "Le robot 1 a {$robot1->getFooter()} pieds.<br>";

?>