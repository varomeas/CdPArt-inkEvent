<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil Art'ink Tattoo</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style-menu-footer.css">
    </head>
<body>
    <header>
<!--menu-->
        <?php
    include("menu.html")
        ?>
    </header>
<!--bannière-->
        <div class="containerBanniere">
            <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
            <div class="texteBanniere">
                <p>Le Puy-en-Velay tattoo fair on <couleur>June 30, July 1 & 2, 2023</couleur></p>
                <p>- Place du breuil -</p>
            </div>
        </div>
    <!--introduction-->
        <div>
            <h2 class="textCentre"> The Salon brings together tattoo artists of different origins: English, Belgian, German, from all over Europe.</h2>
            <h2 class="textCentre">To make you discover the culture of tattooing and tattoo yourself on site, book your weekend of June 30, July 1 & 2, 2023 </h2>
        </div>
    <!--bouton billeterie-->
        <div id="containerBouton">
            <a href="billeterie.html"><button><span>Ticketing</span></button></a>
        </div>
    <!--icone activités-->
        <div class="flexActivites">
            <article>
                <img src="img/icones/stand.png" width="80vw" alt="Image1">
                <p>15 Stands</p>
            </article>
            <article>
                <img src="img/icones/tatoueurs.png" width="80vw" alt="Image2">
                <p>11 tattoo artists</p>
            </article>
            <article>
                <img src="img/icones/percing.png" width="80vw" alt="Image3">
                <p>2 piercers</p>
            </article>
            <article>
                <img src="img/icones/dessin.png" width="80vw" alt="Image4">
                <p>1 designers </p>
            </article>
        </div>
    <!--texte présentation des activités-->
        <section>
            <h2> 3 days of festivities </h2>
            <h3 class="prog">On the program: tattoo artists, piercers, spending, concert and much more...</h3>
        </section>
        <h3 class="prog">Like the new technological stand in which you can test your piercings and tattoos</h3>
        <h3 class="prog">  before having them, thanks to a scanner that will project them into your body.</h3>
    <!--texte présentation suspending-->
        <section>
            <h2>But what is suspending?</h2>
            <h3 id="textSpending">HOOKS IN THE SKIN? THE DELICATE ART OF SUSPENSION</h3>
            <img src="img/suspending.png" alt="suspending" width=900px>
            <h4>Between the tattoo and the piercing, the body modification, is a practice which temporarily marks the body<br>, which pierces the body, temporarily, and modifies the body. 
            On the other hand, it marks the spirit for a long time.<br> We are talking here about body suspension. If you don't know
            this discipline we invite you to come and discover it at the Art'ink Event.

</h4>
        </section>
    <!--texte présentation des concerts-->
        <div>
            <h2 id="textConcert">Concerts by Ingalawash & Gojira</h2>
            <img src="img/concert.png" alt="Image d'un concert" width=1200px >
        </div>
    <!--footer-->
    <?php include("footer.html")?>
</body>
</html>