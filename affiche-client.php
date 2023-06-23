<?php

$bdd = new PDO('mysql:host=localhost;dbname=agence_voyage', 'root','root');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiche Client</title>
</head>
<body>
    <?php
    $recupClients = $bdd->query('SELECT * FROM client');
    while ($client = $recupClients->fetch()){
    ?>
        <div>
            <ul>
                <li>Nom : <?= $client['nom'];?></li>
                <li>Prénom : <?= $client['prenom'];?></li>
                <li>Date de naissance : <?= $client['date_naissance'];?></li>
                <li>Téléphone : <?= $client['tel'];?></li>
                <li>E-Mail : <?= $client['mail'];?></li>
            </ul>
        </div>
    <?php
    }
    ?>
</body>
</html>