<?php
require_once 'header.php';
require_once __DIR__ . '/../views-models/recherche.php';
require_once '../db/db-connect.php';

?>
    <h1>Resultats de la recherche</h1>

    <table class="table table-bordered table-condensed">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Année</th>
        </tr>
        </thead>
        <tbody>
        <?php rechercheFilms(); ?>
        </tbody>
    </table>



    <script type="text/javascript">
        function goToFilmAndActorDetails(id) {
            window.location.assign(`./details/film_details.php?id=${id}`);
        }
    </script>

<?php require_once 'footer.php'; ?>