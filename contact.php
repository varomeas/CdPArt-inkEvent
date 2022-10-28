<?php include("lang.php");?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="img/logos/favicon.png" rel="icon">

        <title>Contact</title>
    
        <!-- Favicons -->
        <link href="img/logos/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Main Stylesheet File -->
        <link href="style/style.css" rel="stylesheet">
        <link rel="stylesheet" href="style/style-menu-footer.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" 
          integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
        crossorigin=""/>

      <!-- Script -->
      <script
        src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
        integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s="
        crossorigin="">
    </script>
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
            <p>Contact</p>
          </div>
        </div>

        <section class="contact">
          <div class="section-contact">
            <div class="adresse">
              <p><?php echo adresse;?></p>
              <p><?php echo lieux;?></p>
            </div>
            <div class="dates">
              <p>Dates:</p>
              <p><?php echo datescontact;?></p>
            </div>
          </div> 
        </section>

        <div  class="divMap">
          <div id="map" class="mapContainer"></div>
        </div>
                    
        <div id="scroll_to_top">
          <a href="#top"><img src="img/icones/fleche.png" alt="Retourner en haut" /></a>
        </div>

      <footer>
        <?php
        include('footer.php');
        ?>
      </footer>

        <script src="script/contact.js"></script>

    </body>   
</html>