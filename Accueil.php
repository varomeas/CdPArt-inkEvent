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
        <?php
    include("menu.html");
    include("fleche.html");
    include("script/ScriptDarkTheme.html");
        ?>
    </header>



    <!-- 
    <div class="containerVid">
        <video id="maVid" controls loop="" muted="" preload="metadata" autoplay>
            <source src="vidéo tatouage exemple.mp4" type="video/mp4">
        </video>
    </div>
-->
    <div class="containerBanniere">
        <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
        <div class="texteBanniere">
            <p id="textCentre">Salon du tatouage du Puy-en-Velay le <br>
                <couleur> 30, 1 & 2 juillet 2022</couleur>
            </p>
            <p>- Place du breuil -</p>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>


    <div>
        <h2 id="textCentre"> Le Salon rassemble des tatoueurs de différentes origines : <br> Anglais, Belges, allemands
            de toute l'Europe.</h2>
        <h2 id="textCentre">Afin de vous faire découvrir la culture du tatouage <br> et vous tatouer sur place, réservez
            votre <br> week-end du 30, 1 & 2 juillet 2022 </h2>
    </div>
    <br>
    <br>
    <div id="containerBouton">
        <a href="billeterie.html"><button id="billetterie"><span>Billeterie</span></button></a>
    </div>
    <br>
    <br>
    <br>

    <div class="flexActivites">
        <article>
            <img src="img/icones/stand.png" width="100vw" alt="Image1">
            <p>15 Stands</p>
        </article>
        <article>
            <img src="img/icones/tatoueurs.png" width="100vw" alt="Image2">
            <p>11 tatoueurs</p>
        </article>
        <article>
            <img src="img/icones/percing.png" width="100vw" alt="Image3">
            <p>2 perceurs</p>
        </article>
        <article>
            <img src="img/icones/dessin.png" width="100vw" alt="Image4">
            <p>1 dessinatrice </p>
        </article>
    </div>
    <br>
    <br>
    <section>
        <h2> 3 jours de festivités </h2>
        <h3 class="prog">Au programme : tatoueurs, perceurs, spending, concert et bien plus encore... </h3>
    </section>
    <h3 class="prog">Comme le stand de nouvelle technologie dans lequelle vous pourrez tester vos percings et tatouages
    </h3>
    <h3 class="prog"> avant de vous les faire grâce à

        un scanner qui vous les projectera sur le corps.</h3>
    <br>
    <br>
    <section>
        <h2>Mais qu’est ce que le suspending ?</h2>
        <h3 id="textSpending">DES CROCHETS DANS LA PEAU ? L'ART DÉLICAT DE LA SUSPENSION</h3>
        <h4>Entre le tatouage et le piercing, la modification corporelle, se trouve une pratique qui marque le
            corps<br>temporairement, qui perce le corps, temporairement, et qui modifie le corps. En revanche, elle
            frappe l'esprit pour longtemps.<br> On parle ici de la suspension corporelle. Si vous ne connaissez pas
            cette discipline on vous invite à venir la découvrir à l'Art'ink Event .</h4>
    </section>
    <div>
        <h2 id="textConcert">Concerts de Ingalawash & Gojira</h2>
        <img src="" alt="Image d'un concert">
    </div>
    <?php
    include("footer.html")
        ?>
</body>
</html>