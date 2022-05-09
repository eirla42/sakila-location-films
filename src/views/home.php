<?php
require_once 'header.php';
require __DIR__ . '/../views-models/home.php';

?>
    <h1>Liste des films</h1>

    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Année</th>
            </tr>
        </thead>
        <tbody>
            <?php renderFilms(); ?>
        </tbody>
    </table>

    <h1>Liste des acteurs</h1>

    <table class="table table-bordered table-condensed">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Année</th>
        </tr>
        </thead>
        <tbody>
        <?php renderActors(); ?>
        </tbody>
    </table>

<?php require_once 'footer.php'; ?>