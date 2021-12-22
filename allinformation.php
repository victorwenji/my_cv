<?php
        class Paersonalinformation {
            public $nom;
            public $metier;

            function __construct($nom, $metier) {
                $this->nom = $nom;
                $this->metier = $metier;
            }
            function get_nom() {
                return $this->nom;
            }
            function get_metier() {
                return $this->metier;
            }
        }
    
        class coordonatebirthday{
            public $date;
            public $origine;
            public $situation;
            public $lien;

            function __construct($date, $origine, $situation, $lien)
            {
                $this->date = $date;
                $this->origine = $origine;
                $this->situation = $situation;
                $this->lien = $lien;
            }
            function get_date() {
                return $this->date;
            }
            function get_origine() {
                return $this->origine;
            }
            function get_situation() {
                return $this->situation;
            }
            function get_lien() {
                return $this->lien;
            }

        }

        class coordonateaddress{
            public $lieu;
            public $ville;
            public $map;
    
            function __construct($lieu, $ville, $map)
            {
                $this->lieu = $lieu;
                $this->ville = $ville;
                $this->map = $map;
            }
            function get_lieu() {
                return $this->lieu;
            }
            function get_ville() {
                return $this->ville;
            }
            function get_map() {
                return $this->map;
            }
        }

        class coordonatetelephone{
            public $numero;
            public $app;
    
            function __construct($numero, $app)
            {
                $this->numero = $numero;
                $this->app = $app;
            }
            function get_numero() {
                return $this->numero;
            }
            function get_app() {
                return $this->app;
            }
        }

        class coordonatmail{
            public $email;
            public $site;
    
            function __construct($email, $site)
            {
                $this->email = $email;
                $this->site = $site;
            }
            function get_email() {
                return $this->email;
            }
            function get_site() {
                return $this->site;
            }
        }
    
        $info4 = new coordonatmail("pascalwenji@gmail.com'", "Google, Twitter, Linkedin, Github");
    
        $info3 = new coordonatetelephone("Tel: (+237) 698987359 -", "Mobile, Telegram, Whatsapp");
    
        $info2 = new coordonateaddress("Resident à Logbessou ", "DOUALA - Cameroun","Map : 4.87544 6.85744");

        $info1 = new coordonatebirthday("Ne le 23 arvril 2000", "Originaire du sud Cameroun","Marié, 02 enfants - Sante RAS","https://github.com/victorwenji/my_cv");

        $info = new Paersonalinformation("WENJI Victor Pascal", "Architecte logiciel / DevOps");
        
        echo '<br>';
        echo '<br>';
        echo $info->get_nom();
        echo '<br>';
        echo $info->get_metier();
        echo '<br>';
        echo $info1->get_date();
        echo '<br>';
        echo $info1->get_origine();
        echo '<br>';
        echo $info1->get_situation();
        echo '<br>';
        echo $info2->get_lieu();
        echo' ';
        echo $info2->get_ville();
        echo '<br>';
        echo $info2->get_map();
        echo '<br>';
        echo $info3->get_numero();
        echo $info3->get_app();
        echo '<br>';
        echo'Gmail :';
        echo $info4->get_email();
        //echo $info4->get_site();
        echo '<br>';
        echo'git :';   echo $info1->get_lien();
        echo '<br>';
        echo'site :';  echo $info1->get_lien();
        echo '<br>';
    ?>