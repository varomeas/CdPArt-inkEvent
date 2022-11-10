<?php include("lang.php"); ?>

<?php
//requetes envoyees a la bdd

include('connexion/bdd.php');
$requete = 'SELECT * FROM createurs';
$results = $connexion->query($requete);
$tableau = $results->fetchAll();
$results->closeCursor();
$nbjoueur = count($tableau);

$requete = 'SELECT * FROM createurs';
$resultat = $connexion->query($requete);
$tab = $resultat->fetchAll();
$resultat->closeCursor();
$nbinfo = count($tab);
$j = 11;

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <title>Créateurs</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/style-menu-footer.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CANEVAROLO Lucie, DUFAY Elise, ROMEAS Valentin, GIACOMETTI Lenni">
    <meta name="description"
        content="Art'Ink Event est un site vitrine qui présente l'événement Art'Ink Event qui se déroulera du 30 juin au 2 juillet dans la ville du Puy-en-Velay. C'est un salon de tatouage à portée européenne qui regroupe les plus grands artistes tatoueurs perceurs de l'Europe.">
    <!-- Favicons -->
    <link href="img/logos/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="script/script.js"></script>
</head>

<body>
    <header>
        <?php
            include('menu.php');
        ?>
    </header>
    <!--bannière-->
    <div class="containerBanniere">
        <img src="img/banniere.jpg" alt="Bannière Art'Ink" id="banniere">
        <div class="texteBanniere">
            <p><?php echo titrepagecrea; ?></p>
        </div>
    </div>

    <!--// obtenir un lien cliquable sur l'image du créateur qui mènera a sa biographie-->

    <h1 class="h2-crea"><?php echo titretatoo; ?><h1>

    <h2 class="h1-crea"><?php echo france; ?></h2>
    <?php echo '<div class="img-crea">';
        for ($i = 2; $i < 4; $i++) {
            echo '<a href="bio.php?id=' . $tableau[$i]['id_createur'] . '"><img  src="' . $tableau[$i]['url_photo'] . '" alt="Photo du créateur"></a>';
        }
        echo '</div>';
    ?>
    <h2 class="h1-crea"><?php echo uk; ?></h2>

    <?php echo '<div class="img-crea">';
        for ($i = 0; $i < 2; $i++) {
            echo '<a href="bio.php?id=' . $tableau[$i]['id_createur'] . '"><img class="img-crea" src="' . $tableau[$i]['url_photo'] . '" alt="Photo du créateur"></a>';
        }
        echo '</div>';
    ?>
    <h2 class="h1-crea"><?php echo belgique; ?></h2>

    <?php echo '<div class="img-crea">';
        for ($i = 4; $i < 6; $i++) {
            echo '<a href="bio.php?id=' . $tableau[$i]['id_createur'] . '"><img class="img-crea" src="' . $tableau[$i]['url_photo'] . '" alt="Photo du créateur"></a>';
        }
        echo '</div>';

    ?>
    <h2 class="h1-crea"><?php echo allemagne; ?></h2>
    <?php
        echo '<div class="img-crea">';
        for ($i = 6; $i < 8; $i++) {
            echo '<a href="bio.php?id=' . $tableau[$i]['id_createur'] . '"><img class="img-crea" src="' . $tableau[$i]['url_photo'] . '" alt="Photo du créateur"></a>';
        }
        echo '</div>';
    ?>
    <h2 class="h2-crea"><?php echo titreperceur; ?></h2>
    <?php
        echo '<div class="img-crea">';
        for ($i = 9; $i < 11; $i++) {
            echo '<a href="bio.php?id=' . $tableau[$i]['id_createur'] . '"><img class="img-crea" src="' . $tableau[$i]['url_photo'] . '" alt="Photo du créateur"></a>';
        }
        echo '</div>';
    ?>

    <h2 class="h2-crea"><?php echo titredessinatrice; ?></h2>
    <?php
        echo '<div class="img-crea">';
        for ($i = 8; $i < 9; $i++) {
            echo '<a href="bio.php?id=' . $tableau[$i]['id_createur'] . '"><img class="img-crea" src="' . $tableau[$i]['url_photo'] . '" alt="Photo du créateur"></a>';
        }
        echo '</div>';
    ?>
    <!--Formulaire de modification des informations de la table createurs-->
    <h2 class="pre-resa"><?php echo miseajour; ?></h2>
        <div class="fild">
            <fieldset id="form">
                <form action="#form" method="post">
                    <label><?php echo selectcrea; ?></label>
                    <select name="id">
                        <?php
                            $requete3 = 'SELECT * from createurs';
                            $resultat3 = $connexion->query($requete3);
                            $tabCreateurs = $resultat3->fetchAll();
                            $resultat3->closeCursor();
                            $compteCrea = count($tabCreateurs);

                            for ($i = 0; $i < $compteCrea; $i++) {
                                echo '<option value=' . $tabCreateurs[$i]['id_createur'] . '>' . $tabCreateurs[$i]['nom'] . ' ' . $tabCreateurs[$i]['prenom'] . '</option>';
                            }
                        ?>

                    </select></br></br>

                    <label class="formFont"><?php echo age; ?></label>
                    <input type="number" name="age" placeholder="Âge">
                    <label class="formFont"><?php echo bio; ?></label>
                    <input type="text" name="bio" placeholder="Biographie">
                    <label class="formFont"><?php echo metier; ?></label>
                    <input type="text" name="metier" placeholder="Son métier">
                    <label class="formFont"><?php echo pays; ?></label>
                    <input type="text" name="origine" placeholder="Son pays d'origine">
                    <input type="submit" name="modifier" value="Modifier" class="boutonValider">
                </form>
                <?php
                    if (isset($_POST['modifier'])) {
                        $requete4 = 'UPDATE createurs SET age="' . $_POST['age'] . '", bio="' . $_POST['bio'] . '", origine="' . $_POST['origine'] . '", metier="' . $_POST['metier'] . '" WHERE id_createur="' . $_POST['id'] . '"';
                        $resultat4 = $connexion->query($requete4);
                        $resultat4->closeCursor();

                        echo 'Les informations ont bien été modifiées';
                    }
                ?>
            </fieldset>
        </div>
    <div id="scroll_to_top">
        <a href="#top"><img src="img/icones/fleche.png" alt="Retour en haut" /></a>
    </div>
    <footer>
        <?php include('footer.php');?>
    </footer>

</body>

</html>