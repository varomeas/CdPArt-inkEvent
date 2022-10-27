<?php include("lang.php");?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/style-menu-footer.css">
        <link href="img/logos/favicon.png" rel="icon">
    </head>
<body>
<!--menu-->
    <header>
        <?php include("menu.html") ?>
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
                    <input type="number" name="nb_places" placeholder="Nombre de places">
                <label id="titre_venir"><?php echo jourvenir;?></label>
<!--choix des dates réservations-->
                <div class="container-reservation">
                    <p id="taille_date"><?php echo dateun?></p>
                    <input type="checkbox" name="jour" class="taille"> </input>
                    <p id="taille_date"><?php echo datedeux?></p>
                    <input type="checkbox" name="jour" class="taille"></input>
                    <p id="taille_date"><?php echo datetrois?></p>
                    <input type="checkbox" name="jour" class="taille"> </input>
                </div>
                <div input type="submit" value="Valider" > <button>Valider</button></div>
            </form>
            </div> 
        </fieldset>
        
        <div id="scroll_to_top">
            <a href="#top"><img src="img/icones/fleche.png" alt="Retourner en haut" /></a>
        </div>

        <footer>
        <?php include("footer.html")?>
        </footer>
</body>
</html>
        
