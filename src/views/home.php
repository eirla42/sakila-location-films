<?php
require_once 'header.php';
require_once __DIR__ . '/../views-models/home.php';

?>

    <h1>Les films du moment</h1>

    <table class="table table-bordered table-condensed">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Année</th>
        </tr>
        </thead>
        <tbody>
        <?php renderFilmsLastTen(); ?>
        </tbody>
    </table>


<?php require_once 'footer.php'; ?>