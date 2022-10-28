<?php include("lang.php");?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">

  <head>
    <meta charset="utf-8">
    <title>Programmation</title>

    <!-- Favicons -->
    <link href="img/logos/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Main Stylesheet File -->
  <link href="style/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style/style-menu-footer.css">
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
            <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
                <div class="texteBanniere">
                        <p><?php echo titrepageprog;?></p>
                    </div>
        </div>
    <section id="prog" class="programmation">
        <div class="intro">
          <div class="section-intro">
            <p class="titre_prog"><?php echo introprog;?></p>
          </div>
 
          <div class="button-day">
            <button><a href="#day-1"><?php echo dateun;?></a></button>
            <button><a href="#day-2"><?php echo datedeux;?></a></button>
            <button><a href="#day-3"><?php echo datetrois;?></a></button>
          </div>


          <div class="details">
  
            <!--Jour 1 -->
            <div class="container-j1" id="day-1">
  
              <div class="row-prog">
                <div class="icone">
                    <img src="img/icones/tatoueurs.png">
                  </div>
                  <div class="time"><time>13:00 - 14:00</time></div>
                  <div class="texte">
                    <h4><?php echo pctitre;?></h4>
                    <p><?php echo pcsoustitre;?></p>
                  </div>
              </div>
  
              <div class="row-prog">
              <div class="icone">
                  <img src="img/icones/jury.png">
                </div>
                <div class="time"><time>14:00 - 15:00</time></div>
                <div class="texte">
                  <h4><?php echo pjtitre;?></h4>
                  <p><?php echo pjsoustitre;?></p>
                </div>
              </div>
  
              <div class="row-prog">
              <div class="icone">
                  <img src="img/icones/stand.png">
                </div>
                <div class="time"><time>15:00 - 20:00</time></div>
                <div class="texte">
                  <h4><?php echo ouvstands;?></h4>
                  <p><?php echo sousouvstands;?></p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="artiste">
                  <img src="img/artistes/inga.png">
                </div> 
                <div class="time"><time>21:00 - 23:00</time>
                </div>
                <div class="texte">
                  <h4>Concert,<span> Ingalawash</span></h4>
                  <p><?php echo presentconcert;?></p>
                </div>
              </div>
  
            </div>
            <!-- Fin du jour 1 -->

            <!-- barre de séparation -->
            <hr noshade width="400" size="3" align="center" color="black">

            <!-- Jour 2 -->
  
            <div role="tabpanel" class="container-j2" id="day-2">
  
              <div class="row-prog">
                  <div class="icone">
                    <img src="img/icones/stand.png">
                  </div>
                  <div class="time"><time>10:00 - 20:00</time>
                  </div>
                  <div class="texte">
                    <h4><?php echo ouvstands;?></h4>
                    <p><?php echo sousouvstands;?></p>
                  </div>
              </div>
  
              <div class="row-prog">
                  <div class="artiste">
                    <img src="img/artistes/lucile_prog.png">
                  </div>
                  <div class="time"><time>14:00 - 16:00</time>
                  </div>
                  <div class="texte">
                    <h4><?php echo atelierdessin;?></h4>
                    <p><?php echo sousatelierdessin;?> </p>
                  </div>
              </div>
  
              <div class="row-prog">
                <div class="artiste">
                  <img src="img/artistes/veg.png">
                </div>
                <div class="time"><time>16:00 - 19:00</time>
                </div>
                <div class="texte">
                  <h4><?php echo spectaclesuspending;?></h4>
                  <p><?php echo sousspectaclesuspending;?></p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="artiste">
                  <img src="img/artistes/gojira.png">
                </div>
                <div class="time"><time>22:00 - 00:30</time>
                </div>
                <div class="texte">
                  <h4>Concert,<span> Gojira</span></h4>
                  <p><?php echo sousconcertgojira;?></p>
                </div>
              </div>
  
            </div>
            <!-- Fin jour 2 -->

            <!-- barre de séparation -->
            <hr noshade width="400" size="3" align="center" color="black">
  
            <!-- Jour 3 -->
  
            <div role="tabpanel" class="container-j3" id="day-3">
  
              <div class="row-prog">
              <div class="icone">
                  <img src="img/icones/stand.png">
                </div>
                <div class="time"><time>10:00 - 13:00</time>
                </div>
                <div class="texte">
                  <h4><?php echo ouvstands;?></h4>
                  <p><?php echo sousouvstands;?><p>
                </div>
              </div>
  
              <div class="row-prog">
              <div class="icone">
                  <img src="img/icones/coupe.png">
                </div>
                <div class="time"><time>13:00 - 15:00</time>
                </div>
                <div class="texte">
                  <h4><h4><?php echo presentconcours;?></h4>
                  <p><?php echo souspresentconcours;?><p></h4>
                  <p>Défilé des mannequins qui auront été tatoués puis présentation des gagnants. </p>
                </div>
              </div>
  
              <div class="row-prog">
              <div class="icone">
                  <img src="img/icones/stand.png">
                </div>
                <div class="time"><time>15:00 - 20:00</time>
                </div>
                <div class="texte">
                <h4><?php echo ouvstands;?></h4>
                  <p><?php echo sousouvstands;?><p>
                </div>
              </div>
            </div>
            <!-- Fin jour 3 -->

            <!-- barre de séparation -->
            <hr noshade width="400" size="3" align="center" color="black">
  
          </div>
        </div>
      </section>
  
  <!--==========================
      Plan du site
    ============================-->
  
      <section class="plan-du-salon">
        <div class="plan">
          <h2><?php echo plansalon;?></h2>
        </div>   
        <div class="image-plan">
          <img src="img/plansalon.png" width="800px">
        </div>
      </section>

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