<?php
require_once '../header.php';
require __DIR__ . '/../../views-models/details/film_details.php';
require_once '../../db/db-connect.php';

getFilm();
?>
<h2><?= $_SESSION['film']['title'] ?></h2>





<?php require_once '../footer.php'; ?>
