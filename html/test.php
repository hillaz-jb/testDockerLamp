<?php

/*use App\AbstractConnectToDb;
use App\MovieSynopsis;
use App\User;*/

include './functions/functions.php';
include './App/EcMovieSynopsis.php';

/*$toto = 'toto';
dump($toto);
$user= new User();
$user->setFirstName('user');
$user->setLastName('user');
$user->setEmail('user@user.fr');
$user->setPassword('root');*/

$ecSynopsis = new \App\EcMovieSynopsis();
$ecSynopsis->connection();
$currentSynopsis = [];
$currentSynopsis = $ecSynopsis->selectOneSynopsis(1);


dump($currentSynopsis);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0" />
    <meta name="description" content="test />
    <meta name="author" content="Jérémy Barland" />
    <title>Test</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="home">
<header>

</header>

<main class="container">
    <section>
       <h1 class="text-center text-danger">
           id : <?php echo($currentSynopsis['id']) ?>
       </h1>
        <div class="ps-4 mt-5 bg-dark text-light">
            content : <?php echo($currentSynopsis['content']) ?>
        </div>
        <div class="mt-5">
            <button class="btn btn-success">Test js</button>
        </div>
    </section>
</main>

<footer>

</footer>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery-3.6.0.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->

