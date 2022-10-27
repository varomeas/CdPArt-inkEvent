<?php

require_once("billet.php");

class client{
	public $nom = "";
	public $prenom = "";
	public $mail = "";
	public $date_naissance;
	public $connexion;
	public $prix;
	public $places;
	public $jour;

	public function __construct($n,$p,$m,$a,$nb_places,$jour){
		$this->nom = $n;
		$this->prenom = $p;
		$this->mail = $m;
		$this->date_naissance = $a;
		$this->connexion = new PDO('mysql:host=localhost;port=8888;dbname=artink_event','root','root');
		$this->places = $nb_places;
		$this->prix = new billet($nb_places);
		$this->jour = $jour;
	}


	public function afficherInfos(){
		echo "Bonjour, ".$this->nom.' '.$this->prenom.'! Votre pré-inscription à bien été prise en compte. Un email vous à été envoyé sur le mail suivant : '.$this->mail.' . Vous avez pris '.$this->places.' places pour un montant de '.$this->prix->calcul().'€ par jour, à régler sur place';
	}

    public function ajout_bdd(){
        
       	$requete=$this->connexion->prepare('INSERT INTO clients (nom, prenom, date_naissance, mail) VALUES (?,?,?,?)');
		$requete -> execute([$this->nom,$this->prenom,$this->date_naissance,$this->mail]);
		$id = $this->connexion->lastInsertId();

		$requete2 = $this->connexion->prepare('INSERT INTO reservent(id_client,id_periode,nb_places,prix_a_payer) VALUES (?,?,?,?)');
		for($i=0;$i<count($this->jour);$i++){
			$requete2->execute([$id,$this->jour[$i],$this->places,$this->prix->calcul()]);
		}
    }

	public function compter(){
		$requete = 'SELECT sum(nb_places) FROM reservent';
		$resultat = $this->connexion->query($requete);
		$nbClient = $resultat->fetchAll();
        $resultat->closeCursor();
		$places_restantes = 1000 - $nbClient[0][0];
		echo 'Il reste '.$places_restantes.' places disponibles';
		
	}
}

?>
