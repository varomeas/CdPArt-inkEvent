<!DOCTYPE html>
<html lang="fr">

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
        include('menu.html');
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
                              <p>Adresse mail: artinkevent@gmail.com<br>
                              Téléphone: 06.05.23.63.78</p>
                              <p>Lieux: Place du Breuil, 43 000, Le Puy-en-Velay</p>
                            </div>
                            <div class="dates">
                              <p>Dates:</p>
                              <p> - Vendredi 30 Juin<br>
                              - Samedi 01 Juillet<br>
                              - Dimanche 02 Juillet</p>
                          </div>
                        </div>
    
                       
                </section>
          <div  class="divMap">
                            <div id="map" class="mapContainer"></div>
                        </div>
                    
    

      <footer>
        <?php
        include('footer.html');
        ?>
      </footer>

        <script src="script/contact.js"></script>

    </body>   
</html>