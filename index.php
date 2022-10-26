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
                <p>Salon du tatouage du Puy-en-Velay le <couleur> 30, 1 & 2 juillet 2022</couleur></p>
                <p>- Place du breuil -</p>
            </div>
        </div>
    <!--introduction-->
        <div>
            <h2 class="textCentre"> Le Salon rassemble des tatoueurs de différentes origines : Anglais, Belges, allemands de toute l'Europe.</h2>
            <h2 class="textCentre">Afin de vous faire découvrir la culture du tatouage et vous tatouer sur place, réservez votre week-end du 30, 1 & 2 juillet 2022 </h2>
        </div>
    <!--bouton billeterie-->
        <div id="containerBouton">
            <a href="billeterie.html"><button><span>Billeterie</span></button></a>
        </div>
    <!--icone activités-->
        <div class="flexActivites">
            <article>
                <img src="img/icones/stand.png" width="80vw" alt="Image1">
                <p>15 Stands</p>
            </article>
            <article>
                <img src="img/icones/tatoueurs.png" width="80vw" alt="Image2">
                <p>11 tatoueurs</p>
            </article>
            <article>
                <img src="img/icones/percing.png" width="80vw" alt="Image3">
                <p>2 perceurs</p>
            </article>
            <article>
                <img src="img/icones/dessin.png" width="80vw" alt="Image4">
                <p>1 dessinatrice </p>
            </article>
        </div>
    <!--texte présentation des activités-->
        <section>
            <h2> 3 jours de festivités</h2>
            <h3 class="prog">Au programme : tatoueurs, perceurs, spending, concert et bien plus encore... </h3>
        </section>
        <h3 class="prog">Comme le stand de nouvelle technologie dans lequelle vous pourrez tester vos percings et tatouages
        </h3>
        <h3 class="prog"> avant de vous les faire grâce à un scanner qui vous les projectera sur le corps.</h3>
    <!--texte présentation suspending-->
        <section>
            <h2>Mais qu’est ce que le suspending ?</h2>
            <h3 id="textSpending">DES CROCHETS DANS LA PEAU ? L'ART DÉLICAT DE LA SUSPENSION</h3>
            <img src="img/suspending.png" alt="suspending" width=900px>
            <h4>Entre le tatouage et le piercing, la modification corporelle, se trouve une pratique qui marque le
                corps<br>temporairement, qui perce le corps, temporairement, et qui modifie le corps. En revanche, elle
                frappe l'esprit pour longtemps.<br> On parle ici de la suspension corporelle. Si vous ne connaissez pas
                cette discipline on vous invite à venir la découvrir à l'Art'ink Event .</h4>
        </section>
    <!--texte présentation des concerts-->
        <div>
            <h2 id="textConcert">Concerts de Ingalawash & Gojira</h2>
            <img src="img/concert.png" alt="Image d'un concert" width=1200px >
        </div>
    <!--footer-->
    <?php include("footer.html")?>
</body>
</html>