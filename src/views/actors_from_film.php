<?php
require_once 'header.php';
require __DIR__ . '/../views-models/actors_from_film.php';
require_once '../db/db-connect.php';

?>
<h1>Liste des acteurs par Film</h1>

<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
    </thead>
    <tbody>
    <?php renderActorsFromFilm('AGENT TRUMAN'); ?>
    </tbody>
</table>

<?php require_once 'footer.php'; ?>
