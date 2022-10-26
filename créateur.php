


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
        <title>Créateur</title>
        <link rel="stylesheet" href="css.css"/>
        <link rel="stylesheet" href="style-menu-footer.css"/>
        <meta charset="utf-8">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    </head>
        <body>
            <header>
                <?php
                include('menu.html');
                ?>
            </header>

<?php
// obtenir un lien cliquable sur l'image du créateur qui menera a sa biographie//

    echo '<h2>Les tatoueurs<h2>';

    echo '<h1>France</h1>';
    echo '<div class="img-crea">';
    for($i = 2; $i < 4; $i++){
      
      
      echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img  src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h1>U.K</h1>';
    echo '<div class="img-crea">';
    for($i = 0; $i < 2; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';
    
    echo '<h1>Belgique</h1>';
    echo '<div class="img-crea">';
    for($i = 4; $i < 6; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h1>Allemagne</h1>';
    echo '<div class="img-crea">';
    for($i = 6; $i < 8; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h2>Les perceurs</h2>';
    echo '<div class="img-crea">';
    for($i = 9; $i < 11; $i++){
      
        echo '<a href="bio.php?id='.$tableau[$i]['id_createur'].'"><img class="img-crea" src="'.$tableau[$i]['url_photo'].'"></a>';
      
    }
    echo '</div>';

    echo '<h2>La dessinatrice</h2>';
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
    