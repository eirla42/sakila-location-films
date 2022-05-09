<?php
    require_once __DIR__."/../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title> <?= TITLE; ?> </title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="<?= URL_ROOT; ?>"> Home </a></li>
            <li><a href="<?= URL_ROOT; ?>"> Accueil </a></li>
            <li><a href="<?= ACTOR_LINK; ?>"> Actor page </a></li>
            <li><a href="<?= ACTOR_FROM_FILM_LINK; ?>"> Actor from film page </a></li>
            <li><a href="<?= FILM_FROM_ACTOR_LINK; ?>"> Film from actor page </a></li>
            <li><a href="<?= URL_ROOT; ?>views/admin/film/list-film.php"> Admin - Liste des films </a></li>
        </ul>
    </nav>

    <div class='text-center container'>