<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Programmation</title>

    <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Main Stylesheet File -->
  <link href="css/style-Copie.css" rel="stylesheet">
  <link rel="stylesheet" href="style-menu-footer.css">

  </head>

<body>

  <header>
    <?php
    include('menu.html');
    ?>
  </header>
    <!--==========================
     PROGRAMMATION
    ============================-->
    <section id="prog" class="programmation">
        <div class="intro">
          <div class="section-intro">
            <h2>PROGRAMMATION</h2>
            <p>Programmation du salon Art’Ink Event<br>
            Du 30 Juin 2023 au 02 Juillet 2023</p>
          </div>
  
          <ul class="journee" role="tablist">
            <li class="jour">
              <a class="day" href="#day-1" role="tab" data-toggle="tab">VEN 30 JUIN</a>
            </li>
            <li class="jour">
              <a class="day" href="#day-2" role="tab" data-toggle="tab">SAM 01 JUILLET</a>
            </li>
            <li class="jour">
              <a class="day" href="#day-3" role="tab" data-toggle="tab">DIM 02 JUILLET</a>
            </li>
          </ul>
  
          
          <div class="details">
  
            <!--Jour 1 -->
            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
  
              <div class="row-prog">
                <div class="col-md-2"><time>13:00</time></div>
                <div class="col-md-10">
                  <h4>Présentation des candidats pour le concours</h4>
                  <p>Présentation de tout les candidats, de leur spécialité de tatouage et quel pays ils représentent</p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>14:00</time></div>
                <div class="col-md-10">
                  <h4>Présentation du Jury</h4>
                  <p>Des tatoueurs reconnu pour leurs talents seront présent pour élire les meilleurs tatoueurs du concours</p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>15:00 - 20:00</time></div>
                <div class="col-md-10">
                  <h4>Ouverture des stands</h4>
                  <p>Divers stands seront ouvert afin de pouvoir faire des tatouages éphémères, du heiné, des piercings, des tatouages...</p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>21:00</time></div>
                  <div class="col-md-10">
                    <div class="artiste">
                      <img src="img/artiste/ingala.jpg">
                    </div>
                    <h4>Concert <span>Ingalawash</span></h4>
                    <p>Groupe de rock originaire du Puy-en-Velay est composé de cinq musiciens liés par une solide amitié. Le groupe rock même en patois pour montrer l'amour qu'il prote à ses origines. 
                    </p>
                  </div>
              </div>
  
            </div>
            <!-- Fin du jour 1 -->
  
            <!-- Jour 2 -->
  
            <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
  
              <div class="row-prog">
                <div class="col-md-2"><time>10:00 - 20:00</time></div>
                <div class="col-md-10">
                  <h4>Ouverture des stands</h4>
                  <p>Tatouages, piercings, tatouage éphémère, heiné...</p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>14:00 - 16:00</time></div>
                <div class="col-md-10">
                  <div class="artiste">
                    <img src="img/artiste/lucile.jpg">
                  </div>
                  <h4>Atelier dessin<span>Lucile Filhol</span></h4>
                  <p>Illustratrice originaire du Puy-en-Velay qui sera présente pour donner des cours et des conseils de dessins. </p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>16:00</time></div>
                <div class="col-md-10">
                  <div class="artiste">
                    <img src="img/artiste/veg.png">
                  </div>
                  <h4>Spectacle de suspending<span>Veg Silencio et sa troupe Endorphins Rising</span></h4>
                  <p>Le suspending est une pratique de modification corporelle permettant via des crochets fixés par piercing de suspendre un corps. Ces piercings sont installés peu de temps avant de réaliser la suspension et sont retirés par la suite.<br>
                  La troupe Endorphins Rising souhaite faire découvrir cette pratique originale et permettre aux spectateurs qui seraient curieux, d'essayer après le spectacle le suspending.</p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>22:00</time></div>
                <div class="col-md-10">
                  <div class="artiste">
                    <img src="img/artiste/gojia.jpg">
                  </div>
                  <h4>Concert <span>Gojira </span></h4>
                  <p>Gojira est un groupe de death metal français, originaire d'Ondres. Il est initialement formé en 1996 sous le nom de Godzilla, puis adopte le nom de Gojira en 2001. Le groupe est composé de quatre membres</p>
                </div>
              </div>
  
            </div>
            <!-- Fin jour 2 -->
  
            <!-- Jour 3 -->
  
            <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
  
              <div class="row-prog">
                <div class="col-md-2"><time>10:00 - 13:00</time></div>
                <div class="col-md-10">
                  <h4>Ouverture des stands</h4>
                  <p>Tatouages, piercings, tatouage éphémère, heiné...</p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>13:00</time></div>
                <div class="col-md-10">
                  <h4>Présentation des gagnants du concours</h4>
                  <p>Défilé des mannequins qui auront été tatoués puis présentation des gagnants. </p>
                </div>
              </div>
  
              <div class="row-prog">
                <div class="col-md-2"><time>18:00 - 20:00</time></div>
                <div class="col-md-10">
                  <h4>Ouverture des stands</h4>
                  <p>Tatouages, piercings, tatouage éphémère, heiné...</p>
                </div>
              </div>
            </div>
            <!-- Fin jour 3 -->
  
          </div>
        </div>
      </section>
  
  <!--==========================
      Plan du site
    ============================-->
  
      <section class="plan-du-salon">
        <div class="" id="plan">
  
          <section id="" class="plansite">
            <div class="container-plan">
              <div class="section-plan">
                <h2>Plan du salon</h2>
              </div>
              <div class="row plan">
                <div class="col-lg-6">
                  <img src="img/artiste/gojia.jpg">
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      
      <?php
       include("footer.html")
      ?>
</body>

</html>