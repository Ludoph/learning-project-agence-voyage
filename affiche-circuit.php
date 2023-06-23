<?php

$bdd = new PDO('mysql:host=localhost;dbname=agence_voyage', 'root','root');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiche Circuit</title>
    <link href="./dist/output.css" rel="stylesheet">
</head>
<body>
    <div>
        <div class="flex justify-center text-3xl font-thin py-20 z-10 pt-20" style="background-image: url('https://www.voyage-prive.com/s/images/visual/login/backgrounds/2048x1463-ponton.jpg');">
            <h1 class="text-gray-50">Voyage 
               <span class="font-bold">Vouaillage</span> 
            </h1>
        </div>
    </div>
        <?php
        $recupCircuits = $bdd->query('SELECT * FROM circuit');
        while ($circuit = $recupCircuits->fetch()){
        ?>
    <div class="mt-8 flex flex-wrap justify-center items-center flex-col space-x-0 md:space-x-10 md:flex-row">
        <div class="bg-white flex- flex-col min-h-card max-w-sm border border-gray-200 rounded-lg mt-5 text-left">
            <div class="px-6 pt-6 ">
                <h2 class="text-2xl font-bold text-gray-900"><?= $circuit['description'];?></h2>
                <p class="mt-2">
                    <span class="text-5xl font-extrabold text-gray-900"><?= $circuit['prix_inscription'];?>€</span>
                    <span class="font-medium text-black-800"><?= $circuit['nb_etape'];?> étapes</span>
                </p>
                <h3 class="text-xs font-medium textgray900 tracking-wide uppercase">Détail du circuit :</h3>
            </div>
            <div class="flex flex-row">
                <ul class="mt-6 px-6 flex flex-grow flex-shrink-0 flex-col">
                    <li class="flex space-x-3 py-2">
                        <span class="text-sm text-gray-800">Pays de départ : </span>
                         <?= $circuit['pays_depart'];?>
                    </li>
                    <li class="flex space-x-3 py-2">
                        <span class="text-sm text-gray-800">Ville de départ : </span>
                         <?= $circuit['ville_depart'];?>
                    </li>
                    <li class="flex space-x-3 py-2">
                        <span class="text-sm text-gray-800">Date de départ : </span>
                         <?= $circuit['date_depart'];?>
                    </li>
                </ul>
                <ul class="mt-6 px-6 flex flex-grow flex-shrink-0 flex-col">
                    <li class="flex space-x-3 py-2">
                        <span class="text-sm text-gray-800">Pays d'arrivée : </span>
                         <?= $circuit['pays_arrivee'];?>
                    </li>
                    <li class="flex space-x-3 py-2">
                        <span class="text-sm text-gray-800">Ville d'arrivée : </span>
                         <?= $circuit['ville_arrivee'];?>
                    </li>
                    <li class="flex space-x-3 py-2">
                        <span class="text-sm text-gray-800">Durée du circuit : </span>
                         <?= $circuit['duree'];?> jours
                    </li>
                </ul>
            </div>
            <a href="./affiche-etape.php" class="flex bg-blue-800 border border-gray-800 rounded-md py-2 text-md font-bold text-white text-center">Voir les étapes</a>
        </div<>
        <?php
        }
        ?>
</body>
</html>