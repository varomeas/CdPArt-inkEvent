<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style-menu-footer.css">
    </head>
<body>
<!--menu-->
    <header>
        <?php include("menu.html") ?>
    </header>
<!--bannière billeterie-->
    <div class="containerBanniere">
            <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
            <div class="texteBanniere">
                  <p>Billeterie</p>
            </div>
    </div>
<!--titre-->
        <h2>Espace de pré-réservation</h2>
<!--formulaire-->
        <fieldset>
            <form action="" method="post">
                <h3 id="reserve">Vos informations personnelles</h3>
                <p>Veuillez renseigner votre <couleur>nom</couleur>, <couleur>prénom</couleur>, <couleur>date de naisance</couleur> et votre <couleur>email</couleur>. Un mail de confirmation vous sera envoyé.</p>
                    <input type="text" name="nom" placeholder="Votre Nom..." required></input>
                    <input type="text" name="prenom" placeholder="Votre Prénom..." required></input>
                    <input type="date" name="date_naissance" required></input>
                    <input type="mail" name="email" placeholder="mail@exemple.com" required></input>
<!--pré-réservations-->                   
                <h3 id="reserve">La pré-réservation</h3>
                <label>Nombres de places que vous souhaitez prendre :</label>
                    <input type="number" name="nb_places" placeholder="Nombre de places">
                <label id="titre_venir">Quel(s) jour(s) souhaitez-vous venir?</label>
<!--choix des dates réservations-->
                <div class="container-reservation">
                    <p id="taille_date">30 juin 2023 :</p>
                    <input type="checkbox" name="jour" class="taille"> </input>
                    <p id="taille_date">1er juillet 2023 :</p>
                    <input type="checkbox" name="jour" class="taille"></input>
                    <p id="taille_date">2 juillet 2023 :</p>
                    <input type="checkbox" name="jour" class="taille"> </input>
                </div>
                <div input type="submit" value="Valider" > <button>Valider</button></div>
            </form>
        </fieldset>
<?php include("footer.html")?>
</body>
</html>
        
