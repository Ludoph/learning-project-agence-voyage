<?php

$bdd = new PDO('mysql:host=localhost;dbname=agence_voyage', 'root','root');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiche Utilisateur</title>
</head>
<body>
    <?php
    $recupUtilisateurs = $bdd->query('SELECT * FROM utilisateur');
    while ($utilisateur = $recupUtilisateurs->fetch()){
    ?>
        <div>
            <ul>
                <li>ID USER : <?= $utilisateur['id_utilisateur'];?></li>
                <li>Login : <?= $utilisateur['login'];?></li>
            </ul>
        </div>

    <?php
    }
    ?>
</body>
</html>