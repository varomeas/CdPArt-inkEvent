<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styleBilletterie.css">

    <link rel="stylesheet" href="style-menu-footer.css">
</head>
<body>
<?php
    include("menu.html")
        ?>
    <h1>Billeterie</h1>
        <h2>Espace de pré-réservation</h2>
        <fieldset>
            <form action="" method="post">
                <h3>Vos informations personnelles</h3>

                <p>Veuillez renseigner votre <couleur>nom</couleur>, <couleur>prénom</couleur>, <couleur>date de naisance</couleur> et votre <couleur>email</couleur>. Un mail de confirmation vous sera envoyé.</p>
                <br>
                <br>
                <input type="text" name="nom" placeholder="Votre Nom..." required></br></input>
                <br>
                <br>
                <input type="text" name="prenom" placeholder="Votre Prénom..." required></br></input>
                <br>
                <br>
                <input type="date" name="date_naissance" required></br></input>
                <br>
                <br>
                <input type="mail" name="email" placeholder="mail@exemple.com" required></input>
                <br>
                <br>
                <h3 id="reserve">La pré-réservation</h3>
                <label>Nombres de places que vous souhaitez prendre :</label>
                <input type="number" name="nb_places" placeholder="Nombre de places"></br>
                <br>
                <br>
                <label>Quel(s) jour(s) souhaitez-vous venir?</label>

                <div class="container">
                    30 juin 2023 :
                    <input type="checkbox" name="jour" class="taille"> </input>
                    1er juillet 2023 :
                    <input type="checkbox" name="jour" class="taille"></input>
                    2 juillet 2023 :
                    <input type="checkbox" name="jour" class="taille"> </input>
                </div>

                <div input type="submit" value="Valider" > <button>Valider</button></div>
            </form>
        </fieldset>
        <?php
    include("footer.html")
        ?>
</body>
</html>
        
