<?php

$bdd = new PDO('mysql:host=localhost;dbname=agence_voyage', 'root','root');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiche Circuit</title>
</head>
<body>
    <?php
    $recupCircuits = $bdd->query('SELECT * FROM circuit');
    while ($circuit = $recupCircuits->fetch()){
    ?>
        <div>
            <h2><?= $circuit['description'];?></h2>
            <ul>
                <li>Pays de départ : <?= $circuit['pays_depart'];?></li>
                <li>Ville de départ : <?= $circuit['ville_depart'];?></li>
                <li>Date de départ : <?= $circuit['date_depart'];?></li>
            </ul>
            <ul>
                <li>Pays d'arrivée : <?= $circuit['pays_arrivee'];?></li>
                <li>Ville d'arrivée : <?= $circuit['ville_arrivee'];?></li>
            </ul>
            <ul>
                <li> Durée en jours : <?= $circuit['duree'];?></li>
                <li>Tarif : <?= $circuit['prix_inscription'];?>€</li>
                <li>Nombre d'étapes : <?= $circuit['nb_etape'];?></li>
            </ul>
        </div>

    <?php
    }
    ?>
</body>
</html>