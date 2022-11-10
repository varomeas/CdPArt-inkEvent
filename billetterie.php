<?php include("lang.php");
include("connexion/bdd.php");
$requete = 'SELECT * from periode';
$resultat = $connexion->query($requete);
$tabDates = $resultat->fetchAll();
$resultat->closeCursor();
$compte = count($tabDates);


?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CANEVAROLO Lucie, DUFAY Elise, ROMEAS Valentin, GIACOMETTI Lenni">
    <meta name="description"
        content="Art'Ink Event est un site vitrine qui présente l'événement Art'Ink Event qui se déroulera du 30 juin au 2 juillet dans la ville du Puy-en-Velay. C'est un salon de tatouage à portée européenne qui regroupe les plus grands artistes tatoueurs perceurs de l'Europe.">
    <title>Billeterie</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style-menu-footer.css">
    <link href="img/logos/favicon.png" rel="icon">
    <script src="script/script.js"></script>
</head>

<body>
    <!--menu-->
    <header>
        <?php include("menu.php") ?>
    </header>
    <!--bannière billeterie-->
    <div class="containerBanniere">
        <img src="img/banniere.jpg" alt="Bannière Art'Ink" id="banniere">
        <div class="texteBanniere">
            <p>
                <?php echo introbilletterie; ?>
            </p>
            <?php
            $requete5 = 'SELECT sum(nb_places) FROM reservent';
            $resultat5 = $connexion->query($requete5);
            $nbClient = $resultat5->fetchAll();
            $resultat5->closeCursor();
            $places_restantes = 1000 - $nbClient[0][0];
            echo 'Il reste <couleur>' . $places_restantes . '</couleur> places disponibles';
            ?>
        </div>
    </div>
    <!--titre-->
    <h2 class="pre-resa">
        <?php echo reservation; ?>
    </h2>
    <!--formulaire-->
    <div class="fild">
        <fieldset>
            <form action="#form" method="post">
                <h3 id="reserve">
                    <?php echo infoperso; ?>
                </h3>
                <p id="renseignement" class="formFont">
                    <?php echo renseignement; ?>
                </p>
                <label class="formFont">Nom*</label>
                <input type="text" name="nom" placeholder="Votre Nom..." required></input>
                <label class="formFont">Prenom*</label>
                <input type="text" name="prenom" placeholder="Votre Prénom..." required></input>
                <label class="formFont">Date de naissance*</label>
                <input type="date" name="date_naissance" required></input>
                <label class="formFont">Adresse mail*</label>
                <input type="mail" name="email" placeholder="mail@exemple.com" required></input>
                <!--pré-réservations-->
                <h3 id="reserve">
                    <?php echo prereservation; ?>
                </h3>
                <label class="formFont" id="form">
                    <?php echo nbplaces; ?>
                </label>
                <input type="number" name="nb_places" placeholder="Nombre de places" required>
                <label id="titre_venir">
                    <?php echo jourvenir; ?>
                </label>
                <!--choix des dates réservations-->
                <div class="container-reservation formFont">
                    <?php
                    for ($i = 0; $i < $compte; $i++) {
                        echo '<input class="taille" type="checkbox" value="' . $tabDates[$i]['id_periode'] . '" name="jour[]">' . $tabDates[$i]['jour'] . '</input>';
                    } ?>
                </div>
                <input type="submit" value="Valider" name="valider" class="boutonValider"></input>
                <p id="attention">Attention ! La pratique d'un tatouage est interdite sur un mineur sans le consentement écrit d'une personne chargée de l'autorité parentale </p>
                <?php
                    //si le formulaire est validé, création d'une class client qui enregistre les informations et les envoient dans la base de données
                    if (isset($_POST['valider'])) {
                        require_once 'classes/client.php';
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        $mail = $_POST['email'];
                        $date_naissance = $_POST['date_naissance'];
                        $nb_places = $_POST['nb_places'];
                        $jour = $_POST['jour'];


                        $client = new client($nom, $prenom, $mail, $date_naissance, $nb_places, $jour);
                        $client->afficherInfos();
                        $client->ajout_bdd();
                        $client->compter();
                        mail($mail, "coucou","t'as bien réservé louloute");
                    }
                ?>
            </form>

        </fieldset>
    </div>
    <!--Annulation de la pré-réservation si le client le souhaite avec son email-->
    <h2 class="pre-resa">
        <?php echo annuler; ?>
    </h2>
    <div class="fild">
        <fieldset>
            <form action="" method="post">
                <label class="formFont">
                    <?php echo saisir; ?>
                </label>
                <input type="mail" name="mailcompte" placeholder="monmail@exemple.com" required>
                <input type="submit" value="Valider" name="supprimer" class="boutonValider">
            </form>
            <?php
            if (isset($_POST['supprimer'])) {
                $requete2 = 'DELETE FROM clients where mail = "' . $_POST['mailcompte'] . '" ';
                $resultat2 = $connexion->query($requete2);
                $resultat2->closeCursor();

                echo 'Votre réservation a bien été annulée';
            }
            ?>
        </fieldset>
    </div>

    </div>
    <div id="scroll_to_top">
        <a href="#top"><img src="img/icones/fleche.png" alt="Retourner en haut" /></a>
    </div>
    <footer>
        <?php include("footer.php") ?>
    </footer>
</body>

</html>