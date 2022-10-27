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

<html>
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
                include('menu.html');
                ?>
            </header>
<!--bannière-->
        <div class="containerBanniere">
            <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
                <div class="texteBanniere">
                        <p>Créateurs</p>
                    </div>
        </div>
<?php
// obtenir un lien cliquable sur l'image du créateur qui mènera a sa biographie//

    echo '<h2 class="h2-crea">Les tatoueurs<h2>';

    echo '<h1 class="h1-crea">France</h1>';
    echo '<div class="img-crea">';
    for($i = 2; $i < 4; $i++){
      
      
      echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img  src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h1 class="h1-crea">U.K</h1>';
    echo '<div class="img-crea">';
    for($i = 0; $i < 2; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
    
    echo '<h1 class="h1-crea">Belgique</h1>';
    echo '<div class="img-crea">';
    for($i = 4; $i < 6; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h1 class="h1-crea">Allemagne</h1>';
    echo '<div class="img-crea">';
    for($i = 6; $i < 8; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h2 class="h2-crea">Les perceurs</h2>';
    echo '<div class="img-crea">';
    for($i = 9; $i < 11; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h2 class="h2-crea">La dessinatrice</h2>';
    echo '<div class="img-crea">';
    for($i = 8; $i < 9; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
?>
        <footer>
            <?php
            include('footer.html');
            ?>
        </footer>

    </body>
</html>
    