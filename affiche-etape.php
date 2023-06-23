
<!-- <?php

$bdd = new PDO('mysql:host=localhost;dbname=agence_voyage', 'root','root');
$getId = $_GET['id_etape'];
$recupEtape = $bdd->prepare('SELECT * FROM etape WHERE id_etape = ?');
$recupEtape->execute(array($getId));
if ($recupEtape -> rowCount > 0) {
    $etapeInfo = $recupEtape->fetch();  
}

?>  -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiche Utilisateur</title>
</head>
<body>
    <?php
    $recupEtapes = $bdd->query('SELECT * FROM etape');
    while ($etape = $recupEtapes->fetch()){
    ?>
        <div>
            <ul>
                <li>Nom de l'étape : <?= $etape['nom_lieu'];?></li>
                <li>Ville : <?= $etape['ville'];?></li>
                <li>Pays : <?= $etape['pays'];?></li>
            </ul>
        </div>

    <?php
    }
    ?>
</body>
</html>