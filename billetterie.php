<?php include("lang.php");
$connexion = new PDO('mysql:host=localhost;port=3306;dbname=artink_event','root','');
$requete = 'SELECT * from periode';
$resultat=$connexion->query($requete);
$tabDates = $resultat->fetchAll();
$resultat->closeCursor();
$compte = count($tabDates);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Billeterie</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/style-menu-footer.css">
        <link href="img/logos/favicon.png" rel="icon">
    </head>
<body>
<!--menu-->
    <header>
        <?php include("menu.php") ?>
    </header>
<!--bannière billeterie-->
    <div class="containerBanniere">
        <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
        <div class="texteBanniere">
            <p><?php echo introbilletterie;?></p>
        </div>
    </div>
<!--titre-->
    <h2 class="pre-resa"><?php echo reservation;?></h2>
<!--formulaire-->
    <div class="fild">
        <fieldset>
            <form  action="" method="post">
                <h3 id="reserve"><?php echo infoperso;?></h3>
                <p><?php echo renseignement;?></p>
                <input type="text" name="nom" placeholder="Votre Nom..." required></input>
                <input type="text" name="prenom" placeholder="Votre Prénom..." required></input>
                <input type="date" name="date_naissance" required></input>
                <input type="mail" name="email" placeholder="mail@exemple.com" required></input>
<!--pré-réservations-->                   
                <h3 id="reserve"><?php echo prereservation;?></h3>
                <label><?php echo nbplaces;?></label>
                <input type="number" name="nb_places" placeholder="Nombre de places" required>
                <label id="titre_venir"><?php echo jourvenir;?></label>
<!--choix des dates réservations-->
                <div class="container-reservation">
                    <?php
                    for($i=0;$i<$compte;$i++){
                        echo '<input class="taille" type="checkbox" value="'.$tabDates[$i]['id_periode'].'" name="jour[]">'.$tabDates[$i]['jour'].'</input>';
                    }?>
                </div>
                <input type="submit" value="Valider" name="valider"></input>
            </form>
            <?php
                //si le formulaire est validé, création d'une class client qui enregistre les informations et les envoient dans la base de données
                if(isset($_POST['valider'])){
                    require_once 'classes/client.php';
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $mail = $_POST['email'];
                    $date_naissance = $_POST['date_naissance'];
                    $nb_places = $_POST['nb_places'];
                    $jour = $_POST['jour'];


                    $client = new client($nom, $prenom, $mail, $date_naissance, $nb_places,$jour);
                    $client -> afficherInfos();
                    $client -> ajout_bdd();
                    $client -> compter();
                }
            ?>
        </fieldset>
    </div>
    <!--Annulation de la pré-réservation si le client le souhaite avec son email-->
    <h2 class="pre-resa"><?php echo annuler;?></h2>
    <div class="fild">
        <fieldset>
            <form action="" method="post">
                <label><?php echo saisir;?></label>
                <input type="mail" name="mailcompte" placeholder="monmail@exemple.com">
                <input type="submit" value="valider" name="supprimer">
            </form>
            <?php
                if(isset($_POST['supprimer'])){
                    $requete2 = 'DELETE FROM clients where mail = "'.$_POST['mailcompte'].'" ';
                    $resultat2=$connexion->query($requete2);
                    $resultat2->closeCursor();

                    echo 'Votre réservation a bien été annulée';
                }
            ?>
        </fieldset>
    </div>
    <!--Formulaire de modification des informations de la table createurs-->
    <h2 class="pre-resa"><?php echo miseajour;?></h2>
    <div class="fild">
        <fieldset>
            <form action="" method="post">
                <label><?php echo selectcrea;?></label>
                <select name="id">
                    <?php
                        $requete3 = 'SELECT * from createurs';
                        $resultat3=$connexion->query($requete3);
                        $tabCreateurs = $resultat3->fetchAll();
                        $resultat3->closeCursor();
                        $compteCrea = count($tabCreateurs);

                        for($i=0; $i<$compteCrea; $i++){
                            echo '<option value='.$tabCreateurs[$i]['id_createur'].'>'.$tabCreateurs[$i]['nom'].' '.$tabCreateurs[$i]['prenom'].'</option>';
                        }
                    ?>
                </select></br></br>
                <label><?php echo age;?></label>
                <input type="number" name="age" placeholder="age">
                <label><?php echo bio;?></label>
                <input type="text" name="bio" placeholder="Biographie">
                <label><?php echo metier;?></label>
                <input type="text" name="metier" placeholder="Son métier">
                <label><?php echo pays;?></label>
                <input type="text" name="origine" placeholder="Son pays d'origine">
                <input type="submit" name="modifier" value="modifier">
            </form>
            <?php 
                if(isset($_POST['modifier'])){
                    $requete4 = 'UPDATE createurs SET age="'.$_POST['age'].'", bio="'.$_POST['bio'].'", origine="'.$_POST['origine'].'", metier="'.$_POST['metier'].'" WHERE id_createur="'.$_POST['id'].'"';
                    $resultat4=$connexion->query($requete4);
                    $resultat4->closeCursor();

                    echo 'Les informations ont bien été modifiées';    
                }
            ?>
        </fieldset> 
    </div>  
        <div id="scroll_to_top">
            <a href="#top"><img src="img/icones/fleche.png" alt="Retourner en haut" /></a>
        </div>
    <footer>
        <?php include("footer.php")?>
    </footer>
</body>
</html>
        
