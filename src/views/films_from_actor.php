<?php
require_once 'header.php';
require_once __DIR__ . '/../views-models/films_from_actor.php';
require_once '../db/db-connect.php';

?>
<h1>Liste des films par Acteur</h1>

<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th>Titre</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php renderFilmsFromActor('PALTROW', 'KIRSTEN'); ?>
    </tbody>
</table>

<?php require_once 'footer.php'; ?>
