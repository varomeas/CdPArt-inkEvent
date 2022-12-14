<?php include("lang.php");?>
<?php
include('connexion/bdd.php');
$requete='SELECT * FROM createurs WHERE id_createur = '.$_GET["id"];
$resultat = $connexion->query($requete);
$tableau=$resultat->fetchAll();
$resultat->closeCursor();
?>

<html>
    <head>
        <title>Créateurs</title>
        <link rel="stylesheet" href="style/style.css"/>
        <link rel="stylesheet" href="style/style-menu-footer.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="CANEVAROLO Lucie, DUFAY Elise, ROMEAS Valentin, GIACOMETTI Lenni">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Art'Ink Event est un site vitrine qui présente l'événement Art'Ink Event qui se déroulera du 30 juin au 2 juillet dans la ville du Puy-en-Velay. C'est un salon de tatouage à portée européenne qui regroupe les plus grands artistes tatoueurs perceurs de l'Europe.">

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
    
    <div class="container-bio">
        <div class="image-bio"><?php echo'<img src="'.$tableau[0]['url_photo'].'" alt="photo du créateurs"/><br>'; ?></div>

        <div class="pBio">
        <h2 class="h2-bio"><?php echo($tableau[0]['prenom'].' '.$tableau[0]['nom']); ?></h2>
            <p><?php echo($tableau[0]['metier'].', '.$tableau[0]['origine'].', '.$tableau[0]['age'].' ans.'); ?></p> 
            <p><?php echo($tableau[0]['bio']); ?><p>
            <button><a href="créateur.php">Retour</a></button> 
        </div>
    </div>
    <div id="scroll_to_top">
            <a href="#top"><img src="img/icones/fleche.png" alt="Retourner en haut" /></a>
    </div>
<footer>
        <?php
            include('footer.php');
            ?>
</footer>
    </body>
</html>