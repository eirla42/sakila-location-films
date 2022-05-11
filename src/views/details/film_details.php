<?php
require_once '../header.php';
require_once __DIR__ . '/../../views-models/details/film_details.php';
require_once '../../db/db-connect.php';

getFilm();
?>
<h2 class="mb-5">Location de film</h2>

<div class="border rounded flex-nowrap">
    <div class="left">
        <img src="../../assets/images/image-unavailable.jpg" alt="Image Unavailable">
    </div>

    <div class="text-left">
        <div class="d-flex flex-row mb-1">
            <h5><?= $_SESSION['film']['title'] ?></h5>
        </div>

        <div class="d-flex flex-row mb-5">
            <?= $_SESSION['film']['release_year'] ?>
            🕑 <?= $_SESSION['film']['length'] ?>min
        </div>

        <div class="d-flex flex-row mb-3">
            Description : <?= $_SESSION['film']['description'] ?>
        </div>

        <div class="d-flex flex-row mb-3">
            Actors :
            <?= $_SESSION['film']['actors'][0]->getFirstName() ?> <?= $_SESSION['film']['actors'][0]->getLastName() ?>,
            <?= $_SESSION['film']['actors'][1]->getFirstName() ?> <?= $_SESSION['film']['actors'][1]->getLastName() ?>,
            <?= $_SESSION['film']['actors'][2]->getFirstName() ?> <?= $_SESSION['film']['actors'][2]->getLastName() ?>
        </div>

        <div class="d-flex flex-row mb-3">
            Genre :
            <?php foreach ($_SESSION['film']['categories'] as $category) {
                echo $category->getName() . '. ';
            }?>
        </div>

        <div class="d-flex flex-row mb-3">
            Scènes additionnelles : <?= $_SESSION['film']['special_features'] ?>
        </div>

        <div class="d-flex flex-row mb-3">
            Temps de location : <?= $_SESSION['film']['rental_duration'] ?> jours,
            Prix : <?= $_SESSION['film']['rental_rate'] ?>€,
            Caution : <?= $_SESSION['film']['replacement_cost'] ?>€,
        </div>

    </div>
</div>

<?php require_once '../footer.php';?>
