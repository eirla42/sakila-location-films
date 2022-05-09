<?php
require_once 'header.php';
require __DIR__ . '/../views-models/home.php';
require_once '../db/db-connect.php';

?>
<h1>Liste des acteurs</h1>

<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
    </thead>
    <tbody>
    <?php renderActors(); ?>
    </tbody>
</table>

<?php require_once 'footer.php'; ?>
