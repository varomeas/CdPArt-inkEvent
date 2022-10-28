<?php include("lang.php");?>

<?php
//requetes envoyees a la bdd

$bdd=new PDO('mysql:host=localhost;port=3306;dbname=artink_event','root','');
$requete='SELECT * FROM createurs';
$results = $bdd->query($requete);
$tableau= $results->fetchAll();
$results->closeCursor();
$nbjoueur=count($tableau);

$requete='SELECT * FROM createurs' ; 
$resultat = $bdd->query($requete);
$tab=$resultat->fetchAll();
$resultat->closeCursor();
$nbinfo=count($tab);
$j=11;

?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
    <head>
        <title>Créateurs</title>
        <link rel="stylesheet" href="style/style.css"/>
        <link rel="stylesheet" href="style/style-menu-footer.css">
        <meta charset="utf-8">

        <!-- Favicons -->
        <link href="img/logos/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    </head>
        <body>
            <header>
                <?php
                include('menu.php');
                ?>
            </header>
<!--bannière-->
        <div class="containerBanniere">
            <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
                <div class="texteBanniere">
                        <p><?php echo titrepagecrea;?></p>
                    </div>
        </div>

<!--// obtenir un lien cliquable sur l'image du créateur qui mènera a sa biographie-->

    <h2 class="h2-crea"><?php echo titretatoo;?><h2>

    <h1 class="h1-crea"><?php echo france;?></h1>
    <?php echo '<div class="img-crea">';
    for($i = 2; $i < 4; $i++){
      
      
      echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img  src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
    ?>
        <h1 class="h1-crea"><?php echo uk;?></h1>
      
        <?php echo '<div class="img-crea">';
        for($i = 0; $i < 2; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
    ?>
        <h1 class="h1-crea"><?php echo belgique;?></h1>

    <?php echo '<div class="img-crea">';
    for($i = 4; $i < 6; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    ?>
        <h1 class="h1-crea"><?php echo allemagne;?></h1>
    <?php
    echo '<div class="img-crea">';
    for($i = 6; $i < 8; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
    ?>
    <h2 class="h2-crea"><?php echo titreperceur;?></h2>

    <?php
    echo '<div class="img-crea">';
    for($i = 9; $i < 11; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
    ?>

    <h2 class="h2-crea"><?php echo titredessinatrice;?></h2>
    <?php
    echo '<div class="img-crea">';
    for($i = 8; $i < 9; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
?>
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
    