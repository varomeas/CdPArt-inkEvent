<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Contact</title>
    
        <!-- Favicons -->
      <link href="img/artiste/favicon.png" rel="icon">
      <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    
      <!-- Main Stylesheet File -->
      <link href="css.css" rel="stylesheet">
      <link href="style-menu-footer.css" rel="stylesheet">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" 
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
      crossorigin=""/>
    <script
      src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
      integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s="
      crossorigin=""
    ></script>
      </head>

<body>

    <header>
        <?php
        include('menu.html');
        ?>
        
      </header>
        <section>
            <div class="container">
                <section class="contact">
    
                    <div class="container-contact">
                        <div class="section-contact">
                            <h2>CONTACT</h2>
                            <p>Adresse mail: artinkevent@gmail.com<br>
                            Téléphone: 06.05.23.63.78<br>
                            Dates:<br><br>
                            - Vendredi 30 Juin<br>
                            - Samedi 01 Juillet<br>
                            - Dimanche 02 Juillet<br><br>
                            Lieux: Place du Breuil, 43 000, Le Puy-en-Velay
                            </p>
                        </div>
    
                        <div  class="divMap">
                            <div id="map" class="mapContainer"></div>
                        </div>

                    </div>
                </section>
            </div>
        </section>

        <footer>
        <?php
        include('footer.html');
        ?>
      </footer>
      <script src="contact.js"></script>
    </body>   
</html>