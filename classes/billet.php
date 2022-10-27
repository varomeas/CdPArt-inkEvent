<?php

class billet{
    public $nb_places = 0;
    public $prix_a_payer = 0;
    public $connexion;
    public $jour;
    public $total;

    public function __construct($nb){
        $this->nb_places = $nb;
        $this->connexion = new PDO('mysql:host=localhost;port=8888;dbname=artink_event','root','root');
    }

    public function calcul(){
        $this->prix_a_payer = $this->nb_places * 10;  
        return $this->prix_a_payer;
    }

}

$billet = new billet(2);
$billet -> calcul();
