<?php
    require __DIR__."/../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'
          integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title> <?= TITLE; ?> </title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="<?= URL_ROOT; ?>"> Accueil </a></li>
            <li><a href="<?= URL_ROOT; ?>views/admin/film/list-film.php"> Liste des films </a></li>
        </ul>
    </nav>

    <div class='text-center container'>