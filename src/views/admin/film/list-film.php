<?php
require_once '../../header.php';
require __DIR__ .'/../../../db/db-connect.php';
require __DIR__ . '/../../../views-models/home.php';

?>
    <h1>Liste des films</h1>

    <div class='row'>
        <div class='text-left col-7 btn-group'>
            <a href='./add-film.php'><button class='btn btn-light btn-outline-secondary'>Ajouter</button></a>
            <a href='./list-film.php'><button class='btn btn-light btn-outline-secondary'>Réinitialiser la liste des films</button></a>
        </div>

        <div class='col-12'>
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
        </div>
    </div>

<?php require_once '../../footer.php'; ?>