<?php include("lang.php");?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="CANEVAROLO Lucie, DUFAY Elise, ROMEAS Valentin, GIACOMETTI Lenni">
        <meta name="description" content="Plan du site Art'Ink Event">
        <title>Plan du site</title>
    
        <!-- Favicons -->
        <link href="img/logos/favicon.png" rel="icon">
      <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    
      <!-- Main Stylesheet File -->
      <link href="style/style.css" rel="stylesheet">
      <link href="style/style-menu-footer.css" rel="stylesheet">
     
      <script src="script/script.js"></script>
      </head>

      <body>

        <header>
            <?php
            include('menu.php');
            ?>
          </header>

          <div class="containerBanniere">
            <img src="img/banniere.jpg" alt="Bannière Art'Ink" id="banniere">
                <div class="texteBanniere">
                        <p><?php echo titrepageplansite;?></p>
                    </div>
        </div>
          
        <div class="plan-du-site">
            <h2>Accueil</h2>
            <h2>Créateurs<br>
                Biographie
            </h2>
            <h2>Programme<br>
            Plan du salon</h2>
            <h2>Contact</h2>
            <h2>Billetterie</h2>
        </div>

        <footer>
        <?php
        include('footer.php');
        ?>
      </footer>

      </body>
</html>