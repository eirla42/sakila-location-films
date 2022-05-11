<?php
    require_once __DIR__."/../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title> <?= TITLE; ?> </title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="<?= URL_ROOT; ?>"> Accueil </a></li>
            <li><a href="<?= FILM_LINK; ?>"> Films </a></li>
            <li><a href="<?= ACTOR_LINK; ?>"> Actor page </a></li>
            <li><a href="<?= ACTOR_FROM_FILM_LINK; ?>"> Actor from film page </a></li>
            <li><a href="<?= FILM_FROM_ACTOR_LINK; ?>"> Film from actor page </a></li>
            <li><a href="<?= URL_ROOT; ?>views/admin/film/list-film.php"> Admin - Liste des films </a></li>
        </ul>
    </nav>

    <div class='text-center container'>