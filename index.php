<?php
// session_start();
if (isset($_POST['valider'])) {
    if (!empty($_POST['login']) and !empty($_POST['mdp'])) {
        $login_par_defaut = 'admin';
        $mdp_par_defaut = 'admin123';

        $login_saisi = htmlspecialchars($_POST['login']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if ($login_saisi == $login_par_defaut and $mdp_saisi == $mdp_par_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: client.php');
        } else {
            echo 'Votre pseudo ou mot de passe est incorrect.';
        }
    } else {
        echo 'Veuillez remplir tous les champs...';
    }
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <div class="w-screen h-screen bg-no-repeat bg-cover" style="background-image: url('https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072_1280.jpg');">
        <div class="flex justify-center text-2xl font-thin py-7 z-10">
            <h1 class="text-gray-100">Voyage 
               <span class="font-bold">Vouaillage</span> 
            </h1>
        </div>
    <div class="flex justify-center items-center mt-8 flex-wrap flex-row max-w-2xl mx-auto px-4 py-20 lg:max-w7xl">
        <form action="" method="post" class="bg-gray-100 flex flex-col px-6 py-10 text-center">
            <label class="m-2 text-transform: uppercase" for="login">Login :</label>
            <input class="py-2 px-2 outline-none text-center" type="text" id="login" name="login" autocomplete="off">
            <label class="m-2 text-transform: uppercase" for="mdp">Password :</label>
            <input class="py-2 px-2 outline-none text-center" type="password" id="mdp" name="mdp" autocomplete="off">
            <input type="submit" name="valider" class="bg-blue-400 rounded-sm mt-20 py-3 text-transform: uppercase" value="Valider">
        </form>
    </div>
    </div>
</body>

</html>