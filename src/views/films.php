<?php
require_once 'header.php';
require __DIR__ . '/../views-models/films.php';
require_once '../db/db-connect.php';

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
    <div>
        <ul class="pagination right">
            <li class="page-item <?= ($_SESSION['currentPage'] == 1) ? "disabled" : "" ?>">
                <a href="./films.php?page=<?= 1 ?>" class="page-link"><<</a>
            </li>
            <li class="page-item <?= ($_SESSION['currentPage'] == 1) ? "disabled" : "" ?>">
                <a href="./films.php?page=<?= $_SESSION['currentPage'] - 1 ?>" class="page-link">Précédente</a>
            </li>

            <?php for(
                $page = ($_SESSION['currentPage'] >= 4) ? $_SESSION['currentPage'] - 2 : 1;
                $page <= (($_SESSION['currentPage'] + 3 < $_SESSION['pages']) ? $_SESSION['currentPage'] + 3 : $_SESSION['pages']);
                $page++): ?>
                <li class="page-item <?= ($_SESSION['currentPage'] == $page) ? "active" : "" ?>">
                    <a href="./films.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                </li>
            <?php endfor ?>

            <li class="page-item <?= ($_SESSION['currentPage'] == $_SESSION['pages']) ? "disabled" : "" ?>">
                <a href="./?films.phppage=<?= $_SESSION['currentPage'] + 1 ?>" class="page-link">Suivante</a>
            </li>
            <li class="page-item <?= ($_SESSION['currentPage'] == $_SESSION['pages']) ? "disabled" : "" ?>">
                <a href="./?films.phppage=<?= $_SESSION['pages'] ?>" class="page-link">>></a>
            </li>
        </ul>
    </div>


<script type="text/javascript">
    function goToDetails(id) {
        window.location.assign(`./details/film_details.php?id=${id}`);
    }
</script>

<?php require_once 'footer.php'; ?>